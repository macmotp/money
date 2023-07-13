<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currency;
use Macmotp\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class MoneyAggregatorTest
 *
 * @package Macmotp\Money\Tests\Unit
 * @group Money
 */
class MoneyAggregatorTest extends TestCase
{
    public function testMoneyAggregations()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(200, Currency::USD);
        $moneyThree = new Money(600, Currency::USD);

        $this->assertEquals($moneyOne, Money::min($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals($moneyThree, Money::max($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(300, Currency::USD)), Money::avg($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(900, Currency::USD)), Money::sum($moneyOne, $moneyTwo, $moneyThree));
    }

    public function testMoneyAggregationsWithDifferentCurrencies()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(200, Currency::USD);
        $moneyThree = new Money(600, Currency::EUR); // this will be filtered out

        $this->assertEquals($moneyOne, Money::min($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals($moneyTwo, Money::max($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(150, Currency::USD)), Money::avg($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(300, Currency::USD)), Money::sum($moneyOne, $moneyTwo, $moneyThree));
    }
}
