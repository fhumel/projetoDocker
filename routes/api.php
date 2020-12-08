<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'user'], function () use ($router) {
        $router->post('register', ['uses' => 'Contracts/Users/UserControllerInterface@create']);
        $router->get('list', ['uses' => 'Contracts/Users/UserControllerInterface@list']);

        $router->group(['prefix' => 'wallet'], function () use ($router) {

            $router->post('deposit', ['uses' => 'Contracts/Users/Wallets/WalletControllerInterface@deposit']);
            $router->post('balance', ['uses' => 'Contracts/Users/Wallets/WalletControllerInterface@balance']);

            $router->group(['prefix' => 'transaction'], function () use ($router) {
                $router->post('list', ['uses' => 'Contracts/Users/Wallets/Transactions/TransactionControllerInterface@transaction']);
            });
        });
    });
});
