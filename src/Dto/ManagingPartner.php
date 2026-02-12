<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class ManagingPartner extends TransferObject
{
    private MainAddress $address;
    private string $birthdate;
    private string $document;
    private string $email;
    private string $monthlyIncome;
    private string $name;

    private ?PhoneNumberCollection $phoneNumbers = null;

    private string $professionalOccupation;
    private bool $selfDeclaredLegalRepresentative;
    private string $type;

    public function __construct()
    {
        if ($this->phoneNumbers === null) {
            $this->phoneNumbers = new PhoneNumberCollection();
        }
    }

    public function getAddress(): MainAddress {
        return $this->address;
    }

    public function setAddress(MainAddress $address): void {
        $this->address = $address;
    }

    public function getBirthdate(): string {
        return $this->birthdate;
    }

    public function setBirthdate(string $birthdate): void {
        $this->birthdate = $birthdate;
    }

    public function getDocument(): string {
        return $this->document;
    }

    public function setDocument(string $document): void {
        $this->document = $document;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getMonthlyIncome(): string {
        return $this->monthlyIncome;
    }

    public function setMonthlyIncome(string $monthlyIncome): void {
        $this->monthlyIncome = $monthlyIncome;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    /**
     * @return PhoneNumber[]
     */
    public function getPhoneNumbers(): PhoneNumberCollection
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(PhoneNumberCollection $phoneNumbers): static
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    public function addPhoneNumber(PhoneNumber $phoneNumber): static
    {
        if (!$this->phoneNumbers->contains($phoneNumber)) {
            $this->phoneNumbers->add($phoneNumber);
        }

        return $this;
    }

    public function getProfessionalOccupation(): string {
        return $this->professionalOccupation;
    }

    public function setProfessionalOccupation(string $professionalOccupation): void {
        $this->professionalOccupation = $professionalOccupation;
    }

    public function isSelfDeclaredRepresentative(): bool {
        return $this->selfDeclaredLegalRepresentative;
    }

    public function setSelfDeclaredLegalRepresentative(bool $selfDeclaredLegalRepresentative): void {
        $this->selfDeclaredLegalRepresentative = $selfDeclaredLegalRepresentative;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }
}
