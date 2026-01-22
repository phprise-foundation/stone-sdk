<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class Account extends TransferObject
{
    public function __construct(
        private ?string $id = null,
        private ?string $name = null
    ) {
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setId(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
