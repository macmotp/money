<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class LYD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Libyan Dinar');
        $this->setCode(Currency::LYD);
        $this->setSymbol('ل.د');
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
