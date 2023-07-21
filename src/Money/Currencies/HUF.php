<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class HUF extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Hungarian Forint');
        $this->setCode(Currency::HUF);
        $this->setSymbol('Ft');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator(' ');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}
