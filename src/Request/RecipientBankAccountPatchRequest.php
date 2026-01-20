<?php

declare(strict_types=1);

namespace StoneSdk\Request;

use StoneSdk\StoneConfig;
use StoneSdk\Dto\DefaultBankAccount;
use StoneSdk\Shared\Request\PatchRequest;
use GuzzleHttp\Psr7\Uri;

class RecipientBankAccountPatchRequest extends PatchRequest
{
    public function __construct(string $recipientId, DefaultBankAccount $bankAccount, StoneConfig $config)
    {
        $uri        =   new Uri(
            sprintf('%s/%s/recipients/%s/default-bank-account', $config->getBaseUrl(), $config->getVersion(), $recipientId)
        );
        $headers    =   [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $config->getToken(),
            'ServiceRefererName' => $config->getServiceRefererName(),
        ];
        $body       =   $bankAccount->toSnakeCaseJson();
        $version    =   '1.1';

        parent::__construct($uri, $body, $headers, $version);
    }
}
