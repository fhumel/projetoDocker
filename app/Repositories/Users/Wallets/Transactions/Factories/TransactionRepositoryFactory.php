<?php

namespace App\Repositories;

use App\Mappers\TransferMapperInterface;

class TransactionRepositoryFactory
{
    /**
     * @return TransactionRepository
     */
    public function __invoke()
    {
        /** @var \Api\Mappers\Users $mapper */
        $mapper = app(TransactionMapperInterface::class);

        return new TransactionRepository(
            $mapper
        );
    }
}
