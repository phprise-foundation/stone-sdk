<?php

namespace StoneSdk\Dto;

class PhoneNumber
{
    private string $ddd;
    private string $number;
    private string $type;

    public function getDdd(): string {
        return $this->ddd;
    }

    public function setDdd(string $ddd): void {
        $this->ddd = $ddd;
    }

    public function getNumber(): string {
        return $this->number;
    }

    public function setNumber(string $number): void {
        $this->number = $number;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }
}
