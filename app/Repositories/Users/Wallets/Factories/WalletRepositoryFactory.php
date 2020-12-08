<?php

namespace App\Repositories\Wallets;

use App\Mappers\Wallets\WalletMapperInterface;

class WalletRepositoryFactory
{
    /**
     * @return \App\Repositories\Wallets\WalletRepository
     */
    public function __invoke()
    {
        /** @var \Api\Mappers\Wallets\WalletMapperInterface $mapper */
        $mapper = app(WalletMapperInterface::class);

        return new WalletRepository(
            $mapper
        );
    }
}
