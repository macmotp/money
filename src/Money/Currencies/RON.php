<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class RON extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Romanian Leu');
        $this->setCode(Currency::RON);
        $this->setSymbol('lei');
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
