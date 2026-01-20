<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObjectCollection;

class SplitCollection extends TransferObjectCollection
{
    /** {@inheritDoc} */
    protected static string $type = Split::class;
}