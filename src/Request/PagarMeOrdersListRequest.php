<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use DateTime;
use StoneSdk\Shared\Request\ShowRequest;

class PagarMeOrdersListRequest extends ShowRequest
{
    public function __construct(int $page = 1, int $size = 10, ?DateTime $dateTimeUntil = null, ?DateTime $dateTimeSince = null)
    {
        $uri = $_ENV['PAGAR_ME_URL'] . '/' . $_ENV['PAGAR_ME_VERSION'] . '/orders?page=' . $page . '&size=' . $size . '&closed=false';

        if ($dateTimeUntil !== null) {
            $uri .= '&created_until=' . $dateTimeUntil->format('Y-m-d\TH:i:s\Z');
        }

        if ($dateTimeSince !== null) {
            $uri .= '&created_since=' . $dateTimeSince->format('Y-m-d\TH:i:s\Z');
        }

        $headers = [
            'Accept' => 'application/json',
            'authorization' => 'Basic ' . $_ENV['PAGAR_ME_TOKEN'],
            'ServiceRefererName' => $_ENV['PAGAR_ME_SERVICE_REFERER_NAME'],
        ];

        parent::__construct($uri, $headers);
    }
}
