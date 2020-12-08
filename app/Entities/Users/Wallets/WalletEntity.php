<?php

namespace App\Entities\Users\Wallets;

class WalletEntity
{
    /** @var integer */
    private ?int $id = null;

    /** @var float */
    private float $money;

    /** @var string */
    private string $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return WalletEntity
     */
    public function setType(?string $type): WalletEntity
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return UserEntity
     */
    public function setId(?string $id): WalletEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float|null $money
     * @return UserEntity
     */
    public function setMoney(?float $money): WalletEntity
    {
        $this->money = $money;
        return $this;
    }
}
