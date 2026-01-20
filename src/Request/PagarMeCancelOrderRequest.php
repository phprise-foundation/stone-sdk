<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use DateTime;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\UriInterface;
use StoneSdk\Shared\Request\PatchRequest;
use StoneSdk\StoneConfig;

class PagarMeCancelOrderRequest extends PatchRequest
{
    public function __construct(string $orderId, StoneConfig $config)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];

        $uri = $config->getBaseUrl() . "/" . $config->getVersion() . "/orders/" . $orderId . "/closed";

        $body = json_encode(['status' => 'canceled']);

        parent::__construct($uri, $body, $headers);
    }
}
