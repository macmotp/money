<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class DKK extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Danish Krone');
        $this->setCode(Currency::DKK);
        $this->setSymbol('kr.');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
