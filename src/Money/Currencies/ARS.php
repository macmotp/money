<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class ARS extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Argentine Peso');
        $this->setCode(Currency::ARS);
        $this->setSymbol('Arg$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
