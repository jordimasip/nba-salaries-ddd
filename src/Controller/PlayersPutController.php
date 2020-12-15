<?php


namespace App\Controller;


use App\Ddd\Salaries\Players\Application\Create\CreatePlayerRequest;
use App\Ddd\Salaries\Players\Application\Create\PlayerCreator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayersPutController
{
    private $playerCreator;

    public function __construct(PlayerCreator $playerCreator)
    {
        $this->playerCreator = $playerCreator;
    }

    public function __invoke(string $id, Request $request): Response
    {
        $this->playerCreator->__invoke(
            new CreatePlayerRequest(
                $id,
                $request->request->getAlpha('name')
            )
        );

        return new Response('', Response::HTTP_CREATED);
    }

}