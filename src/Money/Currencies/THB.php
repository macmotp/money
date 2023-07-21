<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class THB extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Thai Baht');
        $this->setCode(Currency::THB);
        $this->setSymbol('฿');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}
