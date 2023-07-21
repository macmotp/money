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
    /**
     * @dataProvider listConstructors
     *
     * @param $inputAmount
     * @param string $inputCurrency
     * @param int $outputAmount
     * @param string $outputCurrencyCode
     * @param string $outputCurrencySymbol
     * @return void
     */
    public function testMoneyConstructor(
        $inputAmount,
        string $inputCurrency,
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
     * @return void
     */
    public function testMoneyGetAllCurrenciesFunction(): void
    {
        $this->assertCount(39, Money::getAllCurrencies());
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
            [100, Currency::USD, 100, Currency::USD, '$'],
            // Different Currencies
            [100, Currency::AED, 100, Currency::AED, 'د.إ'],
            [100, Currency::ARS, 100, Currency::ARS, 'Arg$'],
            [100, Currency::AUD, 100, Currency::AUD, 'A$'],
            [100, Currency::BGN, 100, Currency::BGN, 'лев'],
            [100, Currency::BRL, 100, Currency::BRL, 'R$'],
            [100, Currency::CAD, 100, Currency::CAD, 'C$'],
            [100, Currency::CHF, 100, Currency::CHF, 'F'],
            [100, Currency::CLP, 100, Currency::CLP, 'Ch$'],
            [100, Currency::CNY, 100, Currency::CNY, '¥'],
            [100, Currency::CZK, 100, Currency::CZK, 'Kč'],
            [100, Currency::DKK, 100, Currency::DKK, 'kr.'],
            [100, Currency::EUR, 100, Currency::EUR, '€'],
            [100, Currency::GBP, 100, Currency::GBP, '£'],
            [100, Currency::HKD, 100, Currency::HKD, 'HK$'],
            [100, Currency::HUF, 100, Currency::HUF, 'Ft'],
            [100, Currency::IDR, 100, Currency::IDR, 'Rp'],
            [100, Currency::ILS, 100, Currency::ILS, '₪'],
            [100, Currency::INR, 100, Currency::INR, '₹'],
            [100, Currency::JPY, 100, Currency::JPY, '¥'],
            [100, Currency::KRW, 100, Currency::KRW, '₩'],
            [100, Currency::MXN, 100, Currency::MXN, 'MX$'],
            [100, Currency::MYR, 100, Currency::MYR, 'RM'],
            [100, Currency::NOK, 100, Currency::NOK, 'kr'],
            [100, Currency::NZD, 100, Currency::NZD, 'NZ$'],
            [100, Currency::PHP, 100, Currency::PHP, '₱'],
            [100, Currency::PLN, 100, Currency::PLN, 'zł'],
            [100, Currency::RON, 100, Currency::RON, 'lei'],
            [100, Currency::RUB, 100, Currency::RUB, '₽'],
            [100, Currency::SAR, 100, Currency::SAR, '﷼'],
            [100, Currency::SEK, 100, Currency::SEK, 'kr'],
            [100, Currency::SGD, 100, Currency::SGD, 'S$'],
            [100, Currency::THB, 100, Currency::THB, '฿'],
            [100, Currency::TRY, 100, Currency::TRY, '₺'],
            [100, Currency::TWD, 100, Currency::TWD, 'NT$'],
            [100, Currency::UAH, 100, Currency::UAH, '₴'],
            [100, Currency::UYU, 100, Currency::UYU, 'U$'],
            [100, Currency::VND, 100, Currency::VND, '₫'],
            [100, Currency::ZAR, 100, Currency::ZAR, 'R'],
            // Use string as integer
            ['12345', Currency::USD, 12345, Currency::USD, '$'],
            // Rounding numbers
            [123.45 * 100, Currency::USD, 12345, Currency::USD, '$'],
            [123.45 * 1000 / 10, Currency::USD, 12345, Currency::USD, '$'],
            [123.45 / 10 * 1000, Currency::USD, 12345, Currency::USD, '$'],
            [round(123.45 * 100), Currency::USD, 12345, Currency::USD, '$'],
            [floor(123.45 * 100), Currency::USD, 12345, Currency::USD, '$'],
            [ceil(123.45 * 100), Currency::USD, 12345, Currency::USD, '$'],
            [round(123.45), Currency::USD, 123, Currency::USD, '$'],
            [floor(123.45), Currency::USD, 123, Currency::USD, '$'],
            [ceil(123.45), Currency::USD, 124, Currency::USD, '$'],
            // Real world examples that PHP cannot round properly
            [143.89 * 100, Currency::USD, 14389, Currency::USD, '$'],
            [141.73 * 100, Currency::USD, 14173, Currency::USD, '$'],
            [19214.26 * 100, Currency::USD, 1921426, Currency::USD, '$'],
            [9074.72 * 100, Currency::USD, 907472, Currency::USD, '$'],
            [8389.97 * 100, Currency::USD, 838997, Currency::USD, '$'],
            [16.33 * 100, Currency::USD, 1633, Currency::USD, '$'],
            [522.18 * 100, Currency::USD, 52218, Currency::USD, '$'],
            [1247.34 * 100, Currency::USD, 124734, Currency::USD, '$'],
            [160.98 * 100, Currency::USD, 16098, Currency::USD, '$'],
            [151.45 * 100, Currency::USD, 15145, Currency::USD, '$'],
            [650.67 * 100, Currency::USD, 65067, Currency::USD, '$'],
            [279.46 * 100, Currency::USD, 27946, Currency::USD, '$'],
            [9.62 * 100, Currency::USD, 962, Currency::USD, '$'],
            [1121.34 * 100, Currency::USD, 112134, Currency::USD, '$'],
            [148.14 * 100, Currency::USD, 14814, Currency::USD, '$'],
            [4189.23 * 100, Currency::USD, 418923, Currency::USD, '$'],
            [150.39 * 100, Currency::USD, 15039, Currency::USD, '$'],
            [129.98 * 100, Currency::USD, 12998, Currency::USD, '$'],
            [140.17 * 100, Currency::USD, 14017, Currency::USD, '$'],
            [140.2 * 100, Currency::USD, 14020, Currency::USD, '$'],
            [79.99 * 100, Currency::USD, 7999, Currency::USD, '$'],
            [70.1 * 100, Currency::USD, 7010, Currency::USD, '$'],
            [74.6 * 100, Currency::USD, 7460, Currency::USD, '$'],
            [71.24 * 100, Currency::USD, 7124, Currency::USD, '$'],
            [2.53 * 100, Currency::USD, 253, Currency::USD, '$'],
            [68.74 * 100, Currency::USD, 6874, Currency::USD, '$'],
            [270.9 * 100, Currency::USD, 27090, Currency::USD, '$'],
            [65.82 * 100, Currency::USD, 6582, Currency::USD, '$'],
            [19.4 * 100, Currency::USD, 1940, Currency::USD, '$'],
            [19.99 * 100, Currency::USD, 1999, Currency::USD, '$'],
        ];
    }
}
