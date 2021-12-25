<?php
declare(strict_types=1);

use Laminas\Diactoros\ResponseFactory;

$container = new League\Container\Container();

$container->add('App\Application\Controller\exampleController', App\Application\Controller\exampleController::class);

$strategy = (new League\Route\Strategy\ApplicationStrategy)->setContainer($container);
