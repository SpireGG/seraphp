# SeraPHPhine [![codecov](https://codecov.io/gh/SpireGG/seraphp/branch/main/graph/badge.svg?token=G6N2HQBIM4)](https://codecov.io/gh/SpireGG/seraphp)
PHP wrapper around Riot Games APIs. 

### Features
- 🎉 PSR-18 & PSR-17 compliant - no more dependency on one specific HTTP Client!
- 🎉 Dependency-injection first - easy usage with all modern frameworks! 
- 🎉 GitHub Actions for Quality Assurance - it just works!
- 🎉 Single Responsibility - only API communication inside!

## Getting started
SeraPHPhine is available via [Composer](https://getcomposer.org/). It does not implement HTTP Client on its own
and uses PSR-17 and PSR-18 abstraction so you are free to choose any HTTP Client you want. 

```
composer require simivar/riot-php symfony/http-client nyholm/psr7
```

## APIs Coverage
> :warning: APIs that have their names ~strikethrough~ are deprecated and will be removed.

| API                   | Docs                                                               | Status   | 
|-----------------------|--------------------------------------------------------------------|----------|
| Account v1            | [docs](https://developer.riotgames.com/apis#account-v1)            | 100%     |
| Champion Mastery v4   | [docs](https://developer.riotgames.com/apis#champion-mastery-v4)   | 100%     |
| Champion v3           | [docs](https://developer.riotgames.com/apis#champion-v3)           | 100%     |
| Clash v1              | [docs](https://developer.riotgames.com/apis#clash-v1)              | 100%     |
| League Exp v4         | [docs](https://developer.riotgames.com/apis#league-exp-v4)         | 100%     |
| League v4             | [docs](https://developer.riotgames.com/apis#league-v4)             | 100%     |
| LOL Challenges v1     | [docs](https://developer.riotgames.com/apis#lol-challenges-v1)     | 0%       |
| ~LOL Status v3~       | [docs](https://developer.riotgames.com/apis#lol-status-v3)         | 100%     |
| LOL Status v4         | [docs](https://developer.riotgames.com/apis#lol-status-v4)         | 100%     |
| LOR Deck v1           | [docs](https://developer.riotgames.com/apis#lor-deck-v1)           | 0%       |
| LOR Inventory v1      | [docs](https://developer.riotgames.com/apis#lor-inventory-v1)      | 0%       |
| LOR Match v1          | [docs](https://developer.riotgames.com/apis#lor-match-v1)          | 100%     |
| LOR Ranked v1         | [docs](https://developer.riotgames.com/apis#lor-ranked-v1)         | 100%     |
| LOR Status v1         | [docs](https://developer.riotgames.com/apis#lor-status-v1)         | 100%     |
| Match v5              | [docs](https://developer.riotgames.com/apis#match-v5)              | 100%     |
| ~Spectator v4~        | [docs](https://developer.riotgames.com/apis#spectator-v4)          | 100%     |
| Spectator v5          | [docs](https://developer.riotgames.com/apis#spectator-v5)          | 100%     |
| Summoner v4           | [docs](https://developer.riotgames.com/apis#summoner-v4)           | 100%     |
| TFT League v1         | [docs](https://developer.riotgames.com/apis#tft-league-v1)         | 100%     |
| TFT Match v1          | [docs](https://developer.riotgames.com/apis#tft-match-v1)          | 100%     |
| TFT Summoner v1       | [docs](https://developer.riotgames.com/apis#tft-summoner-v1)       | 100%     |
| Third Party Code v4   | [docs](https://developer.riotgames.com/apis#third-party-code-v4)   | 100%     |
| Tournament Stub v5    | [docs](https://developer.riotgames.com/apis#tournament-stub-v5)    | 0%       |
| Tournament v5         | [docs](https://developer.riotgames.com/apis#tournament-v5)         | 0%       |
| VAL Content v1        | [docs](https://developer.riotgames.com/apis#val-content-v1)        | 100%     |
| VAL Match v1          | [docs](https://developer.riotgames.com/apis#val-match-v1)          | 0%       |
| VAL Ranked v1         | [docs](https://developer.riotgames.com/apis#val-ranked-v1)         | 0%       |
| VAL Status v1         | [docs](https://developer.riotgames.com/apis#val-status-v1)         | 0%       | 
| --------------------- | ------------------------------------------------------------------ | -------- |

# Usage
```php
<?php

require_once('vendor/autoload.php');

$config = new \SeraPHP\API\Configuration([
    'api_key' => 'PASTE-YOUR-API-KEY-HERE',
]);
$riotApi = new \SeraPHP\Seraphphine($config);
$lolStatus = $riotApi->getVersion4()
    ->getLolStatus()
    ->getPlatformData(\Riot\Enum\RegionEnum::EUN1())
    ;
```

# Legal notice
Riot PHP isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or anyone officially 
involved in producing or managing Riot Games properties. Riot Games, and all associated properties are trademarks 
or registered trademarks of Riot Games, Inc.
