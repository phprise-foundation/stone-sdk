<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;

class Checkout extends TransferObject
{
    public function __construct(
        /** Tempo em minutos para expiração */
        private ?int $expiresIn = null,
        /** Meio de pagamento padrão */
        private ?string $defaultPaymentMethod = null,
        /** Meios de pagamento aceitos para o checkout */
        private ?array $acceptPaymentMethods = null
    )
    {

    }

    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(?int $expiresIn): static
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    public function getDefaultPaymentMethod(): ?string
    {
        return $this->defaultPaymentMethod;
    }

    public function setDefaultPaymentMethod(?string $defaultPaymentMethod): static
    {
        $this->defaultPaymentMethod = $defaultPaymentMethod;

        return $this;
    }

    public function getAcceptPaymentMethods(): ?array
    {
        return $this->acceptPaymentMethods;
    }

    public function setAcceptPaymentMethods(?array $acceptPaymentMethods): static
    {
        $this->acceptPaymentMethods = $acceptPaymentMethods;

        return $this;
    }
}