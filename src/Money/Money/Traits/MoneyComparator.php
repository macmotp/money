<?php

namespace Macmotp\Money\Traits;

use Illuminate\Support\Collection;
use Macmotp\Money;

trait MoneyComparator
{
    /**
     * Check if same currency
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     * $moneyThree = new Money(3000, 'EUR');
     *
     * $result = $moneyOne->isSameCurrency($moneyTwo); // $result = true;
     * $result = $moneyOne->isSameCurrency($moneyTwo, $moneyThree); // $result = false;
     *
     * @param Money ...$money
     *
     * @return bool
     */
    public function isSameCurrency(Money ...$money): bool
    {
        return (new Collection($money))->filter(fn (Money $m) => $m->getCurrencyCode() !== $this->getCurrencyCode())->isEmpty();
    }

    /**
     * Check if it is equal by amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(1000, 'USD');
     *
     * $result = $moneyOne->isEqualTo($moneyTwo); // $result = true;
     *
     * @param Money $money
     *
     * @return bool
     */
    public function isEqualTo(Money $money): bool
    {
        return $this->isSameCurrency($money) && $this->getAmount() === $money->getAmount();
    }

    /**
     * Check if it is greater by amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     *
     * $result = $moneyTwo->isGreaterThan($moneyOne); // $result = true;
     *
     * @param Money $money
     *
     * @return bool
     */
    public function isGreaterThan(Money $money): bool
    {
        return $this->getAmount() > $money->getAmount();
    }

    /**
     * Check if it is greater or equal to by amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     *
     * $result = $moneyTwo->isGreaterThanOrEqualTo($moneyOne); // $result = true;
     *
     * @param Money $money
     *
     * @return bool
     */
    public function isGreaterThanOrEqualTo(Money $money): bool
    {
        return $this->isGreaterThan($money) || $this->isEqualTo($money);
    }

    /**
     * Check if it is less by amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     *
     * $result = $moneyOne->isLessThan($moneyTwo); // $result = true;
     *
     * @param Money $money
     *
     * @return bool
     */
    public function isLessThan(Money $money): bool
    {
        return $this->getAmount() < $money->getAmount();
    }

    /**
     * Check if it is less or equal to by amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     *
     * $result = $moneyOne->isLessThanOrEqualTo($moneyTwo); // $result = true;
     *
     * @param Money $money
     *
     * @return bool
     */
    public function isLessThanOrEqualTo(Money $money): bool
    {
        return $this->isLessThan($money) || $this->isEqualTo($money);
    }

    /**
     * Check if it is positive
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     *
     * $result = $moneyOne->isPositive(); // $result = true;
     *
     * @return bool
     */
    public function isPositive(): bool
    {
        return $this->getAmount() > 0;
    }

    /**
     * Check if it is negative
     *
     * Usage:
     * $moneyOne = new Money(-1000, 'USD');
     *
     * $result = $moneyOne->isNegative(); // $result = true;
     *
     * @return bool
     */
    public function isNegative(): bool
    {
        return $this->getAmount() < 0;
    }

    /**
     * Check if it is zero
     *
     * Usage:
     * $moneyOne = new Money(0, 'USD');
     *
     * $result = $moneyOne->isZero(); // $result = true;
     *
     * @return bool
     */
    public function isZero(): bool
    {
        return $this->getAmount() === 0;
    }

    /**
     * Check if it is zero or positive
     *
     * Usage:
     * $moneyOne = new Money(0, 'USD');
     * $moneyTwo = new Money(10, 'USD');
     *
     * $result = $moneyOne->isZeroOrPositive(); // $result = true;
     * $result = $moneyTwo->isZeroOrPositive(); // $result = true;
     *
     * @return bool
     */
    public function isZeroOrPositive(): bool
    {
        return $this->getAmount() >= 0;
    }

    /**
     * Check if it is zero or negative
     *
     * Usage:
     * $moneyOne = new Money(0, 'USD');
     * $moneyTwo = new Money(-10, 'USD');
     *
     * $result = $moneyOne->isZeroOrNegative(); // $result = true;
     * $result = $moneyTwo->isZeroOrNegative(); // $result = true;
     *
     * @return bool
     */
    public function isZeroOrNegative(): bool
    {
        return $this->getAmount() <= 0;
    }
}
