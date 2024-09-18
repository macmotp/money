<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class COP extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Colombian Peso');
        $this->setCode(Currency::COP);
        $this->setSymbol('$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}