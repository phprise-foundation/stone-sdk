<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use StoneSdk\StoneConfig;
use StoneSdk\Shared\Request\ShowRequest;
use GuzzleHttp\Psr7\Uri;

class RecipientShowRequest extends ShowRequest
{
    public function __construct(string $recipientId, StoneConfig $config)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/recipients/%s', $config->getBaseUrl(), $config->getVersion(), $recipientId)
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        $version    =   '1.1';

        parent::__construct($uri, $headers, $version);
    }
}
