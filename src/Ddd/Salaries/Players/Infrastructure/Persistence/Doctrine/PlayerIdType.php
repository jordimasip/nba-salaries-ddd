<?php

namespace App\Ddd\Salaries\Players\Infrastructure\Persistence\Doctrine;


use App\Ddd\Salaries\Players\Domain\PlayerId;
use App\Ddd\Shared\Infrastructure\Persistence\Doctrine\UuidType;

final class PlayerIdType extends UuidType
{
    public static function customTypeName(): string
    {
        return 'player_id';
    }

    protected function typeClassName(): string
    {
        return PlayerId::class;
    }
}