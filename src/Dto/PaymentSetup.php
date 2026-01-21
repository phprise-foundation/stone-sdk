<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class PaymentSetup extends TransferObject
{
    public function __construct(
        /** @var 'debit'|'credit'|'voucher'|'pix'|null $type */
        private ?string $type = null,
        private ?int $installments = null,
        private ?string $installmentType = null
    )
    {
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

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): static
    {
        $this->installments = $installments;

        return $this;
    }

    public function getInstallmentType(): ?string
    {
        return $this->installmentType;
    }

    public function setInstallmentType(?string $installmentType): static
    {
        $this->installmentType = $installmentType;

        return $this;
    }
}