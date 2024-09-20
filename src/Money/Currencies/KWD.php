<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class KWD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Kuwaiti Dinar');
        $this->setCode(Currency::KWD);
        $this->setSymbol('د.ك');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(3);
        $this->setSubunitLevel(3);
    }
}
