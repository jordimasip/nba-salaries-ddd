<?php

declare(strict_types=1);

namespace App\Ddd\Salaries\Players\Domain;


interface PlayerRepository
{

    public function save(Player $player): void;

    public function search(PlayerId $id): ?Player;
}