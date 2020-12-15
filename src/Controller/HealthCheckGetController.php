<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckGetController
{
    /**
     * @Route("/health-check")
     */
    public function test(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'check' => 'working',
                'message'  => 'ok',
            ]
        );
    }
}