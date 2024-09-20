<?php

namespace Macmotp\Currencies\Support;

use Illuminate\Support\Collection;
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
use Macmotp\Currencies\USD;
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

/**
 * Context class
 *
 * Mapping each currency code with related implementation
 */
final class Context
{
    /**
     * Map currency codes with related interface
     *
     * @param string $currencyCode
     *
     * @return Currency
     */
    public static function getCurrencyFromCode(string $currencyCode): Currency
    {
        return match ($currencyCode) {
            Currency::AED => new AED(),
            Currency::AFN => new AFN(),
            Currency::ALL => new ALL(),
            Currency::AMD => new AMD(),
            Currency::ANG => new ANG(),
            Currency::AOA => new AOA(),
            Currency::ARS => new ARS(),
            Currency::AUD => new AUD(),
            Currency::AWG => new AWG(),
            Currency::AZN => new AZN(),
            Currency::BAM => new BAM(),
            Currency::BBD => new BBD(),
            Currency::BDT => new BDT(),
            Currency::BGN => new BGN(),
            Currency::BHD => new BHD(),
            Currency::BIF => new BIF(),
            Currency::BMD => new BMD(),
            Currency::BND => new BND(),
            Currency::BOB => new BOB(),
            Currency::BRL => new BRL(),
            Currency::BSD => new BSD(),
            Currency::BTC => new BTC(),
            Currency::BTN => new BTN(),
            Currency::BWP => new BWP(),
            Currency::BYN => new BYN(),
            Currency::BZD => new BZD(),
            Currency::CAD => new CAD(),
            Currency::CDF => new CDF(),
            Currency::CHF => new CHF(),
            Currency::CLP => new CLP(),
            Currency::CNY => new CNY(),
            Currency::COP => new COP(),
            Currency::CRC => new CRC(),
            Currency::CUP => new CUP(),
            Currency::CVE => new CVE(),
            Currency::CZK => new CZK(),
            Currency::DJF => new DJF(),
            Currency::DKK => new DKK(),
            Currency::DOP => new DOP(),
            Currency::DZD => new DZD(),
            Currency::EGP => new EGP(),
            Currency::ERN => new ERN(),
            Currency::ETB => new ETB(),
            Currency::EUR => new EUR(),
            Currency::FJD => new FJD(),
            Currency::FKP => new FKP(),
            Currency::GBP => new GBP(),
            Currency::GEL => new GEL(),
            Currency::GHS => new GHS(),
            Currency::GIP => new GIP(),
            Currency::GMD => new GMD(),
            Currency::GNF => new GNF(),
            Currency::GTQ => new GTQ(),
            Currency::GYD => new GYD(),
            Currency::HKD => new HKD(),
            Currency::HNL => new HNL(),
            Currency::HTG => new HTG(),
            Currency::HUF => new HUF(),
            Currency::IDR => new IDR(),
            Currency::ILS => new ILS(),
            Currency::INR => new INR(),
            Currency::IQD => new IQD(),
            Currency::IRR => new IRR(),
            Currency::ISK => new ISK(),
            Currency::JMD => new JMD(),
            Currency::JOD => new JOD(),
            Currency::JPY => new JPY(),
            Currency::KES => new KES(),
            Currency::KGS => new KGS(),
            Currency::KHR => new KHR(),
            Currency::KMF => new KMF(),
            Currency::KPW => new KPW(),
            Currency::KRW => new KRW(),
            Currency::KWD => new KWD(),
            Currency::KYD => new KYD(),
            Currency::KZT => new KZT(),
            Currency::LAK => new LAK(),
            Currency::LBP => new LBP(),
            Currency::LKR => new LKR(),
            Currency::LRD => new LRD(),
            Currency::LSL => new LSL(),
            Currency::LYD => new LYD(),
            Currency::MAD => new MAD(),
            Currency::MDL => new MDL(),
            Currency::MGA => new MGA(),
            Currency::MKD => new MKD(),
            Currency::MMK => new MMK(),
            Currency::MNT => new MNT(),
            Currency::MOP => new MOP(),
            Currency::MRU => new MRU(),
            Currency::MUR => new MUR(),
            Currency::MVR => new MVR(),
            Currency::MWK => new MWK(),
            Currency::MXN => new MXN(),
            Currency::MYR => new MYR(),
            Currency::MZN => new MZN(),
            Currency::NAD => new NAD(),
            Currency::NGN => new NGN(),
            Currency::NIO => new NIO(),
            Currency::NOK => new NOK(),
            Currency::NPR => new NPR(),
            Currency::NZD => new NZD(),
            Currency::OMR => new OMR(),
            Currency::PAB => new PAB(),
            Currency::PEN => new PEN(),
            Currency::PGK => new PGK(),
            Currency::PHP => new PHP(),
            Currency::PKR => new PKR(),
            Currency::PLN => new PLN(),
            Currency::PYG => new PYG(),
            Currency::QAR => new QAR(),
            Currency::RON => new RON(),
            Currency::RSD => new RSD(),
            Currency::RUB => new RUB(),
            Currency::RWF => new RWF(),
            Currency::SAR => new SAR(),
            Currency::SBD => new SBD(),
            Currency::SCR => new SCR(),
            Currency::SDG => new SDG(),
            Currency::SEK => new SEK(),
            Currency::SGD => new SGD(),
            Currency::SHP => new SHP(),
            Currency::SLE => new SLE(),
            Currency::SOS => new SOS(),
            Currency::SRD => new SRD(),
            Currency::SSP => new SSP(),
            Currency::STN => new STN(),
            Currency::SYP => new SYP(),
            Currency::SZL => new SZL(),
            Currency::THB => new THB(),
            Currency::TJS => new TJS(),
            Currency::TMT => new TMT(),
            Currency::TND => new TND(),
            Currency::TOP => new TOP(),
            Currency::TRY => new TRY_(),
            Currency::TTD => new TTD(),
            Currency::TWD => new TWD(),
            Currency::TZS => new TZS(),
            Currency::UAH => new UAH(),
            Currency::UGX => new UGX(),
            Currency::UYU => new UYU(),
            Currency::UZS => new UZS(),
            Currency::VES => new VES(),
            Currency::VND => new VND(),
            Currency::VUV => new VUV(),
            Currency::WST => new WST(),
            Currency::XAF => new XAF(),
            Currency::XCD => new XCD(),
            Currency::XOF => new XOF(),
            Currency::XPF => new XPF(),
            Currency::YER => new YER(),
            Currency::ZAR => new ZAR(),
            Currency::ZMW => new ZMW(),
            Currency::ZWG => new ZWG(),
            default => new USD(),
        };
    }

