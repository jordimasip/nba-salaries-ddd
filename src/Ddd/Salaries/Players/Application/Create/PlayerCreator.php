<?php
declare(strict_types = 1);

namespace App\Ddd\Salaries\Players\Application\Create;

use App\Ddd\Salaries\Players\Domain\Player;
use App\Ddd\Salaries\Players\Domain\PlayerId;
use App\Ddd\Salaries\Players\Domain\PlayerName;
use App\Ddd\Salaries\Players\Domain\PlayerRepository;

class PlayerCreator
{

    private $repository;

    public function __construct(PlayerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreatePlayerRequest $request)
    {
        $id = new PlayerId($request->id());
        $name = new PlayerName($request->name());

        $player = Player::create($id, $name);

        $this->repository->save($player);
    }
}