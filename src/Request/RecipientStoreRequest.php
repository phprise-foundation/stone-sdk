<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use StoneSdk\StoneConfig;
use StoneSdk\Dto\Recipient;
use StoneSdk\Shared\Request\StoreRequest;
use GuzzleHttp\Psr7\Uri;

class RecipientStoreRequest extends StoreRequest
{
    public function __construct(Recipient $recipient, StoneConfig $config)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/recipients', $config->getBaseUrl(), $config->getVersion())
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        $body       =   $recipient->toSnakeCaseJson();
        $version    =   '1.1';

        parent::__construct($uri, $body, $headers, $version);
    }
}
