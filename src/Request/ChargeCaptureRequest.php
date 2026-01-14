<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use StoneSdk\Dto\Capture;
use GuzzleHttp\Psr7\Uri;
use StoneSdk\Shared\Request\StoreRequest;

class ChargeCaptureRequest extends StoreRequest
{
    public function __construct(string $chargeId, Capture $capture) {
        $uri        =   new Uri(
            sprintf(
                '%s/%s/charges/%s/capture',
                $_ENV['PAGAR_ME_URL'],
                $_ENV['PAGAR_ME_VERSION'],
                $chargeId
            )
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $_ENV['PAGAR_ME_TOKEN'],
            'ServiceRefererName' => $_ENV['PAGAR_ME_SERVICE_REFERER_NAME'],
        ];
        $body       =   $capture->toSnakeCaseJson();
        $version    =   '1.1';
        parent::__construct($uri, $body, $headers, $version);
    }
}