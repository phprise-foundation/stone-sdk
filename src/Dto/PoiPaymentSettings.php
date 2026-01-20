<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class PoiPaymentSettings extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?bool $visible = null,
        private ?string $displayName = null,
        private ?bool $printOrderReceipt = null,
        private ?PaymentSetup $paymentSetup = null,
        private ?array $devicesSerialNumber = null,
        private ?\DateTimeInterface $createdAt = null,
        private ?\DateTimeInterface $updatedAt = null
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

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): static
    {
        $this->visible = $visible;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): static
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getPrintOrderReceipt(): ?bool
    {
        return $this->printOrderReceipt;
    }

    public function setPrintOrderReceipt(?bool $printOrderReceipt): static
    {
        $this->printOrderReceipt = $printOrderReceipt;

        return $this;
    }

    public function getPaymentSetup(): ?PaymentSetup
    {
        return $this->paymentSetup;
    }

    public function setPaymentSetup(?PaymentSetup $paymentSetup): static
    {
        $this->paymentSetup = $paymentSetup;

        return $this;
    }

    public function getDevicesSerialNumber(): ?array
    {
        return $this->devicesSerialNumber;
    }

    public function setDevicesSerialNumber(?array $devicesSerialNumber): static
    {
        $this->devicesSerialNumber = $devicesSerialNumber;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}