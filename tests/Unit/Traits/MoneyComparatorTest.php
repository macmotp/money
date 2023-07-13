<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currency;
use Macmotp\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class MoneyComparatorTest
 *
 * @package Macmotp\Money\Tests\Unit
 * @group Money
 */
class MoneyComparatorTest extends TestCase
{
    public function testIsSameCurrencyComparison()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(100, Currency::USD);
        $moneyThree = new Money(100, Currency::EUR);

        $this->assertTrue($moneyOne->isSameCurrency($moneyTwo));
        $this->assertFalse($moneyOne->isSameCurrency($moneyThree));
        $this->assertFalse($moneyOne->isSameCurrency($moneyTwo, $moneyThree));
    }

    public function testIsEqualToComparison()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(100, Currency::USD);
        $moneyThree = new Money(100, Currency::EUR);

        $this->assertTrue($moneyOne->isEqualTo($moneyTwo));
        $this->assertFalse($moneyOne->isEqualTo($moneyThree));
    }

    public function testAmountsComparison()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(200, Currency::USD);
        $moneyThree = new Money(200, Currency::USD);

        $this->assertTrue($moneyOne->isLessThan($moneyTwo));
        $this->assertFalse($moneyOne->isGreaterThan($moneyTwo));
        $this->assertFalse($moneyOne->isGreaterThanOrEqualTo($moneyThree));
        $this->assertTrue($moneyOne->isLessThanOrEqualTo($moneyTwo));
        $this->assertFalse($moneyOne->isGreaterThanOrEqualTo($moneyTwo));
        $this->assertTrue($moneyTwo->isGreaterThanOrEqualTo($moneyThree));
    }

    public function testValueSignComparison()
    {
        $moneyOne = new Money(100, Currency::USD);
        $moneyTwo = new Money(-200, Currency::USD);
        $moneyThree = new Money(0, Currency::USD);

        $this->assertTrue($moneyOne->isPositive());
        $this->assertTrue($moneyOne->isZeroOrPositive());
        $this->assertTrue($moneyTwo->isNegative());
        $this->assertTrue($moneyTwo->isZeroOrNegative());
        $this->assertTrue($moneyThree->isZero());
        $this->assertTrue($moneyThree->isZeroOrNegative());
        $this->assertTrue($moneyThree->isZeroOrPositive());
        $this->assertFalse($moneyThree->isPositive());
        $this->assertFalse($moneyThree->isNegative());
    }
}
