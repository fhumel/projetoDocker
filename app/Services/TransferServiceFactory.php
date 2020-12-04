<?php

namespace App\Services;

use App\Repositories\TransferRepositoryInterface;

class TransferServiceFactory
{
    /**
     * @return \Api\Services\TransferServiceFactory
     */
    public function __invoke()
    {
//        /** @var \Api\Repositories\TransferRepositoryInterface $transferRepository */
//        $transferRepository = app(TransferRepositoryInterface::class);

        return new TransferService(
//            $transferRepository
        );
    }
}
