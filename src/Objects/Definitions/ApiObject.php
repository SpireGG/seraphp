<?php

namespace SeraPHPhine\Objects\Definitions;

use SeraPHPhine\Exceptions\GeneralException;

abstract class ApiObject implements IApiObject
{
    private $_iterable;
    private array $property;

    public function __construct(array $data)
    {
        // Tries to assigns data to class properties
        $selfRef = new \ReflectionClass($this);
        $namespace = $selfRef->getNamespaceName();
        $iterableProp = $selfRef->hasProperty('_iterable')
            ? self::getIterablePropertyName($selfRef->getDocComment())
            : false;

        foreach ($data as $property => $value) {
            try {
                $propRef = $selfRef->getProperty($property);
                //  Object has required property, time to discover if it's
                $dataType = self::getPropertyDataType($propRef->getDocComment());
                if (false !== $dataType && is_array($value)) {
                    //  Property is special DataType
                    $newRef = new \ReflectionClass("$namespace\\$dataType->class");
                    if ($dataType->isArray) {
                        //  Assign initial array
                        $this->$property = [];
                        //  Property is array of special DataType (another API object)
                        foreach ($value as $identifier => $d) {
                            $this->$property[$identifier] = $newRef->newInstance($d);
                        }
                    } else {
                        //  Property is special DataType (another API object)
                        $this->$property = $newRef->newInstance($value);
                    }
                } else {
                    //  Property is general value
                    $this->$property = $value;
                }

                if ($iterableProp === $property) {
                    $this->_iterable = $this->$property;
                }
            } //  If property does not exist
            catch (\ReflectionException $ex) {
            }
        }

        $this->_data = $data;
    }

    /**
     *   Returns name of iterable property specified in PHPDoc comment.
     */
    public static function getIterablePropertyName(string $phpDocComment): bool|string
    {
        preg_match('/@iterable\s\$([\w]+)/', $phpDocComment, $matches);
        if (isset($matches[1])) {
            return $matches[1];
        }

        return false;
    }

    /**
     *   Returns data of linkable property specified in PHPDoc comment.
     */
    public static function getLinkablePropertyData(string $phpDocComment): bool|array
    {
        preg_match('/@linkable\s(?<function>[\w]+)(?:\(\$(?<parameter>[\w]+)+?\))?/', $phpDocComment, $matches);

        // Filter only named capture groups
        $matches = array_filter($matches, static fn ($v, $k) => is_string($k), ARRAY_FILTER_USE_BOTH);
        if (@$matches['function'] && @$matches['parameter']) {
            return $matches;
        }

        return false;
    }

    /**
     *   Returns DataType specified in PHPDoc comment.
     */
    public static function getPropertyDataType(string $phpDocComment): bool|\stdClass
    {
        $o = new \stdClass();

        preg_match('/@var\s+(\w+)(\[\])?/', $phpDocComment, $matches);

        $o->class = $matches[1];
        $o->isArray = isset($matches[2]);

        if (in_array($o->class, ['integer', 'int', 'string', 'bool', 'boolean', 'double', 'float', 'array'])) {
            return false;
        }

        return $o;
    }

    /**
     *   This variable contains all the data in an array.
     *
     * @internal
     */
    protected array $_data = [];

    /**
     *   Gets all the original data fetched from SeraPHPhine.
     */
    public function getData(): array
    {
        return $this->_data;
    }

    /**
     *   Object extender.
     *
     * @internal
     */
    protected ?IApiObjectExtension $_extension;

    /**
     *   Magic call method used for calling ObjectExtender methods.
     *
     * @return mixed
     *
     * @throws GeneralException
     */
    public function __call($name, $arguments)
    {
        if (!$this->_extension) {
            throw new GeneralException("Method '$name' not found, no extension exists for this ApiObject.");
        }

        try {
            $r = new \ReflectionClass($this->_extension);

            return $r->getMethod($name)->invokeArgs($this->_extension, $arguments);
        } catch (\Exception $ex) {
            throw new GeneralException("Method '$name' failed to be executed: ".$ex->getMessage(), 0, $ex);
        }
    }
}
