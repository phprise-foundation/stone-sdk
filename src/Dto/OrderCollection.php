<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObjectCollection;

class OrderCollection extends TransferObjectCollection
{
    public function __construct(
        /** @psalm-var array<int, Item> */
        array $orders = []
    ) {
        parent::__construct($orders);
    }

    /**
     * @param Order $element
     * @return void
     */
    public function add(mixed $element): void
    {
        parent::add($element);
    }

    public static function fromArray(array $array): static
    {
        $elements = array_map(function (array|Order $order) {
            if (is_array($order)){
                $order = Order::fromArray($order);
            }

            return $order;
        }, $array);

        return new static($elements);
    }

    public function addElementsFromArray(array $array): void
    {
        array_map(function (array|Order $order) {
            if (is_array($order)){
                $order = Order::fromArray($order);
            }

            $this->add($order);
        }, $array);
    }
}