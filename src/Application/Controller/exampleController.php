<?php
declare(strict_types=1);

namespace App\Application\Controller;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class exampleController
{
    public function index(ServerRequestInterface $request, array $args): ResponseInterface
    {
        /**
         * Please note in usual implementations this will be in a response factory
         * in our own infrastructure level that we can be decoupled from the vendor
         * packages.
         */
        return new JsonResponse(
            [
                'test_message' => 'This is a simple implementation'
            ],
            200
        );
    }
}