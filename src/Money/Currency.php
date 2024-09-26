<?php

namespace Macmotp;

/**
 * Interface Currency
 *
 * All currencies are adopting ISO 4217 standard
 * https://en.wikipedia.org/wiki/ISO_4217#List_of_ISO_4217_currency_codes
 *
 * Updated on September 2024
 */
interface Currency
{
    // List of Currency Codes
    public const AED = 'AED'; // United Arab Emirates Dirham
    public const AFN = 'AFN'; // Afghan Afghani
    public const ALL = 'ALL'; // Albanian Lek
    public const AMD = 'AMD'; // Armenian Dram
    public const ANG = 'ANG'; // Netherlands Antillean Guilder
    public const AOA = 'AOA'; // Angolan Kwanza
    public const ARS = 'ARS'; // Argentine Peso
    public const AUD = 'AUD'; // Australian Dollar
    public const AWG = 'AWG'; // Aruban Florin
    public const AZN = 'AZN'; // Azerbaijani Manat
    public const BAM = 'BAM'; // Bosnia and Herzegovina Convertible Mark
    public const BBD = 'BBD'; // Barbados Dollar
    public const BDT = 'BDT'; // Bangladeshi Taka
    public const BGN = 'BGN'; // Bulgarian Lev
    public const BHD = 'BHD'; // Bahraini Dinar
    public const BIF = 'BIF'; // Burundian Franc
    public const BMD = 'BMD'; // Bermudian Dollar
    public const BND = 'BND'; // Brunei Dollar
    public const BOB = 'BOB'; // Bolivian Boliviano
    public const BRL = 'BRL'; // Brazilian Real
    public const BSD = 'BSD'; // Bahamian Dollar
    public const BTC = 'BTC'; // Bitcoin
    public const BTN = 'BTN'; // Bhutanese Ngultrum
    public const BWP = 'BWP'; // Botswana Pula
    public const BYN = 'BYN'; // Belarusian Ruble
    public const BZD = 'BZD'; // Belize Dollar
    public const CAD = 'CAD'; // Canadian Dollar
    public const CDF = 'CDF'; // Congolese Franc
    public const CHF = 'CHF'; // Swiss Franc
    public const CLP = 'CLP'; // Chilean Peso
    public const CNY = 'CNY'; // Chinese Yuan - Renminbi
    public const COP = 'COP'; // Colombian Peso
    public const CRC = 'CRC'; // Costa Rican Colón
    public const CUP = 'CUP'; // Cuban Peso
    public const CVE = 'CVE'; // Cape Verdean Escudo
    public const CZK = 'CZK'; // Czech Koruna
    public const DJF = 'DJF'; // Djiboutian Franc
    public const DKK = 'DKK'; // Danish Krone
    public const DOP = 'DOP'; // Dominican Peso
    public const DZD = 'DZD'; // Algerian Dinar
    public const EGP = 'EGP'; // Egyptian Pound
    public const ERN = 'ERN'; // Eritrean Nakfa
    public const ETB = 'ETB'; // Ethiopian Birr
    public const EUR = 'EUR'; // Euro
    public const FJD = 'FJD'; // Fijian Dollar
    public const FKP = 'FKP'; // Falkland Islands Pound
    public const GBP = 'GBP'; // British Pound
    public const GEL = 'GEL'; // Georgian Lari
    public const GHS = 'GHS'; // Ghanaian Cedi
    public const GIP = 'GIP'; // Gibraltar Pound
    public const GMD = 'GMD'; // Gambian Dalasi
    public const GNF = 'GNF'; // Guinean Franc
    public const GTQ = 'GTQ'; // Guatemalan Quetzal
    public const GYD = 'GYD'; // Guyanese Dollar
    public const HKD = 'HKD'; // Hong Kong Dollar
    public const HNL = 'HNL'; // Honduran Lempira
    public const HTG = 'HTG'; // Haitian Gourde
    public const HUF = 'HUF'; // Hungarian Forint
    public const IDR = 'IDR'; // Indonesian Rupiah
    public const ILS = 'ILS'; // Israeli New Shekel
    public const INR = 'INR'; // Indian Rupee
    public const IQD = 'IQD'; // Iraqi Dinar
    public const IRR = 'IRR'; // Iranian Rial
    public const ISK = 'ISK'; // Icelandic Króna
    public const JMD = 'JMD'; // Jamaican Dollar
    public const JOD = 'JOD'; // Jordanian Dinar
    public const JPY = 'JPY'; // Japanese Yen
    public const KES = 'KES'; // Kenyan Shilling
    public const KGS = 'KGS'; // Kyrgyz Som
    public const KHR = 'KHR'; // Cambodian Riel
    public const KMF = 'KMF'; // Comorian Franc
    public const KPW = 'KPW'; // North Korean Won
    public const KRW = 'KRW'; // South Korean Won
    public const KWD = 'KWD'; // Kuwaiti Dinar
    public const KYD = 'KYD'; // Cayman Islands Dollar
    public const KZT = 'KZT'; // Kazakhstani Tenge
    public const LAK = 'LAK'; // Lao Kip
    public const LBP = 'LBP'; // Lebanese Pound
    public const LKR = 'LKR'; // Sri Lankan Rupee
    public const LRD = 'LRD'; // Liberian Dollar
    public const LSL = 'LSL'; // Lesotho Loti
    public const LYD = 'LYD'; // Libyan Dinar
    public const MAD = 'MAD'; // Moroccan Dirham
    public const MDL = 'MDL'; // Moldovan Leu
    public const MGA = 'MGA'; // Malagasy Ariary
    public const MKD = 'MKD'; // Macedonian Denar
    public const MMK = 'MMK'; // Burmese Kyat
    public const MNT = 'MNT'; // Mongolian Tögrög
    public const MOP = 'MOP'; // Macanese Pataca
    public const MRU = 'MRU'; // Mauritanian Ouguiya
    public const MUR = 'MUR'; // Mauritian Rupee
    public const MVR = 'MVR'; // Maldivian Rufiyaa
    public const MWK = 'MWK'; // Malawian Kwacha
    public const MXN = 'MXN'; // Mexican Peso
    public const MYR = 'MYR'; // Malaysian Ringgit
    public const MZN = 'MZN'; // Mozambican Metical
    public const NAD = 'NAD'; // Namibian Dollar
    public const NGN = 'NGN'; // Nigerian Naira
    public const NIO = 'NIO'; // Nicaraguan Córdoba
    public const NOK = 'NOK'; // Norwegian Krone
    public const NPR = 'NPR'; // Nepalese Rupee
    public const NZD = 'NZD'; // New Zealand Dollar
    public const OMR = 'OMR'; // Omani Rial
    public const PAB = 'PAB'; // Panamanian Balboa
    public const PEN = 'PEN'; // Peruvian Sol
    public const PGK = 'PGK'; // Papua New Guinean Kina
    public const PHP = 'PHP'; // Philippine Peso
    public const PKR = 'PKR'; // Pakistani Rupee
    public const PLN = 'PLN'; // Polish Złoty
    public const PYG = 'PYG'; // Paraguayan Guaraní
    public const QAR = 'QAR'; // Qatari Riyal
    public const RON = 'RON'; // Romanian Leu
    public const RSD = 'RSD'; // Serbian Dinar
    public const RUB = 'RUB'; // Russian Ruble
    public const RWF = 'RWF'; // Rwandan Franc
    public const SAR = 'SAR'; // Saudi Riyal
    public const SBD = 'SBD'; // Solomon Islands Dollar
    public const SCR = 'SCR'; // Seychellois Rupee
    public const SDG = 'SDG'; // Sudanese Pound
    public const SEK = 'SEK'; // Swedish Krona
    public const SGD = 'SGD'; // Singapore Dollar
    public const SHP = 'SHP'; // Saint Helena Pound
    public const SLE = 'SLE'; // Sierra Leonean Leone
    public const SOS = 'SOS'; // Somali Shilling
    public const SRD = 'SRD'; // Surinamese Dollar
    public const SSP = 'SSP'; // South Sudanese Pound
    public const STN = 'STN'; // São Tomé and Príncipe Dobra
    public const SYP = 'SYP'; // Syrian Pound
    public const SZL = 'SZL'; // Swazi Lilangeni
    public const THB = 'THB'; // Thai Baht
    public const TJS = 'TJS'; // Tajikistani Somoni
    public const TMT = 'TMT'; // Turkmenistani Manat
    public const TND = 'TND'; // Tunisian Dinar
    public const TOP = 'TOP'; // Tongan Paʻanga
    public const TRY = 'TRY'; // Turkish Lira
    public const TTD = 'TTD'; // Trinidad and Tobago Dollar
    public const TWD = 'TWD'; // New Taiwan Dollar
    public const TZS = 'TZS'; // Tanzanian Shilling
    public const UAH = 'UAH'; // Ukrainian Hryvnia
    public const UGX = 'UGX'; // Ugandan Shilling
    public const USD = 'USD'; // United States Dollar
    public const UYU = 'UYU'; // Uruguayan Peso
    public const UZS = 'UZS'; // Uzbekistani Sum
    public const VES = 'VES'; // Venezuelan Sovereign Bolívar
    public const VND = 'VND'; // Vietnamese Đồng
    public const VUV = 'VUV'; // Vanuatu Vatu
    public const WST = 'WST'; // Samoan Tālā
    public const XAF = 'XAF'; // Central African CFA Franc
    public const XCD = 'XCD'; // Eastern Caribbean Dollar
    public const XOF = 'XOF'; // West African CFA Franc
    public const XPF = 'XPF'; // CFP Franc
    public const YER = 'YER'; // Yemeni Rial
    public const ZAR = 'ZAR'; // South African Rand
    public const ZMW = 'ZMW'; // Zambian Kwacha
    public const ZWG = 'ZWG'; // Zimbabwe Gold

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
     * Set Subunit Level
     *
     * @param int $subunitLevel
     *
     * @return Currency
     */
    public function setSubunitLevel(int $subunitLevel): Currency;

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
     * Get the Subunit Level
     *
     * @return int
     */
    public function getSubunitLevel(): int;

    /**
     * Get number of Decimals
     *
     * @return int
     */
    public function getNumberOfDecimals(): int;

    /**
     * Convert the currency into array
     *
     * @return array
     */
    public function toArray(): array;
}
