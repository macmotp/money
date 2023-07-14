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
}
