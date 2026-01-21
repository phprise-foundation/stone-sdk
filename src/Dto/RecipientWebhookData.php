<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class RecipientWebhookData extends TransferObject
{
    private AutomaticAnticipationSettings $automaticAnticipationSettings;
    private string $createdAt;
    private DefaultBankAccount $defaultBankAccount;
    private string $document;
    private string $email;
    /** @var GatewayRecipient[] */
    private array $gatewayRecipients;
    private string $id;
    private string $name;
    private string $paymentMode;
    private RegisterInformation $registerInformation;
    private string $status;
    private TransferSettings $transferSettings;
    private string $type;
    private string $updatedAt;

    public function getAutomaticAnticipationSettings(): AutomaticAnticipationSettings {
        return $this->automaticAnticipationSettings;
    }

    public function setAutomaticAnticipationSettings(AutomaticAnticipationSettings $automaticAnticipationSettings): void {
        $this->automaticAnticipationSettings = $automaticAnticipationSettings;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getDefaultBankAccount(): DefaultBankAccount {
        return $this->defaultBankAccount;
    }

    public function setDefaultBankAccount(DefaultBankAccount $defaultBankAccount): void {
        $this->defaultBankAccount = $defaultBankAccount;
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

    /**
     * @return GatewayRecipient[]
     */
    public function getGatewayRecipients(): array {
        return $this->gatewayRecipients;
    }

    /**
     * @param GatewayRecipient[] $gatewayRecipients
     */
    public function setGatewayRecipients(array $gatewayRecipients): void {
        $this->gatewayRecipients = $gatewayRecipients;
    }

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPaymentMode(): string {
        return $this->paymentMode;
    }

    public function setPaymentMode(string $paymentMode): void {
        $this->paymentMode = $paymentMode;
    }

    public function getRegisterInformation(): RegisterInformation {
        return $this->registerInformation;
    }

    public function setRegisterInformation(RegisterInformation $registerInformation): void {
        $this->registerInformation = $registerInformation;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getTransferSettings(): TransferSettings {
        return $this->transferSettings;
    }

    public function setTransferSettings(TransferSettings $transferSettings): void {
        $this->transferSettings = $transferSettings;
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

