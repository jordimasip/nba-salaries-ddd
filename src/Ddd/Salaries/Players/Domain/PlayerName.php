<?php

namespace App\Ddd\Salaries\Players\Domain;


use App\Ddd\Shared\Domain\ValueObject\StringValueObject;

class PlayerName extends StringValueObject
{
    public function __construct(string $value)
    {
        //$this->ensureLengthIsLongerThan3Characters($value);

        parent::__construct($value);
    }

    private function ensureLengthIsLongerThan3Characters(string $value): void
    {
        if (strlen($value) < 3) {
            throw new \InvalidArgumentException("The value should be longer than 3 characters");
        }
    }

}