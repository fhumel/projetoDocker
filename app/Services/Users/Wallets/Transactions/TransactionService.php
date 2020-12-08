<?php

namespace App\Services\Users\Wallets\Transactions;

use App\Contracts\Users\Wallets\Repositories\WalletRepositoryInterface;
use App\Contracts\Users\Wallets\Transactions\Repositories\TransactionRepositoryInterface;
use App\Contracts\Users\Wallets\Transactions\Services\TransactionServiceInterface;
use App\Models\User\Wallets\Transactions\Transaction;

class TransactionService implements TransactionServiceInterface
{


    /** @var TransactionRepositoryInterface */
    private $transactionRepository;

    /**
     * TransactionService constructor.
     *
     * @param TransactionRepositoryInterface $transactionRepository
     * @param WalletRepositoryInterface $walletRepository
     */
    public function __construct(
        TransactionRepositoryInterface $transactionRepository,
        WalletRepositoryInterface $walletRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->walletRepository = $walletRepository;
    }

    /**
     * @inheritDoc
     */
    public function pay($dados): Transaction
    {

        // $value
        $value = $dados['value'];

        // $payee
        $payee = $dados['payee'];

        // payer
        $payer = $dados['payer'];

        //withdown $payer
        //deposit $payee
        //creat transaction

        return $this->transactionRepository->pay($dados);
    }


    /**
     * @inheritDoc
     */
    public function list(): array
    {
        return $this->transactionRepository->list();
    }

}
