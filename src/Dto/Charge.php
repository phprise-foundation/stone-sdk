<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;
use DateTimeInterface;

class Charge extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        private ?string $code = null,
        private ?string $gatewayId = null,
        private ?int $amount = null,
        private ?int $paidAmount = null,
        private ?string $status = null,
        private ?string $currency = null,
        private ?string $paymentMethod = null,
        private ?\DateTimeInterface $paidAt = null,
        private ?\DateTimeInterface $createdAt = null,
        private ?\DateTimeInterface $updatedAt = null,
        private ?Order $order = null,
        private ?Customer $customer = null,
        private ?LastTransaction $lastTransaction = null,
    ) {}

    public function getAmountAsFloat(): ?float
    {
        return round(floatval($this->getAmount()) / 100.0, 2);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getGatewayId(): ?string
    {
        return $this->gatewayId;
    }

    public function setGatewayId(string $gatewayId): static
    {
        $this->gatewayId = $gatewayId;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPaidAmount(): ?int
    {
        return $this->paidAmount;
    }

    public function setPaidAmount(int $paidAmount): static
    {
        $this->paidAmount = $paidAmount;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaidAt(): ?\DateTimeInterface
    {
        return $this->paidAt;
    }

    public function setPaidAt(\DateTimeInterface $paidAt): static
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): static
    {
        $this->order = $order;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): static
    {
        $this->customer = $customer;

        return $this;
    }

    public function getLastTransaction(): ?LastTransaction
    {
        return $this->lastTransaction;
    }

    public function setLastTransaction(LastTransaction $lastTransaction): static
    {
        $this->lastTransaction = $lastTransaction;

        return $this;
    }
}
