<?php

namespace Macmotp\Money\Tests\Unit;

use Macmotp\Currencies\EUR;
use Macmotp\Currencies\USD;
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
    /**
     * @dataProvider listConstructors
     *
     * @param $inputAmount
     * @param string $inputCurrency
     * @param int $outputAmount
     * @param Currency $outputCurrency
     * @return void
     */
    public function testMoneyConstructor($inputAmount, string $inputCurrency, int $outputAmount, Currency $outputCurrency): void
    {
        $money = new Money($inputAmount, $inputCurrency);

        $this->assertEquals($outputAmount, $money->getAmount());
        $this->assertEquals($outputCurrency->getFormat()->getCode(), $money->getCurrency()->getFormat()->getCode());
    }

    /**
     * @dataProvider listConstructors
     *
     * @param $inputAmount
     * @param string $inputCurrency
     * @param int $outputAmount
     * @param Currency $outputCurrency
     * @return void
     */
    public function testMoneyMakeConstructor($inputAmount, string $inputCurrency, int $outputAmount, Currency $outputCurrency): void
    {
        $money = Money::make($inputAmount, $inputCurrency);

        $this->assertEquals($outputAmount, $money->getAmount());
        $this->assertEquals($outputCurrency->getFormat()->getCode(), $money->getCurrency()->getFormat()->getCode());
    }

    /**
     * @return void
     */
    public function testMoneyGetAmountForHumansFunction(): void
    {
        $money = Money::make(12345, Currency::USD);

        $this->assertEquals(123.45, $money->getAmountForHumans());
    }

    /**
     * @return void
     */
    public function testMoneyCloneFunction(): void
    {
        $money = Money::make(10000, Currency::USD);
        $clone = $money->clone();

        $this->assertEquals($money->getAmount(), $clone->getAmount());
        $this->assertEquals($money->getCurrency(), $clone->getCurrency());
    }

    /**
     * @return void
     */
    public function testMoneyZeroFunction(): void
    {
        $money = Money::make(10000, Currency::USD);
        $zero = $money->zero();

        $this->assertEquals(0, $zero->getAmount());
        $this->assertEquals($money->getCurrency(), $zero->getCurrency());
    }

    /**
     * List of different constructors
     *
     * @return array[]
     */
    public static function listConstructors(): array
    {
        return [
            // Simple canonical usage
            [100, Currency::USD, 100, new USD()],
            // Different Currency
            [1, Currency::EUR, 1, new EUR()],
            // Use string as integer
            ['12345', Currency::USD, 12345, new USD()],
            // Rounding numbers
            [123.45 * 100, Currency::USD, 12345, new USD()],
            [123.45 * 1000 / 10, Currency::USD, 12345, new USD()],
            [123.45 / 10 * 1000, Currency::USD, 12345, new USD()],
            [round(123.45 * 100), Currency::USD, 12345, new USD()],
            [floor(123.45 * 100), Currency::USD, 12345, new USD()],
            [ceil(123.45 * 100), Currency::USD, 12345, new USD()],
            [round(123.45), Currency::USD, 123, new USD()],
            [floor(123.45), Currency::USD, 123, new USD()],
            [ceil(123.45), Currency::USD, 124, new USD()],
            // Real world examples that PHP cannot round properly
            [143.89 * 100, Currency::USD, 14389, new USD()],
            [141.73 * 100, Currency::USD, 14173, new USD()],
            [19214.26 * 100, Currency::USD, 1921426, new USD()],
            [9074.72 * 100, Currency::USD, 907472, new USD()],
            [8389.97 * 100, Currency::USD, 838997, new USD()],
            [16.33 * 100, Currency::USD, 1633, new USD()],
            [522.18 * 100, Currency::USD, 52218, new USD()],
            [1247.34 * 100, Currency::USD, 124734, new USD()],
            [160.98 * 100, Currency::USD, 16098, new USD()],
            [151.45 * 100, Currency::USD, 15145, new USD()],
            [650.67 * 100, Currency::USD, 65067, new USD()],
            [279.46 * 100, Currency::USD, 27946, new USD()],
            [9.62 * 100, Currency::USD, 962, new USD()],
            [1121.34 * 100, Currency::USD, 112134, new USD()],
            [148.14 * 100, Currency::USD, 14814, new USD()],
            [4189.23 * 100, Currency::USD, 418923, new USD()],
            [150.39 * 100, Currency::USD, 15039, new USD()],
            [129.98 * 100, Currency::USD, 12998, new USD()],
            [140.17 * 100, Currency::USD, 14017, new USD()],
            [140.2 * 100, Currency::USD, 14020, new USD()],
            [79.99 * 100, Currency::USD, 7999, new USD()],
            [70.1 * 100, Currency::USD, 7010, new USD()],
            [74.6 * 100, Currency::USD, 7460, new USD()],
            [71.24 * 100, Currency::USD, 7124, new USD()],
            [2.53 * 100, Currency::USD, 253, new USD()],
            [68.74 * 100, Currency::USD, 6874, new USD()],
            [270.9 * 100, Currency::USD, 27090, new USD()],
            [65.82 * 100, Currency::USD, 6582, new USD()],
            [19.4 * 100, Currency::USD, 1940, new USD()],
            [19.99 * 100, Currency::USD, 1999, new USD()],
        ];
    }
}
