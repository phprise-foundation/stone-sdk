<?php

declare(strict_types=1);

namespace StoneSdk;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PagarMeClient
{
    private ClientInterface $httpClient;
    private string $baseUrl;
    private string $version;
    private string $token;
    private ?string $serviceRefererName;

    public function __construct(
        string $token,
        string $baseUrl = 'https://api.pagar.me',
        string $version = 'core/v5',
        ?string $serviceRefererName = null,
        ?ClientInterface $httpClient = null
    ) {
        $this->token = $token;
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->version = trim($version, '/');
        $this->serviceRefererName = $serviceRefererName;
        $this->httpClient = $httpClient ?? new Client();
    }

    public function send(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->send($request);
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getServiceRefererName(): ?string
    {
        return $this->serviceRefererName;
    }
}
