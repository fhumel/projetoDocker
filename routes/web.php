<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/test', [
    'uses' => 'TransferController@test'
]);
