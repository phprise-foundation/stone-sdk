<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;
use DateTimeInterface;

class Card extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        private ?string $firstSixDigits = null,
        private ?string $lastFourDigits = null,
        private ?string $brand = null,
        private ?int $expMonth = null,
        private ?int $expYear = null,
        private ?string $status = null,
        private ?string $type = null,
        private ?DateTimeInterface $createdAt = null,
        private ?DateTimeInterface $updatedAt = null,
        private ?BillingAddress $billingAddress = null,
        private ?array $metadata = null
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFirstSixDigits(): ?string
    {
        return $this->firstSixDigits;
    }

    public function getLastFourDigits(): ?string
    {
        return $this->lastFourDigits;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function getBillingAddress(): ?BillingAddress
    {
        return $this->billingAddress;
    }

    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function setFirstSixDigits(?string $firstSixDigits): static
    {
        $this->firstSixDigits = $firstSixDigits;

        return $this;
    }

    public function setLastFourDigits(?string $lastFourDigits): static
    {
        $this->lastFourDigits = $lastFourDigits;

        return $this;
    }

    public function setBrand(?string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function setExpMonth(?int $expMonth): static
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    public function setExpYear(?int $expYear): static
    {
        $this->expYear = $expYear;

        return $this;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setBillingAddress(?BillingAddress $billingAddress): static
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function setMetadata(?array $metadata): static
    {
        $this->metadata = $metadata;

        return $this;
    }
}
