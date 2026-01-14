<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use DateTime;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\UriInterface;
use StoneSdk\Shared\Request\PatchRequest;

class PagarMeCancelOrderRequest extends PatchRequest
{
    public function __construct(string $orderId)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'authorization' => 'Basic ' . $_ENV['PAGAR_ME_TOKEN'],
            'ServiceRefererName' => $_ENV['PAGAR_ME_SERVICE_REFERER_NAME'],
        ];

        $uri = $_ENV["PAGAR_ME_URL"] . "/" . $_ENV["PAGAR_ME_VERSION"] . "/orders/" . $orderId . "/closed";

        $body = json_encode(['status' => 'canceled']);

        parent::__construct($uri, $body, $headers);
    }
}
