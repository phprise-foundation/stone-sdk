<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class Item extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        private ?int $amount = null,
        private ?string $description = null,
        private ?int $quantity = null,
        private ?string $code = null,
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int|float|null $amount): static
    {
        if (is_float($amount)) {
            $amount = intval($amount * 100);
        }

        $this->amount = $amount;

        return $this;
    }

    public function getAmountAsFloat(): ?float
    {
        return round(floatval($this->amount) / 100.0, 2);
    }

    public function setAmountAsFloat(?float $amountAsFloat): static
    {
        $this->amount = intval($amountAsFloat * 100);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }
}