<?php

namespace App\Mappers\Users\Wallets\Transactions\Factories;

use App\Mappers\Users\Wallets\Transactions\TransactionMapper;
use App\Entities\Users\Wallets\Transactions\TransactionEntity;

class TransactionMapperFactory
{
    public function __invoke(): TransactionMapper
    {
        $transactionEntity = app(TransactionEntity::class);
        return new TransactionEntity($transactionEntity);
    }
}
