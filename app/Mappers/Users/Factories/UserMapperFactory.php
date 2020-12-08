<?php

namespace App\Mappers\Users\Factories;

use App\Mappers\Users\WalletMapper;
use App\Entities\Users\WalletEntity;

class UserMapperFactory
{
    public function __invoke(): UserMapper
    {
        $userEntity = app(UserEntity::class);
        return new UserEntity($userEntity);
    }
}
