<?php

declare(strict_types=1);

namespace StoneSdk;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class StoneClient
{
    private ClientInterface $httpClient;
    private StoneConfig $config;

    public function __construct(
        string $token,
        string $baseUrl = 'https://api.pagar.me',
        string $version = 'core/v5',
        ?string $serviceRefererName = null,
        ?ClientInterface $httpClient = null
    ) {
        $this->config = new StoneConfig($token, $baseUrl, $version, $serviceRefererName);
        $this->httpClient = $httpClient ?? new Client();
    }

    public function getConfig(): StoneConfig
    {
        return $this->config;
    }

    public function send(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->send($request);
    }

    public function getBaseUrl(): string
    {
        return $this->config->getBaseUrl();
    }

    public function getVersion(): string
    {
        return $this->config->getVersion();
    }

    public function getToken(): string
    {
        return $this->config->getToken();
    }

    public function getServiceRefererName(): ?string
    {
        return $this->config->getServiceRefererName();
    }
}
