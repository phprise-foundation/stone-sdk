<?php

declare(strict_types=1);

namespace StoneSdk\Tests\Unit\Request;

use PHPUnit\Framework\TestCase;
use StoneSdk\Dto\DefaultBankAccount;
use StoneSdk\Request\RecipientBankAccountPatchRequest;
use StoneSdk\StoneConfig;

class RecipientBankAccountPatchRequestTest extends TestCase
{
    public function testShouldInstantiateRequestWithRealObjects(): void
    {
        $config = new StoneConfig(
            token: 'sk_test_123456789',
            baseUrl: 'https://api.pagar.me',
            version: 'core/v5',
            serviceRefererName: 'TestService'
        );

        $bankAccount = new DefaultBankAccount();
        $bankAccount->setBank('001');
        $bankAccount->setBranchNumber('1234');
        $bankAccount->setBranchCheckDigit('5');
        $bankAccount->setAccountNumber('56789');
        $bankAccount->setAccountCheckDigit('0');
        $bankAccount->setHolderName('John Doe');
        $bankAccount->setHolderDocument('12345678909');
        $bankAccount->setHolderType('individual');
        $bankAccount->setType('checking');

        $recipientId = 're_ckly1234567890';

        $request = new RecipientBankAccountPatchRequest($recipientId, $bankAccount, $config);

        $this->assertEquals('PATCH', $request->getMethod());

        $expectedUri = "https://api.pagar.me/core/v5/recipients/{$recipientId}/default-bank-account";
        $this->assertEquals($expectedUri, (string) $request->getUri());

        $this->assertEquals('application/json', $request->getHeaderLine('Content-Type'));
        $this->assertEquals('Basic sk_test_123456789', $request->getHeaderLine('Authorization'));
        $this->assertEquals('TestService', $request->getHeaderLine('ServiceRefererName'));

        $expectedBody = $bankAccount->toSnakeCaseJson();
        $this->assertJsonStringEqualsJsonString($expectedBody, (string) $request->getBody());

        $this->assertEquals('1.1', $request->getProtocolVersion());
    }
}
