<?php

namespace Phprise\StoneSdk\Dto;

use Phprise\DataTransferObject\TransferObject;

class AutomaticAnticipationSettings extends TransferObject
{
    private int $delay;
    private bool $enabled;
    private string $type;
    private int $volumePercentage;

    public function getDelay(): int {
        return $this->delay;
    }

    public function setDelay(int $delay): void {
        $this->delay = $delay;
    }

    public function isEnabled(): bool {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void {
        $this->enabled = $enabled;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public function getVolumePercentage(): int {
        return $this->volumePercentage;
    }

    public function setVolumePercentage(int $volumePercentage): void {
        $this->volumePercentage = $volumePercentage;
    }
}