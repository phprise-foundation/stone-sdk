<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use DateTimeInterface;

class Customer extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        /** @var 'individual'|'company'|null $type */
        private ?string $type = null,
        private ?string $name = null,
        private ?string $email = null,
        private ?string $code = null,
        private ?string $document = null,
        /** @var 'CPF'|'CNPJ'|'PASSPORT'|null $documentType */
        private ?string $documentType = null,
        /** @var 'male'|'female'|null $gender */
        private ?string $gender = null,
        private ?Address $address = null,
        private ?Phones $phones = null,
        private ?DateTimeInterface $birthday = null,
        private ?bool $delinquent = null,
        private ?array $metadata = null,
        private ?DateTimeInterface $createdAt = null,
        private ?DateTimeInterface $updatedAt = null,
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function getPhones(): ?Phones
    {
        return $this->phones;
    }

    public function getBirthday(): ?DateTimeInterface
    {
        return $this->birthday;
    }

    public function isDelinquent(): ?bool
    {
        return $this->delinquent;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
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

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function setDocument(?string $document): static
    {
        $this->document = $document;

        return $this;
    }

    public function setDocumentType(?string $documentType): static
    {
        $this->documentType = $documentType;

        return $this;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function setAddress(?Address $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function setBirthday(?DateTimeInterface $birthday): static
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function setDelinquent(?bool $delinquent): static
    {
        $this->delinquent = $delinquent;

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

    public function setPhones(?Phones $phones): static
    {
        $this->phones = $phones;

        return $this;
    }

    public function setMetadata(?array $metadata): static
    {
        $this->metadata = $metadata;

        return $this;
    }
}
