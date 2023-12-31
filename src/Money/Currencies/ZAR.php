<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class ZAR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('South African Rand');
        $this->setCode(Currency::ZAR);
        $this->setSymbol('R');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(0);
        $this->setDefaultNumberOfDecimals(0);
    }
}
