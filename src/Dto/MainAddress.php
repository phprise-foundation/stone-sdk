<?php

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;

class MainAddress extends TransferObject
{
    private string $city;
    private string $complementary;
    private string $neighborhood;
    private string $referencePoint;
    private string $state;
    private string $street;
    private string $streetNumber;
    private string $zipCode;

    public function getCity(): string {
        return $this->city;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function getComplementary(): string {
        return $this->complementary;
    }

    public function setComplementary(string $complementary): void {
        $this->complementary = $complementary;
    }

    public function getNeighborhood(): string {
        return $this->neighborhood;
    }

    public function setNeighborhood(string $neighborhood): void {
        $this->neighborhood = $neighborhood;
    }

    public function getReferencePoint(): string {
        return $this->referencePoint;
    }

    public function setReferencePoint(string $referencePoint): void {
        $this->referencePoint = $referencePoint;
    }

    public function getState(): string {
        return $this->state;
    }

    public function setState(string $state): void {
        $this->state = $state;
    }

    public function getStreet(): string {
        return $this->street;
    }

    public function setStreet(string $street): void {
        $this->street = $street;
    }

    public function getStreetNumber(): string {
        return $this->streetNumber;
    }

    public function setStreetNumber(string $streetNumber): void {
        $this->streetNumber = $streetNumber;
    }

    public function getZipCode(): string {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): void {
        $this->zipCode = $zipCode;
    }
}
