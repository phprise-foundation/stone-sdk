<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class Code extends TransferObject
{
    public function __construct(
        private ?int $clientId = null,
        private ?int $unitId = null,
        private ?string $environment = null
    )
    {
    }

    public function __toString(): string
    {
        return sprintf('%s_%s_%s', $this->clientId, $this->unitId, $this->environment);
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(?int $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    public function setUnitId(?int $unitId): static
    {
        $this->unitId = $unitId;

        return $this;
    }

    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    public function setEnvironment(?string $environment): static
    {
        $this->environment = $environment;

        return $this;
    }
}