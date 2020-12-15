<?php

namespace App\Ddd\Shared\Infrastructure\Doctrine\Dbal;


interface DoctrineCustomType
{
    public static function customTypeName(): string;
}