<?php

namespace StoneSdk\Dto;

class GatewayRecipient
{
    private string $createdAt;
    private string $gateway;
    private string $pgid;
    private string $status;
    private string $updatedAt;

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getGateway(): string {
        return $this->gateway;
    }

    public function setGateway(string $gateway): void {
        $this->gateway = $gateway;
    }

    public function getPgid(): string {
        return $this->pgid;
    }

    public function setPgid(string $pgid): void {
        $this->pgid = $pgid;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getUpdatedAt(): string {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): void {
        $this->updatedAt = $updatedAt;
    }
}