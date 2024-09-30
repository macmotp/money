<?php

namespace Macmotp\Money\Traits;

use Illuminate\Support\Collection;
use Macmotp\Money;

trait MoneyAggregator
{
    /**
     * Get the minimum amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     * $moneyThree = new Money(3000, 'USD');
     *
     * $result = Money::min($moneyOne, $moneyTwo, $moneyThree); // $result = new Money(1000, 'USD');
     *
     * @param Money ...$money
     *
     * @return Money
     */
    public static function min(Money ...$money): Money
    {
        return self::aggregation('min', $money);
    }

    /**
     * Get the maximum amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     * $moneyThree = new Money(3000, 'USD');
     *
     * $result = Money::max($moneyOne, $moneyTwo, $moneyThree); // $result = new Money(3000, 'USD');
     *
     * @param Money ...$money
     *
     * @return Money
     */
    public static function max(Money ...$money): Money
    {
        return self::aggregation('max', $money);
    }

    /**
     * Get the average amount
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     * $moneyThree = new Money(3000, 'USD');
     *
     * $result = Money::avg($moneyOne, $moneyTwo, $moneyThree); // $result = new Money(2000, 'USD');
     *
     * @param Money ...$money
     *
     * @return Money
     */
    public static function avg(Money ...$money): Money
    {
        return self::aggregation('avg', $money);
    }

    /**
     * Get the sum
     *
     * Usage:
     * $moneyOne = new Money(1000, 'USD');
     * $moneyTwo = new Money(2000, 'USD');
     * $moneyThree = new Money(3000, 'USD');
     *
     * $result = Money::sum($moneyOne, $moneyTwo, $moneyThree); // $result = new Money(6000, 'USD');
     *
     * @param Money ...$money
     *
     * @return Money
     */
    public static function sum(Money ...$money): Money
    {
        return self::aggregation('sum', $money);
    }

    /**
     * Main aggregation function
     *
     * @param string $aggregation
     * @param array $money
     *
     * @return Money
     */
    private static function aggregation(string $aggregation, array $money): Money
    {
        $collection = new Collection($money);
        $currencyCode = $collection->first()->getCurrencyCode();

        return new Money(
            $collection->filter(fn (Money $m) => ($m->getCurrencyCode() === $currencyCode))->{$aggregation}(fn (Money $m) => $m->getAmount()),
            $currencyCode
        );
    }
}
