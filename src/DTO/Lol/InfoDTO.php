<?php

declare(strict_types=1);

namespace SeraPHP\DTO\Lol;

use SeraPHP\Collection\Lol\TeamDTOCollection;
use SeraPHP\Collection\Lol\ParticipantDTOCollection;
use SeraPHP\DTO\DTOInterface;

final class InfoDTO implements DTOInterface
{
    public function __construct(
        /** Unix timestamp for when the game is created on the game server (i.e., the loading screen). */
        private readonly int $gameCreation,
        /** Prior to patch 11.20, this field returns the game length in milliseconds calculated from gameEndTimestamp - gameStartTimestamp. Post patch 11.20, this field returns the max timePlayed of any participant in the game in seconds, which makes the behavior of this field consistent with that of match-v4. The best way to handling the change in this field is to treat the value as milliseconds if the gameEndTimestamp field isn't in the response and to treat the value as seconds if gameEndTimestamp is in the response. */
        private readonly int $gameDuration,
        /** Unix timestamp for when match ends on the game server. This timestamp can occasionally be significantly longer than when the match "ends". The most reliable way of determining the timestamp for the end of the match would be to add the max time played of any participant to the gameStartTimestamp. This field was added to match-v5 in patch 11.20 on Oct 5th, 2021. */
        private readonly int $gameEndTimestamp,
        private readonly int $gameId,
        /** Refer to the Game Constants documentation. */
        private readonly string $gameMode,
        private readonly string $gameName,
        /** Unix timestamp for when match starts on the game server. */
        private readonly int $gameStartTimestamp,
        private readonly string $gameType,
        /** The first two parts can be used to determine the patch a game was played on. */
        private readonly string $gameVersion,
        /** Refer to the Game Constants documentation. */
        private readonly int $mapId,
        private readonly ParticipantDTOCollection $participants,
        /** Platform where the match was played. */
        private readonly string $platformId,
        /** Refer to the Game Constants documentation. */
        private readonly int $queueId,
        private readonly TeamDTOCollection $teams,
        /** Tournament code used to generate the match. This field was added to match-v5 in patch 11.13 on June 23rd, 2021. */
        private readonly string $tournamentCode,
    ) {
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['gameCreation'],
            $data['gameDuration'],
            $data['gameEndTimestamp'],
            $data['gameId'],
            $data['gameMode'],
            $data['gameName'],
            $data['gameStartTimestamp'],
            $data['gameType'],
            $data['gameVersion'],
            $data['mapId'],
            ParticipantDTOCollection::createFromArray($data['participants']),
            $data['platformId'],
            $data['queueId'],
            TeamDTOCollection::createFromArray($data['teams']),
            $data['tournamentCode']
        );
    }

    public function getGameCreation(): int
    {
        return $this->gameCreation;
    }

    public function getGameDuration(): int
    {
        return $this->gameDuration;
    }

    public function getGameEndTimestamp(): int
    {
        return $this->gameEndTimestamp;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function getGameMode(): string
    {
        return $this->gameMode;
    }

    public function getGameName(): string
    {
        return $this->gameName;
    }

    public function getGameStartTimestamp(): int
    {
        return $this->gameStartTimestamp;
    }

    public function getGameType(): string
    {
        return $this->gameType;
    }

    public function getGameVersion(): string
    {
        return $this->gameVersion;
    }

    public function getMapId(): int
    {
        return $this->mapId;
    }

    public function getParticipants(): ParticipantDTOCollection
    {
        return $this->participants;
    }

    public function getPlatformId(): string
    {
        return $this->platformId;
    }

    public function getQueueId(): int
    {
        return $this->queueId;
    }

    public function getTeams(): TeamDTOCollection
    {
        return $this->teams;
    }

    public function getTournamentCode(): string
    {
        return $this->tournamentCode;
    }
}
