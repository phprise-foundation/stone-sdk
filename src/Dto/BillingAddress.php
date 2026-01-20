<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class BillingAddress extends TransferObject
{
    public function __construct(
        private ?string $zipCode = null,
        private ?string $city = null,
        private ?string $state = null,
        private ?string $country = null,
        private ?string $line1 = null
    ) {
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getLine1(): ?string
    {
        return $this->line1;
    }

    public function setZipCode(?string $zipCode): static
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function setLine1(?string $line1): static
    {
        $this->line1 = $line1;

        return $this;
    }
}