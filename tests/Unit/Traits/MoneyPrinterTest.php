<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currency;
use Macmotp\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class MoneyPrinterTest
 *
 * @package Macmotp\Money\Tests\Unit
 * @group Money
 */
class MoneyPrinterTest extends TestCase
{
    /**
     * @return void
     */
    public function testMoneyToArrayFunction(): void
    {
        $money = Money::make(10000, Currency::USD);
        $array = $money->toArray();

        $this->assertEquals(10000, $array['amount']);
        $this->assertEquals(Currency::USD, $array['currency']);
    }

    /**
     * @dataProvider listDefaultPrintCases
     *
     * @param int $amount
     * @param string $currency
     * @param string $output
     * @return void
     */
    public function testMoneyDefaultPrintFunction(int $amount, string $currency, string $output): void
    {
        $money = new Money($amount, $currency);

        $this->assertEquals($output, $money->print());
    }

    /**
     * @return void
     */
    public function testMoneyCustomPrintFunction(): void
    {
        $this->assertEquals(
            '1,234.56',
            Money::make(123456, Currency::USD)->withoutSymbol()->print()
        );
        $this->assertEquals(
            '1,234.56',
            Money::make(123456, Currency::USD)->withoutCode()->print()
        );
        $this->assertEquals(
            'USD1.234,56',
            Money::make(123456, Currency::USD)->withCodeOnLeft()->withDecimalSeparator(',')->withThousandsSeparator('.')->print()
        );
        $this->assertEquals(
            '1,234.56 USD',
            Money::make(123456, Currency::USD)->withCodeOnRight()->withSpace()->print()
        );
        $this->assertEquals(
            '$1,234.56000',
            Money::make(123456, Currency::USD)->withoutSpace()->withSymbolOnLeft()->withNumberOfDecimals(5)->print()
        );
        $this->assertEquals(
            '1,235$',
            Money::make(123456, Currency::USD)->withSymbolOnRight()->withoutDecimals()->print()
        );
    }

    /**
     * List of different default print cases
     *
     * @return array[]
     */
    public static function listDefaultPrintCases(): array
    {
        return [
            [12345, Currency::USD, '123.45$'],
            [12345, Currency::EUR, '€123,45'],
        ];
    }
}
