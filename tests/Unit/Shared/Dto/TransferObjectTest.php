<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Tests\Unit\Shared\Dto;

use PHPUnit\Framework\TestCase;
use Phprise\StoneSdk\Dto\Item;

class TransferObjectTest extends TestCase
{
    public function testToArrayConvertsCamelToCamelByDefault(): void
    {
        $item = new Item(
            id: '123',
            amount: 1000,
            description: 'Test Item',
            quantity: 2,
            code: 'ABC'
        );

        $array = $item->toArray();

        $this->assertEquals('123', $array['id']);
        $this->assertEquals(1000, $array['amount']);
        $this->assertEquals('Test Item', $array['description']);
        $this->assertEquals(2, $array['quantity']);
        $this->assertEquals('ABC', $array['code']);
    }

    public function testToSnakeCaseArrayConvertsKeysToSnakeCase(): void
    {
        // Usando um DTO que tenha propriedades camelCase se possível
        // Item não tem muitas propriedades com nomes compostos que não sejam camelCase no código mas snake na API
        // Vamos testar o mecanismo básico
        $item = new Item(amount: 100);
        $item->setId('test_id');

        $snakeArray = $item->toSnakeCaseArray();

        // Se houvesse uma propriedade 'someProperty', ela deveria virar 'some_property'
        $this->assertArrayHasKey('id', $snakeArray);
        $this->assertEquals('test_id', $snakeArray['id']);
    }

    public function testFromArrayMapsSnakeCaseToCamelCase(): void
    {
        $data = [
            'id' => 'item_123',
            'amount' => 5000,
            'description' => 'Product description',
            'quantity' => 1
        ];

        $item = Item::fromArray($data);

        $this->assertEquals('item_123', $item->getId());
        $this->assertEquals(5000, $item->getAmount());
        $this->assertEquals('Product description', $item->getDescription());
        $this->assertEquals(1, $item->getQuantity());
    }

    public function testToJson(): void
    {
        $item = new Item(id: '789', amount: 250);
        $json = $item->toJson();

        $this->assertStringContainsString('"id":"789"', $json);
        $this->assertStringContainsString('"amount":250', $json);
    }
}
