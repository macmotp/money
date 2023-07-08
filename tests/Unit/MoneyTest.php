<?php

namespace Macmotp\Money\Tests\Unit;

use Macmotp\Currency;
use Macmotp\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class MoneyTest
 *
 * @package Macmotp\Money\Tests\Unit
 * @group Money
 */
class MoneyTest extends TestCase
{
    public function testMoneyConstructor()
    {
        $money = new Money(100, Currency::USD);

        $this->assertEquals(100, $money->amount());
        $this->assertEquals(Currency::USD, $money->currency());
    }
}
