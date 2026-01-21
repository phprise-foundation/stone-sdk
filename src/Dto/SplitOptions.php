<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class SplitOptions extends TransferObject
{
    public function __construct(
        /** Indica se o recebedor vinculado à regra será cobrado pelas taxas da transação */
        private ?bool $chargeProcessingFee = null,

        /** Indica se o recebedor vinculado à regra irá receber o restante dos recebíveis após uma divisão */
        private ?bool $chargeRemainderFee = null,

        /** Indica se o recebedor é responsável pela transação em caso de chargeback. */
        private ?bool $liable = null,
    )
    {
    }

    public function getChargeProcessingFee(): ?bool
    {
        return $this->chargeProcessingFee;
    }

    public function setChargeProcessingFee(?bool $chargeProcessingFee): static
    {
        $this->chargeProcessingFee = $chargeProcessingFee;

        return $this;
    }

    public function getChargeRemainderFee(): ?bool
    {
        return $this->chargeRemainderFee;
    }

    public function setChargeRemainderFee(?bool $chargeRemainderFee): static
    {
        $this->chargeRemainderFee = $chargeRemainderFee;

        return $this;
    }

    public function getLiable(): ?bool
    {
        return $this->liable;
    }

    public function setLiable(?bool $liable): static
    {
        $this->liable = $liable;

        return $this;
    }
}