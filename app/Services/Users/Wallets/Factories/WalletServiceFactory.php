<?php

namespace App\Services\Wallets;

use App\Repositories\Wallets\WalletRepositoryInterface;
use App\Services\WalletService;

class WalletServiceFactory
{
    /**
     * @return \Api\Services\Wallets\WalletService
     */
    public function __invoke()
    {
        /** @var \Api\Repositories\Wallets\WalletRepositoryInterface $walletRepository */
        $walletRepository = app(WalletRepositoryInterface::class);

        return new WalletService(
            $walletRepository
        );
    }
}
