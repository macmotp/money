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
