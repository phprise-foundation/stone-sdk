<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class RegisterInformation extends TransferObject
{
    private string $annualRevenue;
    private string $birthdate;
    private string $companyName;
    private string $document;
    private string $email;
    private MainAddress $mainAddress;
    private MainAddress $address;
    private string $monthlyIncome;
    private string $name;

    /** @var ManagingPartner[] */
    private ?array $managingPartners;

    /** @var PhoneNumber[] */
    private array $phoneNumbers;

    private string $professionalOccupation;
    private string $tradingName;
    private string $type;

    public function getAnnualRevenue(): string {
        return $this->annualRevenue;
    }

    public function setAnnualRevenue(string $annualRevenue): void {
        $this->annualRevenue = $annualRevenue;
    }

    public function getBirthdate(): string {
        return $this->birthdate;
    }

    public function setBirthdate(string $birthdate): void {
        $this->birthdate = $birthdate;
    }

    public function getCompanyName(): string {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): void {
        $this->companyName = $companyName;
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

    public function getMainAddress(): MainAddress {
        return $this->mainAddress;
    }

    public function setMainAddress(MainAddress $mainAddress): void {
        $this->mainAddress = $mainAddress;
    }

    public function getAddress(): MainAddress {
        return $this->address;
    }

    public function setAddress(MainAddress $address): void {
        $this->address = $address;
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
     * @return ManagingPartner[]
     */
    public function getManagingPartners(): array {
        return $this->managingPartners;
    }

    /**
     * @param ManagingPartner[] $managingPartners
     */
    public function setManagingPartners(?array $managingPartners): void {
        $this->managingPartners = $managingPartners;
    }

    /**
     * @return PhoneNumber[]
     */
    public function getPhoneNumbers(): array {
        return $this->phoneNumbers;
    }

    /**
     * @param PhoneNumber[] $phoneNumbers
     */
    public function setPhoneNumbers(array $phoneNumbers): void {
        $this->phoneNumbers = $phoneNumbers;
    }

    public function getProfessionalOccupation(): string {
        return $this->professionalOccupation;
    }

    public function setProfessionalOccupation(string $professionalOccupation): void {
        $this->professionalOccupation = $professionalOccupation;
    }

    public function getTradingName(): string {
        return $this->tradingName;
    }

    public function setTradingName(string $tradingName): void {
        $this->tradingName = $tradingName;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }
}
