<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;
use StoneSdk\Shared\Dto\TransferObjectCollection;

class ChargeCollection extends TransferObjectCollection
{
    public function __construct(
        /** @psalm-var array<int, Charge> */
        array $charges = []
    ) {
        parent::__construct($charges);
    }

    /**
     * @param Charge $charge
     * @return void
     */
    public function add(mixed $element): void
    {
        parent::add($element);
    }

    public static function fromArray(array $array): static
    {
        $elements = array_map(function (array|Charge $charge) {
            if (is_array($charge)){
                $charge = Charge::fromArray($charge);
            }

            return $charge;
        }, $array);

        return new static($elements);
    }

    public function getAmount(): ?int
    {
        return array_reduce(
            $this->getElements(),
            fn (?int $carry = 0, Charge $charge): int =>
            $carry + $charge->getAmount()
        );
    }

    public function getAmountAsFloat(): ?float
    {
        return round(floatval($this->getAmount()) * 100.0, 2);
    }

    /**
     * @return Charge|false
     */
    public function current(): TransferObject|false
    {
        return parent::current();
    }
}