    /**
     * Return a Collection with all the currencies
     *
     * @return Collection
     */
    public static function getAll(): Collection
    {
        return new Collection([
            new AED(),
            new AFN(),
            new ALL(),
            new AMD(),
            new ANG(),
            new AOA(),
            new ARS(),
            new AUD(),
            new AWG(),
            new AZN(),
            new BAM(),
            new BBD(),
            new BDT(),
            new BGN(),
            new BHD(),
            new BIF(),
            new BMD(),
            new BND(),
            new BOB(),
            new BRL(),
            new BSD(),
            new BTC(),
            new BTN(),
            new BWP(),
            new BYN(),
            new BZD(),
            new CAD(),
            new CDF(),
            new CHF(),
            new CLP(),
            new CNY(),
            new COP(),
            new CRC(),
            new CUP(),
            new CVE(),
            new CZK(),
            new DJF(),
            new DKK(),
            new DOP(),
            new DZD(),
            new EGP(),
            new ERN(),
            new ETB(),
            new EUR(),
            new FJD(),
            new FKP(),
            new GBP(),
            new GEL(),
            new GHS(),
            new GIP(),
            new GMD(),
            new GNF(),
            new GTQ(),
            new GYD(),
            new HKD(),
            new HNL(),
            new HTG(),
            new HUF(),
            new IDR(),
            new ILS(),
            new INR(),
            new IQD(),
            new IRR(),
            new ISK(),
            new JMD(),
            new JOD(),
            new JPY(),
            new KES(),
            new KGS(),
            new KHR(),
            new KMF(),
            new KPW(),
            new KRW(),
            new KWD(),
            new KYD(),
            new KZT(),
            new LAK(),
            new LBP(),
            new LKR(),
            new LRD(),
            new LSL(),
            new LYD(),
            new MAD(),
            new MDL(),
            new MGA(),
            new MKD(),
            new MMK(),
            new MNT(),
            new MOP(),
            new MRU(),
            new MUR(),
            new MVR(),
            new MWK(),
            new MXN(),
            new MYR(),
            new MZN(),
            new NAD(),
            new NGN(),
            new NIO(),
            new NOK(),
            new NPR(),
            new NZD(),
            new OMR(),
            new PAB(),
            new PEN(),
            new PGK(),
            new PHP(),
            new PKR(),
            new PLN(),
            new PYG(),
            new QAR(),
            new RON(),
            new RSD(),
            new RUB(),
            new RWF(),
            new SAR(),
            new SBD(),
            new SCR(),
            new SDG(),
            new SEK(),
            new SGD(),
            new SHP(),
            new SLE(),
            new SOS(),
            new SRD(),
            new SSP(),
            new STN(),
            new SYP(),
            new SZL(),
            new THB(),
            new TJS(),
            new TMT(),
            new TND(),
            new TOP(),
            new TRY_(),
            new TTD(),
            new TWD(),
            new TZS(),
            new UAH(),
            new UGX(),
            new USD(),
            new UYU(),
            new UZS(),
            new VES(),
            new VND(),
            new VUV(),
            new WST(),
            new XAF(),
            new XCD(),
            new XOF(),
            new XPF(),
            new YER(),
            new ZAR(),
            new ZMW(),
            new ZWG(),
        ]);
    }
}
