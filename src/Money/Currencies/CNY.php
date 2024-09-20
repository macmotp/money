<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class CNY extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Chinese Yuan - Renminbi');
        $this->setCode(Currency::CNY);
        $this->setSymbol('¥');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(1);
        $this->setSubunitLevel(1);
    }
}
