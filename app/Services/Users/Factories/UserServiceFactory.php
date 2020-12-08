<?php

namespace App\Services\Users;

use App\Repositories\Users\UserRepositoryInterface;

class UserServiceFactory
{
    /**
     * @return \Api\Services\Users\UserService
     */
    public function __invoke()
    {
        /** @var \Api\Repositories\Users\UserRepositoryInterface $userRepository */
        $userRepository = app(UserRepositoryInterface::class);

        return new UserService(
            $userRepository
        );
    }
}
