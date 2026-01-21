<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class Phones extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?Phone $homePhone = null,
        private ?Phone $mobilePhone = null
    ){
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getHomePhone(): ?Phone
    {
        return $this->homePhone;
    }

    public function setHomePhone(?Phone $homePhone): static
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    public function getMobilePhone(): ?Phone
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?Phone $mobilePhone): static
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }
}