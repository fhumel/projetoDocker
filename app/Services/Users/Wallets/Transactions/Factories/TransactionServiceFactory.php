<?php

namespace App\Services\Transactions;

use App\Repositories\TransactionRepositoryInterface;
use App\Services\TransactionService;

class TransactionServiceFactory
{
    /**
     * @return \Api\Services\Transactions\TransferServiceFactory
     */
    public function __invoke()
    {
        /** @var \Api\Repositories\Transactions\TransactionRepositoryInterface $transactionRepository */
        $transactionRepository = app(TransactionRepositoryInterface::class);

        return new TransactionService(
            $transactionRepository
        );
    }
}
