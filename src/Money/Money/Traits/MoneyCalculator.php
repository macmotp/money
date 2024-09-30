<?php

namespace Macmotp\Money\Traits;

use Macmotp\Money;
use Macmotp\Money\Exceptions\MoneyDivisionByZero;
use Macmotp\Money\Exceptions\MoneyOperationWithDifferentCurrencies;

trait MoneyCalculator
{
    /**
     * Add money
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     *
     * $result = $moneyOne->add($moneyTwo); // $result = new Money(3000, 'USD');
     *
     * @param Money $money
     *
     * @return Money
     * @throws MoneyOperationWithDifferentCurrencies
     */
    public function add(Money $money): Money
    {
        if (! $this->isSameCurrency($money)) {
            throw new MoneyOperationWithDifferentCurrencies();
        }

        return new Money($this->getAmount() + $money->getAmount(), $this->getCurrencyCode());
    }

    /**
     * Subtract money
     *
     * Usage:
     * $moneyOne = new Money(2000, 'USD');
     * $moneyTwo = new Money(1000, 'USD');
     *
     * $result = $moneyOne->subtract($moneyTwo); // $result = new Money(1000, 'USD');
     *
     * @param Money $money
     *
     * @return Money
     * @throws MoneyOperationWithDifferentCurrencies
     */
    public function subtract(Money $money): Money
    {
        if (! $this->isSameCurrency($money)) {
            throw new MoneyOperationWithDifferentCurrencies();
        }

        return new Money($this->getAmount() - $money->getAmount(), $this->getCurrencyCode());
    }

    /**
     * Multiply money by factor
     *
     * Usage:
     * $money = new Money(1234, 'USD');
     * $result = $money->multiply(2.0); // $result = new Money(2468, 'USD');
     * $result = $money->multiply(2.0, 'floor'); // $result = new Money(2400, 'USD');
     *
     * @param float $factor
     * @param string $flat
     *
     * @return Money
     */
    public function multiply(float $factor, string $flat = ''): Money
    {
        $amount = match ($flat) {
            'floor' => floor($this->getAmount() * $factor),
            'ceil' => ceil($this->getAmount() * $factor),
            default => $this->getAmount() * $factor,
        };

        return new Money($amount, $this->getCurrencyCode());
    }

    /**
     * Divide money by factor
     *
     * Usage:
     * $money = new Money(2000, 'USD');
     *
     * $result = $money->divide(2.0); // $result = new Money(1000, 'USD');
     *
     * @param float $factor
     * @param string $flat
     *
     * @throws MoneyDivisionByZero
     * @return Money
     */
    public function divide(float $factor, string $flat = ''): Money
    {
        if ($factor == 0) {
            throw new MoneyDivisionByZero();
        }

        $amount = match ($flat) {
            'floor' => floor($this->getAmount() / $factor),
            'ceil' => ceil($this->getAmount() / $factor),
            default => $this->getAmount() / $factor,
        };

        return new Money($amount, $this->getCurrencyCode());
    }

    /**
     * Get Percentage of money
     *
     * Usage:
     * $money = new Money(2000, 'USD');
     * $percentage = new Percentage(0.1); // = 10%
     *
     * $result = $money->inPercentage($percentage); // $result = new Money(200, 'USD');
     *
     * @param float $percentage
     * @param string $flat
     *
     * @return Money
     */
    public function inPercentage(float $percentage, string $flat = ''): Money
    {
        return $this->multiply($percentage, $flat);
    }

    /**
     * Absolute value of money
     *
     * Usage:
     * $money = new Money(-2000, 'USD');
     *
     * $result = $money->absolute(); // $result = new Money(2000, 'USD');
     *
     * @return Money
     */
    public function absolute(): Money
    {
        return new Money(abs($this->getAmount()), $this->getCurrencyCode());
    }
}
