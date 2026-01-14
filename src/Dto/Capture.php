<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;
use StoneSdk\Shared\ValueObject\ArrayObject;

class Capture extends TransferObject
{
    public function __construct(
        private ?float $amount = null,
        private ?SplitCollection $splits = null
    )
    {
        if ($this->splits == null) {
            $this->splits = new SplitCollection();
        }
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getSplits(): ?SplitCollection
    {
        return $this->splits;
    }

    public function setAmount(?float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function setSplits(SplitCollection $splits): static
    {
        $this->splits = $splits;

        return $this;
    }

    public function addSplit(Split $split): static
    {
        if (! $this->splits->contains($split)) {
            $this->splits->add($split);
        }

        return $this;
    }

    public function removeSplit(Split $split): static
    {
        if ($this->splits->contains($split)) {
            $this->splits->removeElement($split);
        }

        return $this;
    }

    public function toArray(): array
    {
        $array          =   parent::toArray();
        $arrayObject    =   new ArrayObject($array);
        $arrayObject->replaceKeys([
            'splits' => 'split',
        ]);

        return $arrayObject->toArray();
    }

    public static function fromArray(array $data): static
    {
        $arrayObject = new ArrayObject($data);
        $arrayObject->replaceKeys([
            'split' => 'splits',
        ]);

        return parent::fromArray($arrayObject->toArray());
    }
}