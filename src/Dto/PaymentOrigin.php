<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class PaymentOrigin extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?string $chargeId = null,
        private ?string $brandId = null
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    public function setChargeId(?string $chargeId): static
    {
        $this->chargeId = $chargeId;

        return $this;
    }

    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    public function setBrandId(?string $brandId): static
    {
        $this->brandId = $brandId;

        return $this;
    }
}