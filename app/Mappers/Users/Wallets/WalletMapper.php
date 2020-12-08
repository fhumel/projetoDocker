<?php

namespace App\Mappers\Users\Wallets;

use App\Contracts\Users\Wallets\Mappers\WalletMapperInterface;
use App\Entities\Users\Wallets\WalletEntity;

class WalletMapper implements WalletMapperInterface
{
    /** @var \App\Entities\Users\Wallets\WalletEntity */
    private $walletEntity;

    /**
     * UserMapper constructor.
     * @param \App\Entities\Users\Wallets\WalletEntity $walletEntity
     */
    public function __construct(WalletEntity $walletEntity)
    {
        $this->walletEntity = $walletEntity;
    }

    /**
     * @param array $dados
     * @throws \App\Exceptions\InvalidDocumentException
     * @throws \App\Exceptions\InvalidEmailException
     */
    public function map(array $dados): WalletEntity
    {
        $walletEntity = clone $this->walletEntity;
        isset($dados['id']) ? $walletEntity->setId($dados['id']) : $walletEntity->setId(null);
        $walletEntity
            ->setMoney($dados['money'])
            ->setType($dados['type']);
        return $walletEntity;
    }

    /**
     * @param \App\Entities\Users\Wallets\WalletEntity $walletEntity
     * @return array
     */
    public function revert(DefaultEntityInterface $walletEntity): array
    {
        return [
            'id' => $walletEntity->getId(),
            'money' => $walletEntity->getMoney(),
            'userId' => $walletEntity->getUserId()
        ];
    }
}
