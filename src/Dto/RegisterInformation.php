<?php

namespace StoneSdk\Dto;

use StoneSdk\Shared\Dto\TransferObject;

class RegisterInformation extends TransferObject
{
    private string $annualRevenue;
    private string $companyName;
    private string $document;
    private string $email;
    private MainAddress $mainAddress;

    /** @var ManagingPartner[] */
    private array $managingPartners;

    /** @var PhoneNumber[] */
    private array $phoneNumbers;

    private string $tradingName;
    private string $type;

    public function getAnnualRevenue(): string {
        return $this->annualRevenue;
    }

    public function setAnnualRevenue(string $annualRevenue): void {
        $this->annualRevenue = $annualRevenue;
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

    /**
     * @return ManagingPartner[]
     */
    public function getManagingPartners(): array {
        return $this->managingPartners;
    }

    /**
     * @param ManagingPartner[] $managingPartners
     */
    public function setManagingPartners(array $managingPartners): void {
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
