<?php

namespace App\Ddd\Shared\Domain;

interface UuidGenerator
{
    public function generate(): string;
}