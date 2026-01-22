<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class Split extends TransferObject
{
    public function __construct(
        private ?int $amount = null,
        private ?string $recipientId = null,
        private ?string $type = null,
        private ?SplitOptions $options = null,
    )
    {
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    public function setRecipientId(?string $recipientId): static
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getOptions(): ?SplitOptions
    {
        return $this->options;
    }

    public function setOptions(?SplitOptions $options): static
    {
        $this->options = $options;

        return $this;
    }
}