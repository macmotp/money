<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BGN extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Bulgarian Lev');
        $this->setCode(Currency::BGN);
        $this->setSymbol('лев');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}
