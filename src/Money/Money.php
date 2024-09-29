<?php

declare(strict_types=1);

namespace Macmotp;

use Illuminate\Support\Collection;
use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Support\CurrencyCode;
use Macmotp\Traits\MoneyAggregator;
use Macmotp\Traits\MoneyCalculator;
use Macmotp\Traits\MoneyComparator;
use Macmotp\Traits\MoneyPrinter;

/**
 * Class Money
 */
class Money
{
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
     *
     * @param $amount
     * @param CurrencyCode|string $currency
     * @throws InvalidCurrencyCodeException
     */
    public function __construct($amount, CurrencyCode|string $currency)
    {
        $this->amount = (int) round((float)$amount ?? 0);
        $this->currency = new Currency($currency);
    }

    /**
     * Usage: Money::make(1000, 'USD');
     *
     * @param $amount
     * @param CurrencyCode|string $currency
     *
     * @return Money
     * @throws InvalidCurrencyCodeException
     */
    public static function make($amount, CurrencyCode|string $currency): self
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
     * Get the currency code
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->getCurrency()->getCode();
    }

    /**
     * Get the currency symbol
     *
     * @return string
     */
    public function getCurrencySymbol(): string
    {
        return $this->getCurrency()->getSymbol();
    }

    /**
     * Get the amount in units and cents
     *
     * @return float
     */
    public function getAmountForHumans(): float
    {
        return $this->amount / pow(10, $this->getCurrency()->getFormat()->getSubunitLevel());
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
     *
     * @return Money
     * @throws InvalidCurrencyCodeException
     */
    public function clone(): self
    {
        return new self($this->getAmount(), $this->getCurrencyCode());
    }

    /**
     * Set the amount to zero
     *
     * Example: $money = new Money(123456, 'USD');
     * $zero = $money->zero(); // $zero = new Money(0, 'USD');
     *
     * @return Money
     * @throws InvalidCurrencyCodeException
     */
    public function zero(): self
    {
        return new self(0, $this->getCurrencyCode());
    }

    /**
     * Get Collection with All the Currencies
     *
     * @return Collection
     * @throws InvalidCurrencyCodeException
     */
    public static function getAllCurrencies(): Collection
    {
        return Currency::all();
    }
}
