<?php

namespace Macmotp;

/**
 * Class Currency
 *
 * All currencies are adopting ISO 4217 standard
 * https://en.wikipedia.org/wiki/ISO_4217#List_of_ISO_4217_currency_codes
 */
interface Currency
{
    public const AED = 'AED';
    public const AFN = 'AFN';
    public const ALL = 'ALL';
    public const AMD = 'AMD';
    public const ANG = 'ANG';
    public const AOA = 'AOA';
    public const ARS = 'ARS';
    public const AUD = 'AUD';
    public const AWG = 'AWG';
    public const AZN = 'AZN';
    public const BAM = 'BAM';
    public const BBD = 'BBD';
    public const BDT = 'BDT';
    public const BGN = 'BGN';
    public const BHD = 'BHD';
    public const BIF = 'BIF';
    public const BMD = 'BMD';
    public const BND = 'BND';
    public const BOB = 'BOB';
    public const BRL = 'BRL';
    public const BSD = 'BSD';
    public const BTN = 'BTN';
    public const BWP = 'BWP';
    public const BYN = 'BYN';
    public const BZD = 'BZD';
    public const CAD = 'CAD';
    public const CDF = 'CDF';
    public const CHF = 'CHF';
    public const CLP = 'CLP';
    public const CNY = 'CNY';
    public const COP = 'COP';
    public const CRC = 'CRC';
    public const CUP = 'CUP';
    public const CVE = 'CVE';
    public const CZK = 'CZK';
    public const DJF = 'DJF';
    public const DKK = 'DKK';
    public const DOP = 'DOP';
    public const DZD = 'DZD';
    public const EGP = 'EGP';
    public const ERN = 'ERN';
    public const ETB = 'ETB';
    public const EUR = 'EUR';
    public const FJD = 'FJD';
    public const FKP = 'FKP';
    public const GBP = 'GBP';
    public const GEL = 'GEL';
    public const GHS = 'GHS';
    public const GIP = 'GIP';
    public const GMD = 'GMD';
    public const GNF = 'GNF';
    public const GTQ = 'GTQ';
    public const GYD = 'GYD';
    public const HKD = 'HKD';
    public const HNL = 'HNL';
    public const HTG = 'HTG';
    public const HUF = 'HUF';
    public const IDR = 'IDR';
    public const ILS = 'ILS';
    public const INR = 'INR';
    public const IQD = 'IQD';
    public const IRR = 'IRR';
    public const ISK = 'ISK';
    public const JMD = 'JMD';
    public const JOD = 'JOD';
    public const JPY = 'JPY';
    public const KES = 'KES';
    public const KGS = 'KGS';
    public const KHR = 'KHR';
    public const KMF = 'KMF';
    public const KPW = 'KPW';
    public const KRW = 'KRW';
    public const KWD = 'KWD';
    public const KYD = 'KYD';
    public const KZT = 'KZT';
    public const LAK = 'LAK';
    public const LBP = 'LBP';
    public const LKR = 'LKR';
    public const LRD = 'LRD';
    public const LSL = 'LSL';
    public const LYD = 'LYD';
    public const MAD = 'MAD';
    public const MDL = 'MDL';
    public const MGA = 'MGA';
    public const MKD = 'MKD';
    public const MMK = 'MMK';
    public const MNT = 'MNT';
    public const MOP = 'MOP';
    public const MRU = 'MRU';
    public const MUR = 'MUR';
    public const MVR = 'MVR';
    public const MWK = 'MWK';
    public const MXN = 'MXN';
    public const MYR = 'MYR';
    public const MZN = 'MZN';
    public const NAD = 'NAD';
    public const NGN = 'NGN';
    public const NIO = 'NIO';
    public const NOK = 'NOK';
    public const NPR = 'NPR';
    public const NZD = 'NZD';
    public const OMR = 'OMR';
    public const PAB = 'PAB';
    public const PEN = 'PEN';
    public const PGK = 'PGK';
    public const PHP = 'PHP';
    public const PKR = 'PKR';
    public const PLN = 'PLN';
    public const PYG = 'PYG';
    public const QAR = 'QAR';
    public const RON = 'RON';
    public const RSD = 'RSD';
    public const RUB = 'RUB';
    public const RWF = 'RWF';
    public const SAR = 'SAR';
    public const SBD = 'SBD';
    public const SCR = 'SCR';
    public const SDG = 'SDG';
    public const SEK = 'SEK';
    public const SGD = 'SGD';
    public const SHP = 'SHP';
    public const SLE = 'SLE';
    public const SOS = 'SOS';
    public const SRD = 'SRD';
    public const SSP = 'SSP';
    public const STN = 'STN';
    public const SVC = 'SVC';
    public const SYP = 'SYP';
    public const SZL = 'SZL';
    public const THB = 'THB';
    public const TJS = 'TJS';
    public const TMT = 'TMT';
    public const TND = 'TND';
    public const TOP = 'TOP';
    public const TRY = 'TRY';
    public const TTD = 'TTD';
    public const TWD = 'TWD';
    public const TZS = 'TZS';
    public const UAH = 'UAH';
    public const UGX = 'UGX';
    public const USD = 'USD';
    public const UYU = 'UYU';
    public const UZS = 'UZS';
    public const VES = 'VES';
    public const VND = 'VND';
    public const VUV = 'VUV';
    public const WST = 'WST';
    public const XAF = 'XAF';
    public const XCD = 'XCD';
    public const XOF = 'XOF';
    public const XPF = 'XPF';
    public const YER = 'YER';
    public const ZAR = 'ZAR';
    public const ZMW = 'ZMW';
    public const ZWG = 'ZWG';

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName(string $name): Currency;

