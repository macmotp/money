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
            'AED' => ['name' => 'United Arab Emirates Dirham', 'symbol' => 'د.إ', 'show_symbol_on_left' => false],
            'ARS' => ['name' => 'Argentine Peso', 'symbol' => 'AR$', 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'AUD' => ['name' => 'Australian Dollar', 'symbol' => 'AU$'],
            'BGN' => ['name' => 'Bulgarian Lev', 'symbol' => 'лв'],
            'BRL' => ['name' => 'Brazilian Real', 'symbol' => 'R$', 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'CAD' => ['name' => 'Canadian Dollar', 'symbol' => 'C$'],
            'CHF' => ['name' => 'Swiss Franc', 'symbol' => 'fr.', 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'CLP' => ['name' => 'Chilean Peso', 'symbol' => '$', 'decimals' => 0],
            'CNY' => ['name' => 'Chinese Yuan', 'symbol' => '¥'],
            'CZK' => ['name' => 'Czech Koruna', 'symbol' => 'Kč', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'DKK' => ['name' => 'Danish Krone', 'symbol' => 'kr.', 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'EUR' => ['name' => 'Euro', 'symbol' => '€', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'GBP' => ['name' => 'British Pound', 'symbol' => '£', 'show_nbsp' => false],
            'HKD' => ['name' => 'Hong Kong Dollar', 'symbol' => 'HK$'],
            'HUF' => ['name' => 'Hungarian Forint', 'symbol' => 'Ft', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'IDR' => ['name' => 'Indonesian Rupiah', 'symbol' => 'Rp', 'decimals' => 0],
            'ILS' => ['name' => 'Israeli New Shekel', 'symbol' => '₪', 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'INR' => ['name' => 'Indian Rupee', 'symbol' => '₹'],
            'JPY' => ['name' => 'Japanese Yen', 'symbol' => '¥', 'decimals' => 0],
            'KRW' => ['name' => 'South Korean Won', 'symbol' => '₩', 'decimals' => 0],
            'MXN' => ['name' => 'Mexican Peso', 'symbol' => 'MX$'],
            'MYR' => ['name' => 'Malaysian Ringgit', 'symbol' => 'RM'],
            'NOK' => ['name' => 'Norwegian Krone', 'symbol' => 'kr'],
            'NZD' => ['name' => 'New Zealand Dollar', 'symbol' => 'NZ$'],
            'PHP' => ['name' => 'Philippine Peso', 'symbol' => '₱'],
            'PLN' => ['name' => 'Polish Złoty', 'symbol' => 'zł', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'RON' => ['name' => 'Romanian Leu', 'symbol' => 'lei', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'RUB' => ['name' => 'Russian Ruble', 'symbol' => '₽', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'SAR' => ['name' => 'Saudi Riyal', 'symbol' => '﷼', 'show_symbol_on_left' => false],
            'SEK' => ['name' => 'Swedish Krona', 'symbol' => 'kr', 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'SGD' => ['name' => 'Singapore Dollar', 'symbol' => 'S$', 'show_nbsp' => false],
            'THB' => ['name' => 'Thai Baht', 'symbol' => '฿', 'show_symbol_on_left' => false],
            'TRY' => ['name' => 'Turkish Lira', 'symbol' => '₺', 'show_symbol_on_left' => false],
            'TWD' => ['name' => 'New Taiwan Dollar', 'symbol' => '元'],
            'UAH' => ['name' => 'Ukrainian Hryvnia', 'symbol' => '₴', 'show_nbsp' => false],
            'USD' => ['name' => 'United States Dollar', 'symbol' => '$', 'show_nbsp' => false],
            'UYU' => ['name' => 'Uruguayan Peso', 'symbol' => '$U', 'show_nbsp' => false],
            'VND' => ['name' => 'Vietnamese Đồng', 'symbol' => '₫', 'decimals' => 0, 'show_symbol_on_left' => false, 'decimal_separator' => ',', 'thousands_separator' => '.'],
            'ZAR' => ['name' => 'South African Rand', 'symbol' => 'R'],
        ]);
    }
}
