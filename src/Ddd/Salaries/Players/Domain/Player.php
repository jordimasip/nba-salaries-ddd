<?php
declare(strict_types=1);

namespace App\Ddd\Salaries\Players\Domain;


use App\Ddd\Shared\Domain\Aggregate\AggregateRoot;

final class Player extends AggregateRoot
{

    private $id;
    private $name;

    public function __construct(PlayerId $id, PlayerName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public static function create(PlayerId $id, PlayerName $name): self
    {
        $player = new self($id, $name);

        return $player;
    }

    public function id(): PlayerId
    {
        return $this->id;
    }

    public function name(): PlayerName
    {
        return $this->name;
    }

}