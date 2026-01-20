<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;

class BankTransfer extends TransferObject
{
    public function __construct(
        private ?string $bank = null
    )
    {
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): static
    {
        $this->bank = $bank;

        return $this;
    }
}