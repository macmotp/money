<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class XAF extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Central African CFA Franc');
        $this->setCode(Currency::XAF);
        $this->setSymbol('F.CFA');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(0);
        $this->setDefaultNumberOfDecimals(0);
    }
}
