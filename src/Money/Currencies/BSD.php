<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BSD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Bahamian Dollar');
        $this->setCode(Currency::BSD);
        $this->setSymbol('B$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
