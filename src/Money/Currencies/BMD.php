<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BMD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Bermudian Dollar');
        $this->setCode(Currency::BMD);
        $this->setSymbol('$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