    /**
     * Set Code
     *
     * @param string $code
     *
     * @return Currency
     */
    public function setCode(string $code): Currency;

    /**
     * Set Symbol
     *
     * @param string $symbol
     *
     * @return Currency
     */
    public function setSymbol(string $symbol): Currency;

    /**
     * Set Show Symbol
     *
     * @param bool $showSymbol
     *
     * @return Currency
     */
    public function setShowSymbol(bool $showSymbol): Currency;

    /**
     * Set Show Code
     *
     * @param bool $showCode
     *
     * @return Currency
     */
    public function setShowCode(bool $showCode): Currency;

    /**
     * Set Show Space
     *
     * @param bool $showSpace
     *
     * @return Currency
     */
    public function setShowSpace(bool $showSpace): Currency;

    /**
     * Set Show Symbol or Code on Left/Right
     * true = left
     * false = right
     *
     * @param bool $showSymbolOrCodeOnLeft
     *
     * @return Currency
     */
    public function setShowSymbolOrCodeOnLeft(bool $showSymbolOrCodeOnLeft): Currency;

    /**
     * Set Show Decimals
     *
     * @param bool $showDecimals
     *
     * @return Currency
     */
    public function setShowDecimals(bool $showDecimals): Currency;

    /**
     * Set Decimal Separator
     *
     * @param string $decimalSeparator
     *
     * @return Currency
     */
    public function setDecimalSeparator(string $decimalSeparator): Currency;

    /**
     * Set Thousands Separator
     *
     * @param string $thousandsSeparator
     *
     * @return Currency
     */
    public function setThousandsSeparator(string $thousandsSeparator): Currency;

    /**
     * Set Number of Decimals
     *
     * @param int $numberOfDecimals
     *
     * @return Currency
     */
    public function setNumberOfDecimals(int $numberOfDecimals): Currency;

    /**
     * Set Default Number of Decimals
     *
     * @param int $defaultNumberOfDecimals
     *
     * @return Currency
     */
    public function setDefaultNumberOfDecimals(int $defaultNumberOfDecimals): Currency;

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Get Symbol
     *
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Get Show Symbol
     *
     * @return bool
     */
    public function getShowSymbol(): bool;

    /**
     * Get Show Code
     *
     * @return bool
     */
    public function getShowCode(): bool;

    /**
     * Get Show Space
     *
     * @return bool
     */
    public function getShowSpace(): bool;

    /**
     * Get Show Symbol/Code On Left
     *
     * @return bool
     */
    public function getShowSymbolOrCodeOnLeft(): bool;

    /**
     * Get Show Decimals
     *
     * @return bool
     */
    public function getShowDecimals(): bool;

    /**
     * Get Decimal Separator Character
     *
     * @return string
     */
    public function getDecimalSeparator(): string;

    /**
     * Get Thousands Separator Character
     *
     * @return string
     */
    public function getThousandsSeparator(): string;

    /**
     * Get the default number of Decimals
     *
     * @return int
     */
    public function getDefaultNumberOfDecimals(): int;

    /**
     * Get number of Decimals
     *
     * @return int
     */
    public function getNumberOfDecimals(): int;
}
