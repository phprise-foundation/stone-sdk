<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Request;

use Phprise\StoneSdk\StoneConfig;
use Phprise\StoneSdk\Dto\Order;
use Phprise\StoneSdk\Shared\Request\StoreRequest;
use GuzzleHttp\Psr7\Uri;

class OrderStoreRequest extends StoreRequest
{
    public function __construct(Order $order, StoneConfig $config)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/orders', $config->getBaseUrl(), $config->getVersion())
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        $body       =   $order->toSnakeCaseJson();
        $version    =   '1.1';

        parent::__construct($uri, $body, $headers, $version);
    }
}