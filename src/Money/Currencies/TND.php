<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class TND extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Tunisian Dinar');
        $this->setCode(Currency::TND);
        $this->setSymbol('DT');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(3);
        $this->setDefaultNumberOfDecimals(3);
    }
}
