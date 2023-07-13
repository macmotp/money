<?php

namespace Macmotp\Currencies\Support;

use Macmotp\Currencies\EUR;
use Macmotp\Currencies\USD;
use Macmotp\Currency;

/**
 * Context class
 *
 * Mapping each currency code with related implementation
 */
class Context
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
            Currency::EUR => new EUR(),
            default => new USD(),
        };
    }
}
