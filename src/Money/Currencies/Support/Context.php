<?php

namespace Macmotp\Currencies\Support;

use Illuminate\Support\Collection;
use Macmotp\Currencies\AED;
use Macmotp\Currencies\ARS;
use Macmotp\Currencies\AUD;
use Macmotp\Currencies\BGN;
use Macmotp\Currencies\BRL;
use Macmotp\Currencies\CAD;
use Macmotp\Currencies\CHF;
use Macmotp\Currencies\CLP;
use Macmotp\Currencies\CNY;
use Macmotp\Currencies\CZK;
use Macmotp\Currencies\DKK;
use Macmotp\Currencies\EUR;
use Macmotp\Currencies\GBP;
use Macmotp\Currencies\HKD;
use Macmotp\Currencies\HUF;
use Macmotp\Currencies\IDR;
use Macmotp\Currencies\ILS;
use Macmotp\Currencies\INR;
use Macmotp\Currencies\JPY;
use Macmotp\Currencies\KRW;
use Macmotp\Currencies\MXN;
use Macmotp\Currencies\MYR;
use Macmotp\Currencies\NOK;
use Macmotp\Currencies\NZD;
use Macmotp\Currencies\PHP;
use Macmotp\Currencies\PLN;
use Macmotp\Currencies\RON;
use Macmotp\Currencies\RUB;
use Macmotp\Currencies\SAR;
use Macmotp\Currencies\SEK;
use Macmotp\Currencies\SGD;
use Macmotp\Currencies\THB;
use Macmotp\Currencies\TRY_;
use Macmotp\Currencies\TWD;
use Macmotp\Currencies\UAH;
use Macmotp\Currencies\USD;
use Macmotp\Currencies\UYU;
use Macmotp\Currencies\VND;
use Macmotp\Currencies\ZAR;
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
            Currency::ARS => new ARS(),
            Currency::AUD => new AUD(),
            Currency::BGN => new BGN(),
            Currency::BRL => new BRL(),
            Currency::CAD => new CAD(),
            Currency::CHF => new CHF(),
            Currency::CLP => new CLP(),
            Currency::CNY => new CNY(),
            Currency::CZK => new CZK(),
            Currency::DKK => new DKK(),
            Currency::EUR => new EUR(),
            Currency::GBP => new GBP(),
            Currency::HKD => new HKD(),
            Currency::HUF => new HUF(),
            Currency::IDR => new IDR(),
            Currency::ILS => new ILS(),
            Currency::INR => new INR(),
            Currency::JPY => new JPY(),
            Currency::KRW => new KRW(),
            Currency::MXN => new MXN(),
            Currency::MYR => new MYR(),
            Currency::NOK => new NOK(),
            Currency::NZD => new NZD(),
            Currency::PHP => new PHP(),
            Currency::PLN => new PLN(),
            Currency::RON => new RON(),
            Currency::RUB => new RUB(),
            Currency::SAR => new SAR(),
            Currency::SEK => new SEK(),
            Currency::SGD => new SGD(),
            Currency::THB => new THB(),
            Currency::TRY => new TRY_(),
            Currency::TWD => new TWD(),
            Currency::UAH => new UAH(),
            Currency::UYU => new UYU(),
            Currency::VND => new VND(),
            Currency::ZAR => new ZAR(),
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
            new ARS(),
            new AUD(),
            new BGN(),
            new BRL(),
            new CAD(),
            new CHF(),
            new CLP(),
            new CNY(),
            new CZK(),
            new DKK(),
            new EUR(),
            new GBP(),
            new HKD(),
            new HUF(),
            new IDR(),
            new ILS(),
            new INR(),
            new JPY(),
            new KRW(),
            new MXN(),
            new MYR(),
            new NOK(),
            new NZD(),
            new PHP(),
            new PLN(),
            new RON(),
            new RUB(),
            new SAR(),
            new SEK(),
            new SGD(),
            new THB(),
            new TRY_(),
            new TWD(),
            new UAH(),
            new USD(),
            new UYU(),
            new VND(),
            new ZAR(),
        ]);
    }
}
