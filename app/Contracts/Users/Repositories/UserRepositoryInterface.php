<?php

namespace App\Contracts\Users\Repositories;

use App\Models\Users\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    /**
     * @param array $dados
     * @return User
     */
    public function create(array $dados): User;
}
