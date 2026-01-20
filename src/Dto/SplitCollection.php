<?php

declare(strict_types=1);

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObjectCollection;

class SplitCollection extends TransferObjectCollection
{
    /** {@inheritDoc} */
    protected static string $type = Split::class;
}