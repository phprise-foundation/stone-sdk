<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Tests\Unit;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Phprise\StoneSdk\PagarMeClient;
use Phprise\StoneSdk\Request\OrderStoreRequest;
use Phprise\StoneSdk\Dto\Order;
use PHPUnit\Framework\TestCase;
use Phprise\StoneSdk\StoneClient;

class StonelientTest extends TestCase
{
    public function testSendRequest(): void
    {
        $mock = new MockHandler([
            new Response(200, [], json_encode(['id' => 'or_123456', 'status' => 'pending'])),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $httpClient = new Client(['handler' => $handlerStack]);

        $client = new StoneClient(
            token: 'test_token',
            httpClient: $httpClient
        );
        
        $order = new Order();
        $request = new OrderStoreRequest($order, $client->getConfig());

        $response = $client->send($request);

        $this->assertEquals(200, $response->getStatusCode());
        $body = json_decode((string) $response->getBody(), true);
        $this->assertEquals('or_123456', $body['id']);
    }
}
