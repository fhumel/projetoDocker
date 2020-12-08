<?php

namespace App\Repositories;

use App\Mappers\TransferMapperInterface;

class UserRepositoryFactory
{
    /**
     * @return UserRepository
     */
    public function __invoke()
    {
        /** @var \Api\Mappers\Users\UserMapperInterface $mapper */
        $mapper = app(UserMapperInterface::class);

        return new UserRepository(
            $mapper
        );
    }
}
