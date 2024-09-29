<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currency;
use Macmotp\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Money;
use Macmotp\Support\CurrencyCode;
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
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyToArrayFunction(): void
    {
        $money = Money::make(10000, CurrencyCode::USD);
        $this->assertEquals([
            'amount' => 10000,
            'currency' => [
                'name' => 'United States Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'flag' => 'us',
                'format' => [
                    'show_symbol' => true,
                    'show_code' => false,
                    'show_space' => false,
                    'show_symbol_or_code_on_left' => true,
                    'show_decimals' => true,
                    'decimal_separator' => '.',
                    'thousands_separator' => ',',
                    'subunit_level' => 2,
                    'number_of_decimals' => 2,
                ],
            ],
        ], $money->toArray());
    }

    /**
     * @dataProvider listDefaultPrintCases
     *
     * @param int $amount
     * @param CurrencyCode $currency
     * @param string $output
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyDefaultPrintFunction(int $amount, CurrencyCode $currency, string $output): void
    {
        $money = new Money($amount, $currency);

        $this->assertEquals($output, $money->print());
    }

    /**
     * @return void
     * @throws InvalidCurrencyCodeException
     */
    public function testMoneyCustomPrintFunction(): void
    {
        $this->assertEquals(
            '1,234.56',
            Money::make(123456, CurrencyCode::USD)->withoutSymbol()->print()
        );
        $this->assertEquals(
            '1,234.56',
            Money::make(123456, CurrencyCode::USD)->withoutCode()->print()
        );
        $this->assertEquals(
            'USD1.234,56',
            Money::make(123456, CurrencyCode::USD)->withCodeOnLeft()->withDecimalSeparator(',')->withThousandsSeparator('.')->print()
        );
        $this->assertEquals(
            '1,234.56 USD',
            Money::make(123456, CurrencyCode::USD)->withCodeOnRight()->withSpace()->print()
        );
        $this->assertEquals(
            '$1,234.56000',
            Money::make(123456, CurrencyCode::USD)->withoutSpace()->withSymbolOnLeft()->withNumberOfDecimals(5)->print()
        );
        $this->assertEquals(
            '1,235$',
            Money::make(123456, CurrencyCode::USD)->withSymbolOnRight()->withoutDecimals()->print()
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
            [123456789, CurrencyCode::AED, 'د.إ1,234,567.89'],
            [123456789, CurrencyCode::AFN, '؋1,234,567.89'],
            [123456789, CurrencyCode::ALL, '1,234,567.89 L'],
            [123456789, CurrencyCode::AMD, '֏1,234,568'],
            [123456789, CurrencyCode::ANG, 'NAƒ1.234.567,89'],
            [123456789, CurrencyCode::AOA, '1,234,568 Kz'],
            [123456789, CurrencyCode::ARS, 'Arg$ 1.234.568'],
            [123456789, CurrencyCode::AUD, 'A$1,234,567.89'],
            [123456789, CurrencyCode::AWG, 'Aƒ 1,234,567.89'],
            [123456789, CurrencyCode::AZN, '₼1,234,567.89'],
            [123456789, CurrencyCode::BAM, 'KM1,234,567.89'],
            [123456789, CurrencyCode::BBD, '$1,234,567.89'],
            [123456789, CurrencyCode::BDT, '৳1,234,568'],
            [123456789, CurrencyCode::BGN, 'лв1,234,567.89'],
            [123456789, CurrencyCode::BHD, 'ب.د123.456,789'],
            [123456789, CurrencyCode::BIF, '123,456,789 FBu'],
            [123456789, CurrencyCode::BMD, '$1,234,567.89'],
            [123456789, CurrencyCode::BND, 'B$1,234,567.89'],
            [123456789, CurrencyCode::BOB, 'Bs1,234,567.89'],
            [123456789, CurrencyCode::BRL, 'R$ 1.234.567,89'],
            [123456789, CurrencyCode::BSD, 'B$1.234.567,89'],
            [123456789, CurrencyCode::BTC, '₿1.23456789'],
            [123456789, CurrencyCode::BTN, 'Nu.1,234,568'],
            [123456789, CurrencyCode::BWP, 'P1,234,567.89'],
            [123456789, CurrencyCode::BYN, 'Br 1,234,567.89'],
            [123456789, CurrencyCode::BZD, 'BZ$1,234,567.89'],
            [123456789, CurrencyCode::CAD, 'C$1,234,567.89'],
            [123456789, CurrencyCode::CDF, 'FC1,234,568'],
            [123456789, CurrencyCode::CHF, '1,234,567.89 F'],
            [123456789, CurrencyCode::CLP, '$123.456.789'],
            [123456789, CurrencyCode::CNY, '¥12,345,678.9'],
            [123456789, CurrencyCode::COP, '$1.234.568'],
            [123456789, CurrencyCode::CRC, '₡1.234.568'],
            [123456789, CurrencyCode::CUP, '$1,234,567.89'],
            [123456789, CurrencyCode::CVE, '$1,234,568'],
            [123456789, CurrencyCode::CZK, '1 234 568 Kč'],
            [123456789, CurrencyCode::DJF, '123,456,789 Fdj'],
            [123456789, CurrencyCode::DKK, '1.234.567,89 kr.'],
            [123456789, CurrencyCode::DOP, '1,234,568$'],
            [123456789, CurrencyCode::DZD, 'د.ج1,234,568'],
            [123456789, CurrencyCode::EGP, 'E£1,234,567.89'],
            [123456789, CurrencyCode::ERN, '1,234,567.89 Nkf'],
            [123456789, CurrencyCode::ETB, '1,234,567.89 Br'],
            [123456789, CurrencyCode::EUR, '€1 234 567,89'],
            [123456789, CurrencyCode::FJD, 'FJ$1,234,567.89'],
            [123456789, CurrencyCode::FKP, '£1,234,567.89'],
            [123456789, CurrencyCode::GBP, '£1,234,567.89'],
            [123456789, CurrencyCode::GEL, '₾1,234,567.89'],
            [123456789, CurrencyCode::GHS, 'GH₵1,234,567.89'],
            [123456789, CurrencyCode::GIP, '£1,234,567.89'],
            [123456789, CurrencyCode::GMD, '1,234,567.89 D'],
            [123456789, CurrencyCode::GNF, '123,456,789 Fr'],
            [123456789, CurrencyCode::GTQ, 'Q1,234,567.89'],
            [123456789, CurrencyCode::GYD, 'G$1,234,568'],
            [123456789, CurrencyCode::HKD, 'HK$1,234,567.89'],
            [123456789, CurrencyCode::HNL, 'L1,234,567.89'],
            [123456789, CurrencyCode::HTG, 'G 1,234,567.89'],
            [123456789, CurrencyCode::HUF, '1 234 567,89 Ft'],
            [123456789, CurrencyCode::IDR, '1.234.568 Rp'],
            [123456789, CurrencyCode::ILS, '₪1,234,567.89'],
            [123456789, CurrencyCode::INR, '₹1,234,568'],
            [123456789, CurrencyCode::IQD, 'ع.د123,457'],
            [123456789, CurrencyCode::IRR, '﷼123,456,789'],
            [123456789, CurrencyCode::ISK, '123.456.789 kr'],
            [123456789, CurrencyCode::JMD, 'J$1,234,567.89'],
            [123456789, CurrencyCode::JOD, 'د.أ123,456.789'],
            [123456789, CurrencyCode::JPY, '¥123,456,789'],
            [123456789, CurrencyCode::KES, 'Sh1,234,568'],
            [123456789, CurrencyCode::KGS, '⃀1,234,567.89'],
            [123456789, CurrencyCode::KHR, '1,234,568៛'],
            [123456789, CurrencyCode::KMF, '123,456,789 FC'],
            [123456789, CurrencyCode::KPW, '₩1,234,568'],
            [123456789, CurrencyCode::KRW, '₩123,456,789'],
            [123456789, CurrencyCode::KWD, 'د.ك123,456.789'],
            [123456789, CurrencyCode::KYD, '$1,234,567.89'],
            [123456789, CurrencyCode::KZT, '₸1,234,568'],
            [123456789, CurrencyCode::LAK, '₭1,234,568'],
            [123456789, CurrencyCode::LBP, 'LL 1,234,568'],
            [123456789, CurrencyCode::LKR, 'Rs 1,234,568'],
            [123456789, CurrencyCode::LRD, 'L$1,234,568'],
            [123456789, CurrencyCode::LSL, 'L1,234,568'],
            [123456789, CurrencyCode::LYD, 'ل.د123,456.789'],
            [123456789, CurrencyCode::MAD, 'DH1,234,567.89'],
            [123456789, CurrencyCode::MDL, '1,234,567.89 L'],
            [123456789, CurrencyCode::MGA, '1,234,568 Ar'],
            [123456789, CurrencyCode::MKD, '1,234,568 ден'],
            [123456789, CurrencyCode::MMK, 'Ks 1,234,568'],
            [123456789, CurrencyCode::MNT, '₮1,234,568'],
            [123456789, CurrencyCode::MOP, 'MOP$1,234,567.89'],
            [123456789, CurrencyCode::MRU, '1,234,568 UM'],
            [123456789, CurrencyCode::MUR, 'Rs 1,234,567/89'],
            [123456789, CurrencyCode::MVR, 'Rf 1,234,567.89'],
            [123456789, CurrencyCode::MWK, 'K1,234,568'],
            [123456789, CurrencyCode::MXN, '1,234,567.89 Mex$'],
            [123456789, CurrencyCode::MYR, 'RM1,234,567.89'],
            [123456789, CurrencyCode::MZN, 'MT1.234.568'],
            [123456789, CurrencyCode::NAD, 'N$1,234,567.89'],
            [123456789, CurrencyCode::NGN, '₦1,234,567.89'],
            [123456789, CurrencyCode::NIO, 'C$1,234,567.89'],
            [123456789, CurrencyCode::NOK, '1.234.567,89 kr'],
            [123456789, CurrencyCode::NPR, 'रु. 1,234,567.89'],
            [123456789, CurrencyCode::NZD, 'NZ$1,234,567.89'],
            [123456789, CurrencyCode::OMR, '.ر.ع123,456.789'],
            [123456789, CurrencyCode::PAB, 'B/.1,234,567.89'],
            [123456789, CurrencyCode::PEN, 'S/1,234,567.89'],
            [123456789, CurrencyCode::PGK, 'K1,234,567.89'],
            [123456789, CurrencyCode::PHP, '₱1,234,567.89'],
            [123456789, CurrencyCode::PKR, 'Rs 1,234,568'],
            [123456789, CurrencyCode::PLN, '1 234 567,89 zł'],
            [123456789, CurrencyCode::PYG, '₲123,456,789'],
            [123456789, CurrencyCode::QAR, 'ر.ق1,234,567.89'],
            [123456789, CurrencyCode::RON, '1.234.567,89 lei'],
            [123456789, CurrencyCode::RSD, 'Дин. 1,234,568'],
            [123456789, CurrencyCode::RUB, '1.234.567,89 ₽'],
            [123456789, CurrencyCode::RWF, '123,456,789 FRw'],
            [123456789, CurrencyCode::SAR, 'ر.س1,234,567.89'],
            [123456789, CurrencyCode::SBD, 'SI$1,234,567.89'],
            [123456789, CurrencyCode::SCR, 'Rs 1,234,567/89'],
            [123456789, CurrencyCode::SDG, 'ج.س1,234,567.89'],
            [123456789, CurrencyCode::SEK, '1 234 567,89 kr'],
            [123456789, CurrencyCode::SGD, 'S$1,234,567.89'],
            [123456789, CurrencyCode::SHP, '£1,234,567.89'],
            [123456789, CurrencyCode::SLE, 'Le 1,234,567.89'],
            [123456789, CurrencyCode::SOS, '1,234,567.89 Sh.So.'],
            [123456789, CurrencyCode::SRD, 'Sur$1,234,567.89'],
            [123456789, CurrencyCode::SSP, 'SS£1,234,567.89'],
            [123456789, CurrencyCode::STN, '1,234,567.89 Db'],
            [123456789, CurrencyCode::SYP, 'ل.س1,234,568'],
            [123456789, CurrencyCode::SZL, 'L1,234,567.89'],
            [123456789, CurrencyCode::THB, '฿1,234,567.89'],
            [123456789, CurrencyCode::TJS, 'SM 1,234,567.89'],
            [123456789, CurrencyCode::TMT, '1,234,567.89 m'],
            [123456789, CurrencyCode::TND, 'د.ت123,456.789'],
            [123456789, CurrencyCode::TOP, 'T$1,234,567.89'],
            [123456789, CurrencyCode::TRY, '₺1.234.567,89'],
            [123456789, CurrencyCode::TTD, 'TT$1,234,567.89'],
            [123456789, CurrencyCode::TWD, 'NT$1,234,567.89'],
            [123456789, CurrencyCode::TZS, 'Shs1,234,568'],
            [123456789, CurrencyCode::UAH, '₴1,234,567.89'],
            [123456789, CurrencyCode::UGX, 'Shs123,456,789'],
            [123456789, CurrencyCode::UYU, '$U1.234.568'],
            [123456789, CurrencyCode::USD, '$1,234,567.89'],
            [123456789, CurrencyCode::UZS, '1,234,568 sum'],
            [123456789, CurrencyCode::VES, 'Bs.S 1,234,568'],
            [123456789, CurrencyCode::VND, '123.456.789 ₫'],
            [123456789, CurrencyCode::VUV, 'VT 123,456,789'],
            [123456789, CurrencyCode::WST, '$1,234,567.89'],
            [123456789, CurrencyCode::XAF, '123,456,789 F.CFA'],
            [123456789, CurrencyCode::XCD, 'EC$1,234,567.89'],
            [123456789, CurrencyCode::XOF, '123 456 789 F.CFA'],
            [123456789, CurrencyCode::XPF, '₣ 123,456,789'],
            [123456789, CurrencyCode::YER, '﷼1,234,567.89'],
            [123456789, CurrencyCode::ZAR, 'R1,234,567.89'],
            [123456789, CurrencyCode::ZMW, '1,234,567.89K'],
            [123456789, CurrencyCode::ZWG, 'ZiG1,234,567.89'],
        ];
    }
}
