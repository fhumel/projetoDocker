<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'user'], function () use ($router) {
    $router->post('register', ['uses' => 'Users\UserController@create']);
    $router->get('list', ['uses' => 'Users\UserController@list']);
});

$router->group(['prefix' => 'wallet'], function () use ($router) {
    $router->post('deposit', ['uses' => 'Users\Wallets\WalletController@deposit']);
    $router->get('balance', ['uses' => 'Users\Wallets\WalletController@balance']);
});

$router->group(['prefix' => 'transactions'], function () use ($router) {
    $router->post('pay', ['uses' => 'Users\Wallets\Transactions\TransactionController@pay']);
    $router->get('list', ['uses' => 'Users\Wallets\Transactions\TransactionController@list']);
});
