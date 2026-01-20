<?php

declare(strict_types=1);

namespace Phprise\StoneSdk;

class StoneConfig
{
    public function __construct(
        private readonly string $token,
        private readonly string $baseUrl = 'https://api.pagar.me',
        private readonly string $version = 'core/v5',
        private readonly ?string $serviceRefererName = null,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getBaseUrl(): string
    {
        return rtrim($this->baseUrl, '/');
    }

    public function getVersion(): string
    {
        return trim($this->version, '/');
    }

    public function getServiceRefererName(): ?string
    {
        return $this->serviceRefererName;
    }
}
