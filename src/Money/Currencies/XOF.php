<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class XOF extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('West African CFA Franc');
        $this->setCode(Currency::XOF);
        $this->setSymbol('F.CFA');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator(' ');
        $this->setNumberOfDecimals(0);
        $this->setSubunitLevel(0);
    }
}
