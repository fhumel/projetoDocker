<?php

namespace App\Mappers\Users\Wallets;

class WalletMapper implements TransferMapperInterface
{
    /** @var \App\Entities\Users\Wallets\WalletEntity */
    private $walletEntity;

    /**
     * UserMapper constructor.
     * @param \App\Entities\Users\Wallets\WalletEntity $walletEntity
     */
    public function __construct(Wallets\WalletEntity $walletEntity)
    {
        $this->walletEntity = $walletEntity;
    }

    /**
     * @param array $dados
     * @return \App\Entities\DefaultEntityInterface
     * @throws \App\Exceptions\InvalidDocumentException
     * @throws \App\Exceptions\InvalidEmailException
     */
    public function map(array $dados): DefaultEntityInterface
    {
        $walletEntity = clone $this->walletEntity;
        isset($dados['id']) ? $walletEntity->setId($dados['id']) : $walletEntity->setId(null);
        $walletEntity
            ->setName($dados['money'])
            ->setUserId($dados['userId']);
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
