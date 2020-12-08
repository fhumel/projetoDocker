<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'user'], function () use ($router) {
    $router->post('register', ['uses' => 'Contracts/Users/UserControllerInterface@create']);
    $router->get('list', ['uses' => 'Contracts/Users/UserControllerInterface@list']);

    $router->group(['prefix' => 'wallet'], function () use ($router) {

        $router->post('deposit', ['uses' => 'Contracts/Users/Wallets/WalletControllerInterface@deposit']);
        $router->post('balance', ['uses' => 'Contracts/Users/Wallets/WalletControllerInterface@balance']);

        $router->group(['prefix' => 'transactions'], function () use ($router) {
            $router->get('list', ['uses' => 'Contracts/Users/Wallets/Transactions/TransactionControllerInterface@transaction']);
        });
    });
});
