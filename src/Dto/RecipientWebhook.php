<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use DateTimeInterface;

class RecipientWebhook extends TransferObject
{
    public function __construct(
        private ?string            $id = null,
        private ?Account           $account = null,
        private ?string            $type = null,
        private ?DateTimeInterface $createdAt = null,
        private ?RecipientWebhookData  $data = null
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getData(): ?RecipientWebhookData
    {
        return $this->data;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function setAccount(?Account $account): static
    {
        $this->account = $account;

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

    public function setData(?RecipientWebhookData $data): static
    {
        $this->data = $data;

        return $this;
    }
}