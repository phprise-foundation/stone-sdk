<?php

declare(strict_types=1);

namespace Phprise\StoneSdk\Dto;

use Phprise\StoneSdk\Shared\Dto\TransferObject;
use Phprise\StoneSdk\Shared\ValueObject\ArrayObject;

class Payment extends TransferObject
{
    public function __construct(
        private ?int $id = null,
        private ?string $paymentMethod = null,
        private ?CreditCard $creditCard = null,
        private ?Voucher $voucher = null,
        private ?BankSlip $bankSlip = null,
        private ?BankTransfer $bankTransfer = null,
        private ?Checkout $checkout = null,
        private ?Cash $cash = null,
        private ?Pix $pix = null,
        private ?float $amount = null,
        private ?Split $split = null,
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getCreditCard(): ?CreditCard
    {
        return $this->creditCard;
    }

    public function setCreditCard(?CreditCard $creditCard): static
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    public function getVoucher(): ?Voucher
    {
        return $this->voucher;
    }

    public function setVoucher(?Voucher $voucher): static
    {
        $this->voucher = $voucher;

        return $this;
    }

    public function getBankSlip(): ?BankSlip
    {
        return $this->bankSlip;
    }

    public function setBoleto(?BankSlip $bankSlip): static
    {
        $this->bankSlip = $bankSlip;

        return $this;
    }

    public function getBankTransfer(): ?BankTransfer
    {
        return $this->bankTransfer;
    }

    public function setBankTransfer(?BankTransfer $bankTransfer): static
    {
        $this->bankTransfer = $bankTransfer;

        return $this;
    }

    public function getCheckout(): ?Checkout
    {
        return $this->checkout;
    }

    public function setCheckout(?Checkout $checkout): static
    {
        $this->checkout = $checkout;

        return $this;
    }

    public function getCash(): ?Cash
    {
        return $this->cash;
    }

    public function setCash(?Cash $cash): static
    {
        $this->cash = $cash;

        return $this;
    }

    public function getPix(): ?Pix
    {
        return $this->pix;
    }

    public function setPix(?Pix $pix): static
    {
        $this->pix = $pix;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getSplit(): ?Split
    {
        return $this->split;
    }

    public function setSplit(?Split $split): static
    {
        $this->split = $split;

        return $this;
    }

    public function toArray(): array
    {
        $array          =   parent::toArray();
        $arrayObject    =   new ArrayObject($array);
        $arrayObject->replaceKeys([
            'bankSlip' => 'boleto',
        ]);

        return $arrayObject->toArray();
    }

    public static function fromArray(array $data): static
    {
        $arrayObject = new ArrayObject($data);
        $arrayObject->replaceKeys([
            'boleto' => 'bankSlip',
        ]);

        return parent::fromArray($arrayObject->toArray());
    }
}