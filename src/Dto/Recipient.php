<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class Recipient extends TransferObject
{
    private ?string $name;
    private ?string $email;
    private ?string $document;
    private ?string $description;
    private ?string $type;
    private ?string $status;

    public function __construct(
        private ?RegisterInformation $registerInformation = null,
        private ?DefaultBankAccount $defaultBankAccount = null,
        private ?TransferSettings $transferSettings = null,
        private ?AutomaticAnticipationSettings $automaticAnticipationSettings = null
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->document = $document;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getRegisterInformation(): ?RegisterInformation
    {
        return $this->registerInformation;
    }

    public function setRegisterInformation(?RegisterInformation $registerInformation): self
    {
        $this->registerInformation = $registerInformation;
        return $this;
    }

    public function getDefaultBankAccount(): ?DefaultBankAccount
    {
        return $this->defaultBankAccount;
    }

    public function setDefaultBankAccount(?DefaultBankAccount $defaultBankAccount): self
    {
        $this->defaultBankAccount = $defaultBankAccount;
        return $this;
    }

    public function getTransferSettings(): ?TransferSettings
    {
        return $this->transferSettings;
    }

    public function setTransferSettings(?TransferSettings $transferSettings): self
    {
        $this->transferSettings = $transferSettings;
        return $this;
    }

    public function getAutomaticAnticipationSettings(): ?AutomaticAnticipationSettings
    {
        return $this->automaticAnticipationSettings;
    }

    public function setAutomaticAnticipationSettings(?AutomaticAnticipationSettings $automaticAnticipationSettings): self
    {
        $this->automaticAnticipationSettings = $automaticAnticipationSettings;
        return $this;
    }
}
