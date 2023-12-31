<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class USD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('United States Dollar');
        $this->setCode('USD');
        $this->setSymbol('$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}
