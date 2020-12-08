<?php

namespace App\Services\Transactions;

use App\Services\TransactionsServiceInterface;
use Illuminate\Support\Collection;

class TransactionService implements TransactionsServiceInterface
{


    /** @var \App\Repositories\Tansactions\TransactionRepositoryInterface */
    private $transactionRepository;

    /**
     * TransactionService constructor.
     *
     * @param \App\Repositories\Tansactions\TransactionRepositoryInterface $transactionRepository
     */
    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * @inheritDoc
     */
    public function transfer($dados): Collection
    {
        return $this->transactionRepository->transfer();
    }

}
