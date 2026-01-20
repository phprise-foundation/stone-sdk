<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

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