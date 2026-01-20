<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class Pix extends TransferObject
{
    public function __construct(
        private ?int $expiresIn = null,
        private ?\DateTimeInterface $expiresAt = null,
        private ?array $additionalInformation = null
    )
    {
    }

    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(?int $expiresIn): static
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(?\DateTimeInterface $expiresAt): static
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?array $additionalInformation): static
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }
}