<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;
use DateTimeInterface;

class Order extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        /** @var string|null $code Format: {clientId}_{unitId}_{environment} */
        private ?string $code = null,
        private ?Customer $customer = null,
        private ?string $customerId = null,
        private ?ItemCollection $items = null,
        private ?ChargeCollection $charges = null,
        private ?PoiPaymentSettings $poiPaymentSettings = null,
        private ?int $amount = null,
        private ?bool $closed = null,
        private ?string $currency = null,
        private ?string $status = null,
        private ?DateTimeInterface $createdAt = null,
        private ?DateTimeInterface $updatedAt = null,
    ) {
        if ($this->items === null) {
            $this->items = new ItemCollection();
            $this->charges = new ChargeCollection();
        }
    }

    public function getAmountAsFloat(): ?float
    {
        return round(floatval($this->getAmount()) / 100.0, 2);
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->items->getAmount();
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): static
    {
        $this->customer = $customer;

        return $this;
    }

    public function getItems(): ItemCollection
    {
        return $this->items;
    }

    public function setItems(ItemCollection $items): static
    {
        $this->items = $items;

        return $this;
    }

    public function addItem(Item $item): static
    {
        if (! $this->items->contains($item)) {
            $this->items->add($item);
        }

        return $this;
    }

    public function addItemWhenPositive(Item $item): static
    {
        if (! $this->items->contains($item) && $item->getAmount() > 0) {
            $this->items->add($item);
        }

        return $this;
    }

    public function removeItem(Item $item): static
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
        }

        return $this;
    }

    public function getPoiPaymentSettings(): ?PoiPaymentSettings
    {
        return $this->poiPaymentSettings;
    }

    public function setPoiPaymentSettings(?PoiPaymentSettings $poiPaymentSettings): static
    {
        $this->poiPaymentSettings = $poiPaymentSettings;

        return $this;
    }

    public function setAmount(?int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getClosed(): ?bool
    {
        return $this->closed;
    }

    public function setClosed(?bool $closed): static
    {
        $this->closed = $closed;
        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): static
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function getCharges(): ChargeCollection
    {
        return $this->charges;
    }

    public function setCharges(ChargeCollection $charges): static
    {
        $this->charges = $charges;

        return $this;
    }

    public function addCharge(Charge $charge): static
    {
        if (! $this->charges->contains($charge)) {
            $this->charges->add($charge);
        }

        return $this;
    }

    public function removeCharge(Charge $charge): static
    {
        if ($this->charges->contains($charge)) {
            $this->charges->removeElement($charge);
        }

        return $this;
    }
}