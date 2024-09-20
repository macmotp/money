<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class SLE extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Sierra Leonean Leone');
        $this->setCode(Currency::SLE);
        $this->setSymbol('Le');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
