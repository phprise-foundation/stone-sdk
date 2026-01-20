<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Request;

use Phprise\StoneSdk\StoneConfig;
use Phprise\StoneSdk\Dto\Recipient;
use Phprise\StoneSdk\Shared\Request\PutRequest;
use GuzzleHttp\Psr7\Uri;

class RecipientPutRequest extends PutRequest
{
    public function __construct(string $recipientId, Recipient $recipient, StoneConfig $config)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/recipients/%s', $config->getBaseUrl(), $config->getVersion(), $recipientId)
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        
        // StoneService original removia esses campos no update de recebedor
        $data = $recipient->toSnakeCaseArray();
        unset($data['transfer_settings']);
        unset($data['default_bank_account']);
        
        $body       =   json_encode($data);
        $version    =   '1.1';

        parent::__construct($uri, $body, $headers, $version);
    }
}
