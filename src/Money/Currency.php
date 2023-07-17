<?php

namespace Macmotp;

use Macmotp\Currencies\Support\Format;

/**
 * Class Currency
 *
 * All currencies are adopting ISO 4217 standard
 * https://en.wikipedia.org/wiki/ISO_4217#List_of_ISO_4217_currency_codes
 */
interface Currency
{
    public const AED = 'AED';
    public const ARS = 'ARS';
    public const AUD = 'AUD';
    public const BGN = 'BGN';
    public const BRL = 'BRL';
    public const CAD = 'CAD';
    public const CHF = 'CHF';
    public const CLP = 'CLP';
    public const CNY = 'CNY';
    public const CZK = 'CZK';
    public const DKK = 'DKK';
    public const EUR = 'EUR';
    public const GBP = 'GBP';
    public const HKD = 'HKD';
    public const HUF = 'HUF';
    public const IDR = 'IDR';
    public const ILS = 'ILS';
    public const INR = 'INR';
    public const JPY = 'JPY';
    public const KRW = 'KRW';
    public const MXN = 'MXN';
    public const MYR = 'MYR';
    public const NOK = 'NOK';
    public const NZD = 'NZD';
    public const PHP = 'PHP';
    public const PLN = 'PLN';
    public const RON = 'RON';
    public const RUB = 'RUB';
    public const SAR = 'SAR';
    public const SEK = 'SEK';
    public const SGD = 'SGD';
    public const THB = 'THB';
    public const TRY = 'TRY';
    public const TWD = 'TWD';
    public const UAH = 'UAH';
    public const USD = 'USD';
    public const UYU = 'UYU';
    public const VND = 'VND';
    public const ZAR = 'ZAR';

    public function getFormat(): Format;
}
