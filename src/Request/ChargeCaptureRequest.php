<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Request;

use Phprise\StoneSdk\StoneConfig;
use Phprise\StoneSdk\Dto\Capture;
use GuzzleHttp\Psr7\Uri;
use Phprise\StoneSdk\Shared\Request\StoreRequest;

class ChargeCaptureRequest extends StoreRequest
{
    public function __construct(string $chargeId, Capture $capture, StoneConfig $config) {
        $uri        =   new Uri(
            sprintf(
                '%s/%s/charges/%s/capture',
                $config->getBaseUrl(),
                $config->getVersion(),
                $chargeId
            )
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        $body       =   $capture->toSnakeCaseJson();
        $version    =   '1.1';
        parent::__construct($uri, $body, $headers, $version);
    }
}