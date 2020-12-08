<?php

namespace App\Mappers\Users\Wallets\Transactions;

class TransactionMapper implements TransactionMapperInterface
{
    /** @var \App\Entities\Users\Wallets\Transactions\Transactionsntity */
    private $transactionEntity;

    /**
     * TransactionMapper constructor.
     * @param \App\Entities\Users\Wallets\Transactions\TransactionEntity $transactionEntity
     */
    public function __construct(TransactionEntity $transactionEntity)
    {
        $this->transactionEntity = $transactionEntity;
    }

    /**
     * @param array $dados
     * @return \App\Entities\DefaultEntityInterface
     * @throws \App\Exceptions\InvalidDocumentException
     * @throws \App\Exceptions\InvalidEmailException
     */
    public function map(array $dados): DefaultEntityInterface
    {
        $transactionEntity = clone $this->walletTypeEntity;
        isset($dados['id']) ? $transactionEntity->setId($dados['id']) : $transactionEntity->setId(null);
        $transactionEntity
            ->setValue($dados['value'])
            ->setPayer($dados['payer'])
            ->setPayee($dados['payee']);
        return $transactionEntity;
    }

    /**
     * @param \App\Entities\Users\Wallets\Transactions\TransactionEntity $transactionEntity
     * @return array
     */
    public function revert(DefaultEntityInterface $transactionEntity): array
    {
        return [
            'id' => $transactionEntity->getId(),
            'value' => $transactionEntity->getValue(),
            'payer' => $transactionEntity->getPayer(),
            'setPayee' => $transactionEntity->GetPayee()
        ];
    }
}
