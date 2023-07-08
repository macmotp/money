<?php

namespace Macmotp;

class Money {

    public function __construct(protected int $amount, protected string $currency)
    {}

    // Get the amount
    public function amount(): int
    {
        return $this->amount;
    }

    // Get the currency
    public function currency(): string
    {
        return $this->currency;
    }
}
