<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class TransferSettings extends TransferObject
{
    private int $transferDay;
    private bool $transferEnabled;
    private string $transferInterval;

    public function getTransferDay(): int {
        return $this->transferDay;
    }

    public function setTransferDay(int $transferDay): void {
        $this->transferDay = $transferDay;
    }

    public function isTransferEnabled(): bool {
        return $this->transferEnabled;
    }

    public function setTransferEnabled(bool $transferEnabled): void {
        $this->transferEnabled = $transferEnabled;
    }

    public function getTransferInterval(): string {
        return $this->transferInterval;
    }

    public function setTransferInterval(string $transferInterval): void {
        $this->transferInterval = $transferInterval;
    }
}
