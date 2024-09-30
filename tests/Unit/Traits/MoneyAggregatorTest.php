<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currencies\Support\CurrencyCode;
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
        $moneyOne = new Money(100, CurrencyCode::USD);
        $moneyTwo = new Money(200, CurrencyCode::USD);
        $moneyThree = new Money(600, CurrencyCode::USD);

        $this->assertEquals($moneyOne, Money::min($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals($moneyThree, Money::max($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(300, CurrencyCode::USD)), Money::avg($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(900, CurrencyCode::USD)), Money::sum($moneyOne, $moneyTwo, $moneyThree));
    }

    public function testMoneyAggregationsWithDifferentCurrencies()
    {
        $moneyOne = new Money(100, CurrencyCode::USD);
        $moneyTwo = new Money(200, CurrencyCode::USD);
        $moneyThree = new Money(600, CurrencyCode::EUR); // this will be filtered out

        $this->assertEquals($moneyOne, Money::min($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals($moneyTwo, Money::max($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(150, CurrencyCode::USD)), Money::avg($moneyOne, $moneyTwo, $moneyThree));
        $this->assertEquals((new Money(300, CurrencyCode::USD)), Money::sum($moneyOne, $moneyTwo, $moneyThree));
    }
}
