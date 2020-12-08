<?php

namespace App\Services\Wallets;

use App\Services\Wallets\WalletServiceInterface;
use Illuminate\Support\Collection;

class WalletService implements WalletServiceInterface
{


    /** @var \App\Repositories\Wallets\WalletRepositoryInterface */
    private $walletRepository;

    /**
     * TransactionService constructor.
     *
     * @param \App\Repositories\Wallets\WalletRepositoryInterface $walletRepository
     */
    public function __construct(WalletRepositoryInterface $walletRepository)
    {
        $this->walletRepository = $walletRepository;
    }

    /**
     * @inheritDoc
     */
    public function transfer($dados): Collection
    {
        return $this->walletRepository->transfer();
    }

}
