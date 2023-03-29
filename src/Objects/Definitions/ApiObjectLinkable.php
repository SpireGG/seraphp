<?php

declare(strict_types=1);

namespace SeraPHPhine\Objects\Definitions;

use SeraPHPhine\Exceptions\GeneralException;

abstract class ApiObjectLinkable extends ApiObject
{
    public array|null|object $staticData = null;

    public function __get($prop)
    {
        if (!$this->staticData || !property_exists($this->staticData, $prop)) {
            $classname = get_class($this);
            throw new GeneralException("Trying to access undefined property '$prop' on object '$classname'.");
        }

        return $this->staticData->$prop;
    }
}
