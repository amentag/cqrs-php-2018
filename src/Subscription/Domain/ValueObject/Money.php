<?php

namespace App\Subscription\Domain\ValueObject;

class Money
{
    private $amount;

    private $currency;

    public function __construct(float $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
}