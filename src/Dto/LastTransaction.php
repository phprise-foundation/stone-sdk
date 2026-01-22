<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use DateTimeInterface;

class LastTransaction extends TransferObject
{
    public function __construct(
        private ?string $transactionType = null,
        private ?string $acquirerTid = null,
        private ?string $acquirerNsu = null,
        private ?string $acquirerAuthCode = null,
        private ?string $acquirerMessage = null,
        private ?string $acquirerReturnCode = null,
        private ?string $operationType = null,
        private ?Card $card = null,
        private ?string $fundingSource = null,
        private ?string $id = null,
        private ?string $gatewayId = null,
        private ?int $amount = null,
        private ?string $status = null,
        private ?bool $success = null,
        private ?DateTimeInterface $createdAt = null,
        private ?DateTimeInterface $updatedAt = null,
        private ?array $gatewayResponse = null,
        private ?array $antifraudResponse = null,
        private ?string $entryMode = null,
        private ?DateTimeInterface $initiatorDate = null,
        private ?string $initiatorReference = null,
        private ?string $initiatorTransactionKey = null,
        private ?string $deviceSerialNumber = null,
        private ?int $installments = null,
        private ?string $installmentType = null
    ) {
    }

    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    public function setTransactionType(?string $transactionType): static
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    public function getAcquirerTid(): ?string
    {
        return $this->acquirerTid;
    }

    public function setAcquirerTid(?string $acquirerTid): static
    {
        $this->acquirerTid = $acquirerTid;
        return $this;
    }

    public function getAcquirerNsu(): ?string
    {
        return $this->acquirerNsu;
    }

    public function setAcquirerNsu(?string $acquirerNsu): static
    {
        $this->acquirerNsu = $acquirerNsu;
        return $this;
    }

    public function getAcquirerAuthCode(): ?string
    {
        return $this->acquirerAuthCode;
    }

    public function setAcquirerAuthCode(?string $acquirerAuthCode): static
    {
        $this->acquirerAuthCode = $acquirerAuthCode;
        return $this;
    }

    public function getAcquirerMessage(): ?string
    {
        return $this->acquirerMessage;
    }

    public function setAcquirerMessage(?string $acquirerMessage): static
    {
        $this->acquirerMessage = $acquirerMessage;
        return $this;
    }

    public function getAcquirerReturnCode(): ?string
    {
        return $this->acquirerReturnCode;
    }

    public function setAcquirerReturnCode(?string $acquirerReturnCode): static
    {
        $this->acquirerReturnCode = $acquirerReturnCode;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): static
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): static
    {
        $this->card = $card;
        return $this;
    }

    public function getFundingSource(): ?string
    {
        return $this->fundingSource;
    }

    public function setFundingSource(?string $fundingSource): static
    {
        $this->fundingSource = $fundingSource;
        return $this;
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

    public function getGatewayId(): ?string
    {
        return $this->gatewayId;
    }

    public function setGatewayId(?string $gatewayId): static
    {
        $this->gatewayId = $gatewayId;
        return $this;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(?bool $success): static
    {
        $this->success = $success;
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

    public function getGatewayResponse(): ?array
    {
        return $this->gatewayResponse;
    }

    public function setGatewayResponse(?array $gatewayResponse): static
    {
        $this->gatewayResponse = $gatewayResponse;
        return $this;
    }

    public function getAntifraudResponse(): ?array
    {
        return $this->antifraudResponse;
    }

    public function setAntifraudResponse(?array $antifraudResponse): static
    {
        $this->antifraudResponse = $antifraudResponse;
        return $this;
    }

    public function getEntryMode(): ?string
    {
        return $this->entryMode;
    }

    public function setEntryMode(?string $entryMode): static
    {
        $this->entryMode = $entryMode;
        return $this;
    }

    public function getInitiatorDate(): ?DateTimeInterface
    {
        return $this->initiatorDate;
    }

    public function setInitiatorDate(?DateTimeInterface $initiatorDate): static
    {
        $this->initiatorDate = $initiatorDate;
        return $this;
    }

    public function getInitiatorReference(): ?string
    {
        return $this->initiatorReference;
    }

    public function setInitiatorReference(?string $initiatorReference): static
    {
        $this->initiatorReference = $initiatorReference;
        return $this;
    }

    public function getInitiatorTransactionKey(): ?string
    {
        return $this->initiatorTransactionKey;
    }

    public function setInitiatorTransactionKey(?string $initiatorTransactionKey): static
    {
        $this->initiatorTransactionKey = $initiatorTransactionKey;
        return $this;
    }

    public function getDeviceSerialNumber(): ?string
    {
        return $this->deviceSerialNumber;
    }

    public function setDeviceSerialNumber(?string $deviceSerialNumber): static
    {
        $this->deviceSerialNumber = $deviceSerialNumber;
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
