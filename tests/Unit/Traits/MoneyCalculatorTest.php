<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currency;
use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Exceptions\MoneyDivisionByZero;
use Macmotp\Exceptions\MoneyOperationWithDifferentCurrencies;
use Macmotp\Money;
use Macmotp\Support\CurrencyCode;
use PHPUnit\Framework\TestCase;

/**
 * Class MoneyCalculatorTest
 *
 * @package Macmotp\Money\Tests\Unit
 * @group Money
 */
class MoneyCalculatorTest extends TestCase
{
    /**
     * @throws InvalidCurrencyCodeException
     * @throws MoneyOperationWithDifferentCurrencies
     */
    public function testMoneyAddOperation()
    {
        $money = new Money(100, CurrencyCode::USD);
        $sum = new Money(50, CurrencyCode::USD);

        $this->assertEquals(150, $money->add($sum)->getAmount());
    }

    /**
     * @throws MoneyOperationWithDifferentCurrencies
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneySubtractOperation()
    {
        $money = new Money(100, CurrencyCode::USD);
        $subtract = new Money(50, CurrencyCode::USD);

        $this->assertEquals(50, $money->subtract($subtract)->getAmount());
        $this->assertEquals(-50, $subtract->subtract($money)->getAmount());
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testAddMoneyOperationWithDifferentCurrenciesException()
    {
        $this->expectException(MoneyOperationWithDifferentCurrencies::class);
        $money = new Money(100, CurrencyCode::USD);
        $sum = new Money(50, CurrencyCode::EUR);

        $money->add($sum);
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testSubtractMoneyOperationWithDifferentCurrenciesException()
    {
        $this->expectException(MoneyOperationWithDifferentCurrencies::class);
        $money = new Money(100, CurrencyCode::USD);
        $subtract = new Money(50, CurrencyCode::EUR);

        $money->subtract($subtract);
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyMultiplyOperation()
    {
        $money = new Money(100, CurrencyCode::USD);

        $factor = 2.2;
        $this->assertEquals(220, $money->multiply($factor)->getAmount());
        $factor = 2.222;
        $this->assertEquals(222, $money->multiply($factor, 'floor')->getAmount());
        $this->assertEquals(223, $money->multiply($factor, 'ceil')->getAmount());
        $factor = 143.89;
        $this->assertEquals(14389, $money->multiply($factor)->getAmount());
    }

    /**
     * @throws MoneyDivisionByZero
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyDivideOperation()
    {
        $money = new Money(100, CurrencyCode::USD);

        $factor = 2.0;
        $this->assertEquals(50, $money->divide($factor)->getAmount());
        $factor = 1.999;
        $this->assertEquals(50, $money->divide($factor, 'floor')->getAmount());
        $this->assertEquals(51, $money->divide($factor, 'ceil')->getAmount());
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyDivideByZeroException()
    {
        $this->expectException(MoneyDivisionByZero::class);
        $money = new Money(100, CurrencyCode::USD);
        $factor = 0.0;

        $money->divide($factor);
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyPercentageOperation()
    {
        $money = new Money(100, CurrencyCode::USD);

        $this->assertEquals(40, $money->inPercentage(0.4)->getAmount());
        $this->assertEquals(44, $money->inPercentage(0.444, 'floor')->getAmount());
        $this->assertEquals(45, $money->inPercentage(0.444, 'ceil')->getAmount());
    }

    /**
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyAbsoluteOperation()
    {
        $money = new Money(100, CurrencyCode::USD);
        $negativeMoney = new Money(-200, CurrencyCode::USD);

        $this->assertEquals(100, $money->absolute()->getAmount());
        $this->assertEquals(200, $negativeMoney->absolute()->getAmount());
    }
}
