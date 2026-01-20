<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use DateTime;
use StoneSdk\Shared\Request\ShowRequest;
use StoneSdk\StoneConfig;

class PagarMeOrdersListRequest extends ShowRequest
{
    public function __construct(StoneConfig $config, int $page = 1, int $size = 10, ?DateTime $dateTimeUntil = null, ?DateTime $dateTimeSince = null)
    {
        $uri = $config->getBaseUrl() . '/' . $config->getVersion() . '/orders?page=' . $page . '&size=' . $size . '&closed=false';

        if ($dateTimeUntil !== null) {
            $uri .= '&created_until=' . $dateTimeUntil->format('Y-m-d\TH:i:s\Z');
        }

        if ($dateTimeSince !== null) {
            $uri .= '&created_since=' . $dateTimeSince->format('Y-m-d\TH:i:s\Z');
        }

        $headers = [
            'Accept' => 'application/json',
            'authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];

        parent::__construct($uri, $headers);
    }
}
