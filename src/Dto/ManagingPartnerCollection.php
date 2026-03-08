<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;
use Phprise\DataTransferObject\TransferObjectCollection;

class ManagingPartnerCollection extends TransferObjectCollection
{
    public function __construct(
        /** @psalm-var array<int, ManagingPartner> */
        array $managingPartners = []
    ) {
        parent::__construct($managingPartners);
    }

    /**
     * @param ManagingPartner $element
     * @return void
     */
    public function add(mixed $element): void
    {
        parent::add($element);
    }

    public static function fromArray(array $array): static
    {
        $elements = array_map(function (array|ManagingPartner $item) {
            if (is_array($item)){
                $item = ManagingPartner::fromArray($item);
            }

            return $item;
        }, $array);

        return new static($elements);
    }

    /**
     * @return ManagingPartner|false
     */
    public function current(): TransferObject|false
    {
        return parent::current();
    }
}
