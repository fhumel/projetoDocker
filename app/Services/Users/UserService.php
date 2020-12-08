<?php

namespace App\Services\Users;

use Illuminate\Support\Collection;

class UserService implements UserServiceInterface
{

    /** @var \App\Repositories\Users\UserRepositoryInterface */
    private $userRepository;

    /**
     * UsuarioService constructor.
     *
     * @param \App\Repositories\Users\UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @inheritDoc
     */
    public function register($dados): Collection
    {
        return $this->userRepository->transfer();
    }

    /**
     * @inheritDoc
     */
    public function list($dados): Collection
    {
        return $this->userRepository->list();
    }

}
