<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use Phprise\StoneSdk\Shared\ValueObject\ArrayObject;

class BankSlip extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?string $bank = null,
        private ?string $instructions = null,
        private ?\DateTimeInterface $dueAt = null,
        private ?string $bankReferenceNumber = null,
        private ?string $type = null,
        private ?string $documentNumber = null,
        private ?Interest $interest = null,
        private ?Fine $fine = null
    ) {
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

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): static
    {
        $this->bank = $bank;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): static
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getDueAt(): ?\DateTimeInterface
    {
        return $this->dueAt;
    }

    public function setDueAt(?\DateTimeInterface $dueAt): static
    {
        $this->dueAt = $dueAt;

        return $this;
    }

    public function getBankReferenceNumber(): ?string
    {
        return $this->bankReferenceNumber;
    }

    public function setBankReferenceNumber(?string $bankReferenceNumber): static
    {
        $this->bankReferenceNumber = $bankReferenceNumber;

        return $this;
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

    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    public function setDocumentNumber(?string $documentNumber): static
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    public function getInterest(): ?Interest
    {
        return $this->interest;
    }

    public function setInterest(?Interest $interest): static
    {
        $this->interest = $interest;

        return $this;
    }

    public function getFine(): ?Fine
    {
        return $this->fine;
    }

    public function setFine(?Fine $fine): static
    {
        $this->fine = $fine;

        return $this;
    }

    public function toArray(): array
    {
        $array          =   parent::toArray();
        $arrayObject    =   new ArrayObject($array);
        $arrayObject->replaceKeys([
            'bankReferenceNumber' => 'nossoNumero'
        ]);

        return $arrayObject->toArray();
    }

    public static function fromArray(array $array): static
    {
        $arrayObject    =   new ArrayObject($array);
        $arrayObject->replaceKeys([
            'nossoNumero' => 'bankReferenceNumber'
        ]);

        return parent::fromArray($arrayObject->toArray());
    }
}