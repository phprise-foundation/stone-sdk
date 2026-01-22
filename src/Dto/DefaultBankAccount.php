<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class DefaultBankAccount extends TransferObject
{
    private string $accountCheckDigit;
    private string $accountNumber;
    private string $bank;
    private string $branchCheckDigit = '0';
    private string $branchNumber;
    private string $createdAt;
    private string $holderDocument;
    private string $holderName;
    private string $holderType;
    private string $id;
    private string $status;
    private string $type;
    private string $updatedAt;

    public function getAccountCheckDigit(): string {
        return $this->accountCheckDigit;
    }

    public function setAccountCheckDigit(string $accountCheckDigit): void {
        $this->accountCheckDigit = $accountCheckDigit;
    }

    public function getAccountNumber(): string {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): void {
        $this->accountNumber = $accountNumber;
    }

    public function getBank(): string {
        return $this->bank;
    }

    public function setBank(string $bank): void {
        $this->bank = $bank;
    }

    public function getBranchCheckDigit(): string {
        return $this->branchCheckDigit;
    }

    public function setBranchCheckDigit(string $branchCheckDigit): void {
        $this->branchCheckDigit = $branchCheckDigit;
    }

    public function getBranchNumber(): string {
        return $this->branchNumber;
    }

    public function setBranchNumber(string $branchNumber): void {
        $this->branchNumber = $branchNumber;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getHolderDocument(): string {
        return $this->holderDocument;
    }

    public function setHolderDocument(string $holderDocument): void {
        $this->holderDocument = $holderDocument;
    }

    public function getHolderName(): string {
        return $this->holderName;
    }

    public function setHolderName(string $holderName): void {
        $this->holderName = $holderName;
    }

    public function getHolderType(): string {
        return $this->holderType;
    }

    public function setHolderType(string $holderType): void {
        $this->holderType = $holderType;
    }

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public function getUpdatedAt(): string {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void {
        $this->updatedAt = $updatedAt;
    }
}
