<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use StoneSdk\Dto\Order;
use StoneSdk\Shared\Request\StoreRequest;
use GuzzleHttp\Psr7\Uri;

class OrderStoreRequest extends StoreRequest
{
    public function __construct(Order $order)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/orders', $_ENV['PAGAR_ME_URL'], $_ENV['PAGAR_ME_VERSION'])
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $_ENV['PAGAR_ME_TOKEN'],
            'ServiceRefererName' => $_ENV['PAGAR_ME_SERVICE_REFERER_NAME'],
        ];
        $body       =   $order->toSnakeCaseJson();
        $version    =   '1.1';

        parent::__construct($uri, $body, $headers, $version);
    }
}