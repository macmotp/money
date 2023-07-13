<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Currencies\Support\Context;
use Macmotp\Traits\MoneyAggregator;
use Macmotp\Traits\MoneyCalculator;
use Macmotp\Traits\MoneyComparator;
use Macmotp\Traits\MoneyPrinter;

/**
 * Class Money
 */
class Money {

    use MoneyAggregator;
    use MoneyCalculator;
    use MoneyComparator;
    use MoneyPrinter;

    private Currency $currency;
    private int $amount;

    /**
     * $amount always in cents
     * $currency is ISO-4217 code
     *
     * Example: $money = new Money(123456, 'USD');
     *
     * Why not type hint the $amount in the constructor?
     * Because it will cause rounding issues
     * -> see MoneyTest -> Real world examples that PHP cannot round properly
     */
    public function __construct($amount, string $currency)
    {
        $this->amount = (int) round((float) $amount ??= 0);
        $this->currency = Context::getCurrencyFromCode(strtoupper($currency));
    }

    /**
     * Usage: Money::make(1000, 'USD');
     */
    public static function make($amount, string $currency): self
    {
        return new self($amount, $currency);
    }

    /**
     * Get the amount in cents
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Get the amount in units and cents
     *
     * @return float
     */
    public function getAmountForHumans(): float
    {
        return $this->amount / pow(10, $this->getCurrency()->getFormat()->getDefaultNumberOfDecimals());
    }

    /**
     * Get the currency
     *
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * Clone the object
     *
     * Example: $money = new Money(123456, 'USD');
     * $clone = $money->clone(); // $clone = new Money(123456, 'USD');
     */
    public function clone(): self
    {
        return new self($this->getAmount(), $this->getCurrency()->getFormat()->getCode());
    }

    /**
     * Set the amount to zero
     *
     * Example: $money = new Money(123456, 'USD');
     * $zero = $money->zero(); // $zero = new Money(0, 'USD');
     */
    public function zero(): self
    {
        return new self(0, $this->getCurrency()->getFormat()->getCode());
    }
}
