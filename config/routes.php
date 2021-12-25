<?php
declare(strict_types=1);

//pre load container that routes can wire to classes
require_once 'container.php';

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router   = (new League\Route\Router)->setStrategy($strategy);


try {
//We can split these into classes or different files
    $router->map('GET','/test', 'App\Application\Controller\exampleController::index');
    $response = $router->dispatch($request);
    (new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
} catch (Exception $exception) {
    die('THere seems to be some routing issues NEIL');
}


