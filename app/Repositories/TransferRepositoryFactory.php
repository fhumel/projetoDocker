<?php

namespace App\Repositories;

use App\Mappers\TransferMapperInterface;

class TransferRepositoryFactory
{
    /**
     * @return TransferRepository
     */
    public function __invoke()
    {
        /** @var \Api\Mappers\TransferMapperInterface $mapper */
        $mapper = app(TransferMapperInterface::class);

        return new TransferRepository(
            $mapper
        );
    }
}
