<?php

namespace App\Ddd\Salaries\Players\Infrastructure\Persistence;

use App\Ddd\Salaries\Players\Domain\Player;
use App\Ddd\Salaries\Players\Domain\PlayerId;
use App\Ddd\Salaries\Players\Domain\PlayerRepository;
use App\Ddd\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class DoctrinePlayerRepository extends DoctrineRepository implements PlayerRepository
{

    public function save(Player $player): void
    {
        $this->persist($player);
    }

    public function search(PlayerId $id): ?Player
    {
        return $this->repository(Player::class)->find($id);
    }
}