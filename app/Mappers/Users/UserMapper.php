<?php

namespace App\Mappers\Users;

use App\Contracts\Users\Mappers\UserMapperInterface;

class UserMapper implements UserMapperInterface
{
    /** @var \App\Entities\Users\UserEntity */
    private $userEntity;

    /**
     * UserMapper constructor.
     * @param \App\Entities\Users\UserEntity $userEntity
     */
    public function __construct(UserEntity $userEntity)
    {
        $this->userEntity = $userEntity;
    }

    /**
     * @param array $dados
     * @return \App\Entities\DefaultEntityInterface
     * @throws \App\Exceptions\InvalidDocumentException
     * @throws \App\Exceptions\InvalidEmailException
     */
    public function map(array $dados): DefaultEntityInterface
    {
        $userEntity = clone $this->userEntity;
        isset($dados['id']) ? $userEntity->setId($dados['id']) : $userEntity->setId(null);
        $userEntity
            ->setWalletId($dados['walletId'])
            ->setName($dados['name'])
            ->setCpf($dados['cpf'])
            ->setEmail($dados['email'])
            ->setPassword($dados['password']);
        return $userEntity;
    }

    /**
     * @param \App\Entities\Users\UserEntity $userEntity
     * @return array
     */
    public function revert(DefaultEntityInterface $userEntity): array
    {
        return [
            'id' => $userEntity->getId(),
            'cpf' => $userEntity->getCpf(),
            'name' => $userEntity->getName(),
            'email' => $userEntity->getEmail(),
            'walletId' => $userEntity->getWalletId()
        ];
    }
}
