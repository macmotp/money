<?php

namespace Macmotp\Money\Tests\Unit;

use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Money;
use Macmotp\Support\CurrencyCode;
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
     * @param CurrencyCode $inputCurrency
     * @param int $outputAmount
     * @param string $outputCurrencyCode
     * @param string $outputCurrencySymbol
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyConstructor(
        $inputAmount,
        CurrencyCode $inputCurrency,
        int $outputAmount,
        string $outputCurrencyCode,
        string $outputCurrencySymbol
    ): void {
        $money = new Money($inputAmount, $inputCurrency);

        $this->assertEquals($outputAmount, $money->getAmount());
        $this->assertEquals($outputCurrencyCode, $money->getCurrencyCode());
        $this->assertEquals($outputCurrencySymbol, $money->getCurrencySymbol());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyGetAmountForHumansFunction(): void
    {
        $money = Money::make(12345, CurrencyCode::USD);

        $this->assertEquals(123.45, $money->getAmountForHumans());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyCloneFunction(): void
    {
        $money = Money::make(10000, CurrencyCode::USD);
        $clone = $money->clone();

        $this->assertEquals($money->getAmount(), $clone->getAmount());
        $this->assertEquals($money->getCurrency(), $clone->getCurrency());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyZeroFunction(): void
    {
        $money = Money::make(10000, CurrencyCode::USD);
        $zero = $money->zero();

        $this->assertEquals(0, $zero->getAmount());
        $this->assertEquals($money->getCurrency(), $zero->getCurrency());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyGetAllCurrenciesFunction(): void
    {
        $this->assertCount(155, Money::getAllCurrencies());
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
            [100, CurrencyCode::USD, 100, CurrencyCode::USD->value, '$'],
            // Use string as integer
            ['12345', CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            // Rounding numbers
            [123.45 * 100, CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [123.45 * 1000 / 10, CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [123.45 / 10 * 1000, CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [round(123.45 * 100), CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [floor(123.45 * 100), CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [ceil(123.45 * 100), CurrencyCode::USD, 12345, CurrencyCode::USD->value, '$'],
            [round(123.45), CurrencyCode::USD, 123, CurrencyCode::USD->value, '$'],
            [floor(123.45), CurrencyCode::USD, 123, CurrencyCode::USD->value, '$'],
            [ceil(123.45), CurrencyCode::USD, 124, CurrencyCode::USD->value, '$'],
            // Real world examples that PHP cannot round properly
            [143.89 * 100, CurrencyCode::USD, 14389, CurrencyCode::USD->value, '$'],
            [141.73 * 100, CurrencyCode::USD, 14173, CurrencyCode::USD->value, '$'],
            [19214.26 * 100, CurrencyCode::USD, 1921426, CurrencyCode::USD->value, '$'],
            [9074.72 * 100, CurrencyCode::USD, 907472, CurrencyCode::USD->value, '$'],
            [8389.97 * 100, CurrencyCode::USD, 838997, CurrencyCode::USD->value, '$'],
            [16.33 * 100, CurrencyCode::USD, 1633, CurrencyCode::USD->value, '$'],
            [522.18 * 100, CurrencyCode::USD, 52218, CurrencyCode::USD->value, '$'],
            [1247.34 * 100, CurrencyCode::USD, 124734, CurrencyCode::USD->value, '$'],
            [160.98 * 100, CurrencyCode::USD, 16098, CurrencyCode::USD->value, '$'],
            [151.45 * 100, CurrencyCode::USD, 15145, CurrencyCode::USD->value, '$'],
            [650.67 * 100, CurrencyCode::USD, 65067, CurrencyCode::USD->value, '$'],
            [279.46 * 100, CurrencyCode::USD, 27946, CurrencyCode::USD->value, '$'],
            [9.62 * 100, CurrencyCode::USD, 962, CurrencyCode::USD->value, '$'],
            [1121.34 * 100, CurrencyCode::USD, 112134, CurrencyCode::USD->value, '$'],
            [148.14 * 100, CurrencyCode::USD, 14814, CurrencyCode::USD->value, '$'],
            [4189.23 * 100, CurrencyCode::USD, 418923, CurrencyCode::USD->value, '$'],
            [150.39 * 100, CurrencyCode::USD, 15039, CurrencyCode::USD->value, '$'],
            [129.98 * 100, CurrencyCode::USD, 12998, CurrencyCode::USD->value, '$'],
            [140.17 * 100, CurrencyCode::USD, 14017, CurrencyCode::USD->value, '$'],
            [140.2 * 100, CurrencyCode::USD, 14020, CurrencyCode::USD->value, '$'],
            [79.99 * 100, CurrencyCode::USD, 7999, CurrencyCode::USD->value, '$'],
            [70.1 * 100, CurrencyCode::USD, 7010, CurrencyCode::USD->value, '$'],
            [74.6 * 100, CurrencyCode::USD, 7460, CurrencyCode::USD->value, '$'],
            [71.24 * 100, CurrencyCode::USD, 7124, CurrencyCode::USD->value, '$'],
            [2.53 * 100, CurrencyCode::USD, 253, CurrencyCode::USD->value, '$'],
            [68.74 * 100, CurrencyCode::USD, 6874, CurrencyCode::USD->value, '$'],
            [270.9 * 100, CurrencyCode::USD, 27090, CurrencyCode::USD->value, '$'],
            [65.82 * 100, CurrencyCode::USD, 6582, CurrencyCode::USD->value, '$'],
            [19.4 * 100, CurrencyCode::USD, 1940, CurrencyCode::USD->value, '$'],
            [19.99 * 100, CurrencyCode::USD, 1999, CurrencyCode::USD->value, '$'],
        ];
    }
}
