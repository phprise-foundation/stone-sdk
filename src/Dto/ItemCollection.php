<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use Phprise\DataTransferObject\TransferObjectCollection;

class ItemCollection extends TransferObjectCollection
{
    public function __construct(
        /** @psalm-var array<int, Item> */
        array $items = []
    ) {
        parent::__construct($items);
    }

    /**
     * @param Item $element
     * @return void
     */
    public function add(mixed $element): void
    {
        parent::add($element);
    }

    public static function fromArray(array $array): static
    {
        $elements = array_map(function (array|Item $item) {
            if (is_array($item)){
                $item = Item::fromArray($item);
            }

            return $item;
        }, $array);

        return new static($elements);
    }

    public function getAmount(): ?int
    {
        return array_reduce(
            $this->getElements(),
            fn (?int $carry = 0, Item $item): int =>
            $carry + $item->getAmount()
        );
    }

    public function getAmountAsFloat(): ?float
    {
        return round(floatval($this->getAmount()) * 100.0, 2);
    }

    /**
     * @return Item|false
     */
    public function current(): TransferObject|false
    {
        return parent::current();
    }
}