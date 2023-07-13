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
    public const EUR = 'EUR';
    public const USD = 'USD';

    public function getFormat(): Format;

    //    /**
    //     * Get Currency Name
    //     *
    //     * @return string
    //     */
    //    public function getName(): string;
    //
    //    /**
    //     * Get Currency Code
    //     *
    //     * @return string
    //     */
    //    public function getCode(): string;
    //
    //    /**
    //     * Get Currency Numeric Code
    //     *
    //     * @return int
    //     */
    //    public function getNumericCode(): int;
    //
    //    /**
    //     * Get Currency Symbol
    //     *
    //     * @return string
    //     */
    //    public function getSymbol(): string;
    //
    //    /**
    //     * Check if Currency prints with space
    //     *
    //     * @return bool
    //     */
    //    public function showSpace(): bool;
    //
    //    /**
    //     * Check if Currency prints with symbol on left
    //     *
    //     * @return bool
    //     */
    //    public function showSymbolOnLeft(): bool;
    //
    //    /**
    //     * Get Decimal Separator Character
    //     *
    //     * @return string
    //     */
    //    public function getDecimalSeparator(): string;
    //
    //    /**
    //     * Get Thousands Separator Character
    //     *
    //     * @return string
    //     */
    //    public function getThousandsSeparator(): string;
    //
    //    /**
    //     * Get number of Decimals
    //     *
    //     * @return int
    //     */
    //    public function getNumberOfDecimals(): int;
}
