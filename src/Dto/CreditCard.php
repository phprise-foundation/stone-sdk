<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class CreditCard extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?string $operationType = null,
        private ?int $installments = null,
        /** @var string $statmentDescriptor {maxlen: 22} */
        private ?string $statmentDescriptor = null,
        private ?Card $card = null,
        private ?array $networkToken = null,
        private ?string $cardId = null,
        private ?string $cardToken = null,
        private ?string $recurrenceCycle = null,
        private ?string $initiatedType = null,
        private ?string $recurrenceModel = null,
        private ?PaymentOrigin $paymentOrigin = null,
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

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): static
    {
        $this->operationType = $operationType;

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

    public function getStatmentDescriptor(): ?string
    {
        return $this->statmentDescriptor;
    }

    public function setStatmentDescriptor(?string $statmentDescriptor): static
    {
        $this->statmentDescriptor = $statmentDescriptor;

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

    public function getNetworkToken(): ?array
    {
        return $this->networkToken;
    }

    public function setNetworkToken(?array $networkToken): static
    {
        $this->networkToken = $networkToken;

        return $this;
    }

    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    public function setCardId(?string $cardId): static
    {
        $this->cardId = $cardId;

        return $this;
    }

    public function getCardToken(): ?string
    {
        return $this->cardToken;
    }

    public function setCardToken(?string $cardToken): static
    {
        $this->cardToken = $cardToken;

        return $this;
    }

    public function getRecurrenceCycle(): ?string
    {
        return $this->recurrenceCycle;
    }

    public function setRecurrenceCycle(?string $recurrenceCycle): static
    {
        $this->recurrenceCycle = $recurrenceCycle;

        return $this;
    }

    public function getInitiatedType(): ?string
    {
        return $this->initiatedType;
    }

    public function setInitiatedType(?string $initiatedType): static
    {
        $this->initiatedType = $initiatedType;

        return $this;
    }

    public function getRecurrenceModel(): ?string
    {
        return $this->recurrenceModel;
    }

    public function setRecurrenceModel(?string $recurrenceModel): static
    {
        $this->recurrenceModel = $recurrenceModel;

        return $this;
    }

    public function getPaymentOrigin(): ?PaymentOrigin
    {
        return $this->paymentOrigin;
    }

    public function setPaymentOrigin(?PaymentOrigin $paymentOrigin): static
    {
        $this->paymentOrigin = $paymentOrigin;

        return $this;
    }
}