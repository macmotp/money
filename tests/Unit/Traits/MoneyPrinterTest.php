<?php

namespace Macmotp\Money\Tests\Unit\Traits;

use Macmotp\Currencies\AED;
use Macmotp\Currencies\AFN;
use Macmotp\Currencies\ALL;
use Macmotp\Currencies\AMD;
use Macmotp\Currencies\ANG;
use Macmotp\Currencies\AOA;
use Macmotp\Currencies\ARS;
use Macmotp\Currencies\AUD;
use Macmotp\Currencies\AWG;
use Macmotp\Currencies\AZN;
use Macmotp\Currencies\BAM;
use Macmotp\Currencies\BBD;
use Macmotp\Currencies\BDT;
use Macmotp\Currencies\BGN;
use Macmotp\Currencies\BHD;
use Macmotp\Currencies\BIF;
use Macmotp\Currencies\BMD;
use Macmotp\Currencies\BND;
use Macmotp\Currencies\BOB;
use Macmotp\Currencies\BRL;
use Macmotp\Currencies\BSD;
use Macmotp\Currencies\BTC;
use Macmotp\Currencies\BTN;
use Macmotp\Currencies\BWP;
use Macmotp\Currencies\BYN;
use Macmotp\Currencies\BZD;
use Macmotp\Currencies\CAD;
use Macmotp\Currencies\CDF;
use Macmotp\Currencies\CHF;
use Macmotp\Currencies\CLP;
use Macmotp\Currencies\CNY;
use Macmotp\Currencies\COP;
use Macmotp\Currencies\CRC;
use Macmotp\Currencies\CUP;
use Macmotp\Currencies\CVE;
use Macmotp\Currencies\CZK;
use Macmotp\Currencies\DJF;
use Macmotp\Currencies\DKK;
use Macmotp\Currencies\DOP;
use Macmotp\Currencies\DZD;
use Macmotp\Currencies\EGP;
use Macmotp\Currencies\ERN;
use Macmotp\Currencies\ETB;
use Macmotp\Currencies\EUR;
use Macmotp\Currencies\FJD;
use Macmotp\Currencies\FKP;
use Macmotp\Currencies\GBP;
use Macmotp\Currencies\GEL;
use Macmotp\Currencies\GHS;
use Macmotp\Currencies\GIP;
use Macmotp\Currencies\GMD;
use Macmotp\Currencies\GNF;
use Macmotp\Currencies\GTQ;
use Macmotp\Currencies\GYD;
use Macmotp\Currencies\HKD;
use Macmotp\Currencies\HNL;
use Macmotp\Currencies\HTG;
use Macmotp\Currencies\HUF;
use Macmotp\Currencies\IDR;
use Macmotp\Currencies\ILS;
use Macmotp\Currencies\INR;
use Macmotp\Currencies\IQD;
use Macmotp\Currencies\IRR;
use Macmotp\Currencies\ISK;
use Macmotp\Currencies\JMD;
use Macmotp\Currencies\JOD;
use Macmotp\Currencies\JPY;
use Macmotp\Currencies\KES;
use Macmotp\Currencies\KGS;
use Macmotp\Currencies\KHR;
use Macmotp\Currencies\KMF;
use Macmotp\Currencies\KPW;
use Macmotp\Currencies\KRW;
use Macmotp\Currencies\KWD;
use Macmotp\Currencies\KYD;
use Macmotp\Currencies\KZT;
use Macmotp\Currencies\LAK;
use Macmotp\Currencies\LBP;
use Macmotp\Currencies\LKR;
use Macmotp\Currencies\LRD;
use Macmotp\Currencies\LSL;
use Macmotp\Currencies\LYD;
use Macmotp\Currencies\MAD;
use Macmotp\Currencies\MDL;
use Macmotp\Currencies\MGA;
use Macmotp\Currencies\MKD;
use Macmotp\Currencies\MMK;
use Macmotp\Currencies\MNT;
use Macmotp\Currencies\MOP;
use Macmotp\Currencies\MRU;
use Macmotp\Currencies\MUR;
use Macmotp\Currencies\MVR;
use Macmotp\Currencies\MWK;
use Macmotp\Currencies\MXN;
use Macmotp\Currencies\MYR;
use Macmotp\Currencies\MZN;
use Macmotp\Currencies\NAD;
use Macmotp\Currencies\NGN;
use Macmotp\Currencies\NIO;
use Macmotp\Currencies\NOK;
use Macmotp\Currencies\NPR;
use Macmotp\Currencies\NZD;
use Macmotp\Currencies\OMR;
use Macmotp\Currencies\PAB;
use Macmotp\Currencies\PEN;
use Macmotp\Currencies\PGK;
use Macmotp\Currencies\PHP;
use Macmotp\Currencies\PKR;
use Macmotp\Currencies\PLN;
use Macmotp\Currencies\PYG;
use Macmotp\Currencies\QAR;
use Macmotp\Currencies\RON;
use Macmotp\Currencies\RSD;
use Macmotp\Currencies\RUB;
use Macmotp\Currencies\RWF;
use Macmotp\Currencies\SAR;
use Macmotp\Currencies\SBD;
use Macmotp\Currencies\SCR;
use Macmotp\Currencies\SDG;
use Macmotp\Currencies\SEK;
use Macmotp\Currencies\SGD;
use Macmotp\Currencies\SHP;
use Macmotp\Currencies\SLE;
use Macmotp\Currencies\SOS;
use Macmotp\Currencies\SRD;
use Macmotp\Currencies\SSP;
use Macmotp\Currencies\STN;
use Macmotp\Currencies\SYP;
use Macmotp\Currencies\SZL;
use Macmotp\Currencies\THB;
use Macmotp\Currencies\TJS;
use Macmotp\Currencies\TMT;
use Macmotp\Currencies\TND;
use Macmotp\Currencies\TOP;
use Macmotp\Currencies\TRY_;
use Macmotp\Currencies\TTD;
use Macmotp\Currencies\TWD;
use Macmotp\Currencies\TZS;
use Macmotp\Currencies\UAH;
use Macmotp\Currencies\UGX;
use Macmotp\Currencies\UYU;
use Macmotp\Currencies\UZS;
use Macmotp\Currencies\VES;
use Macmotp\Currencies\VND;
use Macmotp\Currencies\VUV;
use Macmotp\Currencies\WST;
use Macmotp\Currencies\XAF;
use Macmotp\Currencies\XCD;
use Macmotp\Currencies\XOF;
use Macmotp\Currencies\XPF;
use Macmotp\Currencies\YER;
use Macmotp\Currencies\ZAR;
use Macmotp\Currencies\ZMW;
use Macmotp\Currencies\ZWG;
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
        $this->assertEquals(Currency::USD, $array['currency_code']);
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
            [123456789, Currency::AED, 'د.إ1,234,567.89'],
            [123456789, Currency::AFN, '؋1,234,567.89'],
            [123456789, Currency::ALL, '1,234,567.89 L'],
            [123456789, Currency::AMD, '֏1,234,568'],
            [123456789, Currency::ANG, 'NAƒ1.234.567,89'],
            [123456789, Currency::AOA, '1,234,568 Kz'],
            [123456789, Currency::ARS, 'Arg$ 1.234.568'],
            [123456789, Currency::AUD, 'A$1,234,567.89'],
            [123456789, Currency::AWG, 'Aƒ 1,234,567.89'],
            [123456789, Currency::AZN, '₼1,234,567.89'],
            [123456789, Currency::BAM, 'KM1,234,567.89'],
            [123456789, Currency::BBD, '$1,234,567.89'],
            [123456789, Currency::BDT, '৳1,234,568'],
            [123456789, Currency::BGN, 'лв1,234,567.89'],
            [123456789, Currency::BHD, 'ب.د123.456,789'],
            [123456789, Currency::BIF, '123,456,789 FBu'],
            [123456789, Currency::BMD, '$1,234,567.89'],
            [123456789, Currency::BND, 'B$1,234,567.89'],
            [123456789, Currency::BOB, 'Bs1,234,567.89'],
            [123456789, Currency::BRL, 'R$ 1.234.567,89'],
            [123456789, Currency::BSD, 'B$1.234.567,89'],
            [123456789, Currency::BTC, '₿1.23456789'],
            [123456789, Currency::BTN, 'Nu.1,234,568'],
            [123456789, Currency::BWP, 'P1,234,567.89'],
            [123456789, Currency::BYN, 'Br 1,234,567.89'],
            [123456789, Currency::BZD, 'BZ$1,234,567.89'],
            [123456789, Currency::CAD, 'C$1,234,567.89'],
            [123456789, Currency::CDF, 'FC1,234,568'],
            [123456789, Currency::CHF, '1,234,567.89 F'],
            [123456789, Currency::CLP, '$123.456.789'],
            [123456789, Currency::CNY, '¥12,345,678.9'],
            [123456789, Currency::COP, '$1.234.568'],
            [123456789, Currency::CRC, '₡1.234.568'],
            [123456789, Currency::CUP, '$1,234,567.89'],
            [123456789, Currency::CVE, '$1,234,568'],
            [123456789, Currency::CZK, '1 234 568 Kč'],
            [123456789, Currency::DJF, '123,456,789 Fdj'],
            [123456789, Currency::DKK, '1.234.567,89 kr.'],
            [123456789, Currency::DOP, '1,234,568$'],
            [123456789, Currency::DZD, 'د.ج1,234,568'],
            [123456789, Currency::EGP, 'E£1,234,567.89'],
            [123456789, Currency::ERN, '1,234,567.89 Nkf'],
            [123456789, Currency::ETB, '1,234,567.89 Br'],
            [123456789, Currency::EUR, '€1 234 567,89'],
            [123456789, Currency::FJD, 'FJ$1,234,567.89'],
            [123456789, Currency::FKP, '£1,234,567.89'],
            [123456789, Currency::GBP, '£1,234,567.89'],
            [123456789, Currency::GEL, '₾1,234,567.89'],
            [123456789, Currency::GHS, 'GH₵1,234,567.89'],
            [123456789, Currency::GIP, '£1,234,567.89'],
            [123456789, Currency::GMD, '1,234,567.89 D'],
            [123456789, Currency::GNF, '123,456,789 Fr'],
            [123456789, Currency::GTQ, 'Q1,234,567.89'],
            [123456789, Currency::GYD, 'G$1,234,568'],
            [123456789, Currency::HKD, 'HK$1,234,567.89'],
            [123456789, Currency::HNL, 'L1,234,567.89'],
            [123456789, Currency::HTG, 'G 1,234,567.89'],
            [123456789, Currency::HUF, '1 234 567,89 Ft'],
            [123456789, Currency::IDR, '1.234.568 Rp'],
            [123456789, Currency::ILS, '₪1,234,567.89'],
            [123456789, Currency::INR, '₹1,234,568'],
            [123456789, Currency::IQD, 'ع.د123,457'],
            [123456789, Currency::IRR, '﷼123,456,789'],
            [123456789, Currency::ISK, '123.456.789 kr'],
            [123456789, Currency::JMD, 'J$1,234,567.89'],
            [123456789, Currency::JOD, 'د.أ123,456.789'],
            [123456789, Currency::JPY, '¥123,456,789'],
            [123456789, Currency::KES, 'Sh1,234,568'],
            [123456789, Currency::KGS, '⃀1,234,567.89'],
            [123456789, Currency::KHR, '1,234,568៛'],
            [123456789, Currency::KMF, '123,456,789 FC'],
            [123456789, Currency::KPW, '₩1,234,568'],
            [123456789, Currency::KRW, '₩123,456,789'],
            [123456789, Currency::KWD, 'د.ك123,456.789'],
            [123456789, Currency::KYD, '$1,234,567.89'],
            [123456789, Currency::KZT, '₸1,234,568'],
            [123456789, Currency::LAK, '₭1,234,568'],
            [123456789, Currency::LBP, 'LL 1,234,568'],
            [123456789, Currency::LKR, 'Rs 1,234,568'],
            [123456789, Currency::LRD, 'L$1,234,568'],
            [123456789, Currency::LSL, 'L1,234,568'],
            [123456789, Currency::LYD, 'ل.د123,456.789'],
            [123456789, Currency::MAD, 'DH1,234,567.89'],
            [123456789, Currency::MDL, '1,234,567.89 L'],
            [123456789, Currency::MGA, '1,234,568 Ar'],
            [123456789, Currency::MKD, '1,234,568 ден'],
            [123456789, Currency::MMK, 'Ks 1,234,568'],
            [123456789, Currency::MNT, '₮1,234,568'],
            [123456789, Currency::MOP, 'MOP$1,234,567.89'],
            [123456789, Currency::MRU, '1,234,568 UM'],
            [123456789, Currency::MUR, 'Rs 1,234,567/89'],
            [123456789, Currency::MVR, 'Rf 1,234,567.89'],
            [123456789, Currency::MWK, 'K1,234,568'],
            [123456789, Currency::MXN, '1,234,567.89 Mex$'],
            [123456789, Currency::MYR, 'RM1,234,567.89'],
            [123456789, Currency::MZN, 'MT1.234.568'],
            [123456789, Currency::NAD, 'N$1,234,567.89'],
            [123456789, Currency::NGN, '₦1,234,567.89'],
            [123456789, Currency::NIO, 'C$1,234,567.89'],
            [123456789, Currency::NOK, '1.234.567,89 kr'],
            [123456789, Currency::NPR, 'रु. 1,234,567.89'],
            [123456789, Currency::NZD, 'NZ$1,234,567.89'],
            [123456789, Currency::OMR, '.ر.ع123,456.789'],
            [123456789, Currency::PAB, 'B/.1,234,567.89'],
            [123456789, Currency::PEN, 'S/1,234,567.89'],
            [123456789, Currency::PGK, 'K1,234,567.89'],
            [123456789, Currency::PHP, '₱1,234,567.89'],
            [123456789, Currency::PKR, 'Rs 1,234,568'],
            [123456789, Currency::PLN, '1 234 567,89 zł'],
            [123456789, Currency::PYG, '₲123,456,789'],
            [123456789, Currency::QAR, 'ر.ق1,234,567.89'],
            [123456789, Currency::RON, '1.234.567,89 lei'],
            [123456789, Currency::RSD, 'Дин. 1,234,568'],
            [123456789, Currency::RUB, '1.234.567,89 ₽'],
            [123456789, Currency::RWF, '123,456,789 FRw'],
            [123456789, Currency::SAR, 'ر.س1,234,567.89'],
            [123456789, Currency::SBD, 'SI$1,234,567.89'],
            [123456789, Currency::SCR, 'Rs 1,234,567/89'],
            [123456789, Currency::SDG, 'ج.س1,234,567.89'],
            [123456789, Currency::SEK, '1 234 567,89 kr'],
            [123456789, Currency::SGD, 'S$1,234,567.89'],
            [123456789, Currency::SHP, '£1,234,567.89'],
            [123456789, Currency::SLE, 'Le 1,234,567.89'],
            [123456789, Currency::SOS, '1,234,567.89 Sh.So.'],
            [123456789, Currency::SRD, 'Sur$1,234,567.89'],
            [123456789, Currency::SSP, 'SS£1,234,567.89'],
            [123456789, Currency::STN, '1,234,567.89 Db'],
            [123456789, Currency::SYP, 'ل.س1,234,568'],
            [123456789, Currency::SZL, 'L1,234,567.89'],
            [123456789, Currency::THB, '฿1,234,567.89'],
            [123456789, Currency::TJS, 'SM 1,234,567.89'],
            [123456789, Currency::TMT, '1,234,567.89 m'],
            [123456789, Currency::TND, 'د.ت123,456.789'],
            [123456789, Currency::TOP, 'T$1,234,567.89'],
            [123456789, Currency::TRY, '₺1.234.567,89'],
            [123456789, Currency::TTD, 'TT$1,234,567.89'],
            [123456789, Currency::TWD, 'NT$1,234,567.89'],
            [123456789, Currency::TZS, 'Shs1,234,568'],
            [123456789, Currency::UAH, '₴1,234,567.89'],
            [123456789, Currency::UGX, 'Shs123,456,789'],
            [123456789, Currency::UYU, '$U1.234.568'],
            [123456789, Currency::USD, '$1,234,567.89'],
            [123456789, Currency::UZS, '1,234,568 sum'],
            [123456789, Currency::VES, 'Bs.S 1,234,568'],
            [123456789, Currency::VND, '123.456.789 ₫'],
            [123456789, Currency::VUV, 'VT 123,456,789'],
            [123456789, Currency::WST, '$1,234,567.89'],
            [123456789, Currency::XAF, '123,456,789 F.CFA'],
            [123456789, Currency::XCD, 'EC$1,234,567.89'],
            [123456789, Currency::XOF, '123 456 789 F.CFA'],
            [123456789, Currency::XPF, '₣ 123,456,789'],
            [123456789, Currency::YER, '﷼1,234,567.89'],
            [123456789, Currency::ZAR, 'R1,234,567.89'],
            [123456789, Currency::ZMW, '1,234,567.89K'],
            [123456789, Currency::ZWG, 'ZiG1,234,567.89'],
        ];
    }
}
