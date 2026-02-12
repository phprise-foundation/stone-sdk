<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use Phprise\DataTransferObject\TransferObjectCollection;

class PhoneNumberCollection extends TransferObjectCollection
{
    public function __construct(
        /** @psalm-var array<int, Item> */
        array $phoneNumbers = []
    ) {
        parent::__construct($phoneNumbers);
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
    /**
     * @return Item|false
     */
    public function current(): TransferObject|false
    {
        return parent::current();
    }
}