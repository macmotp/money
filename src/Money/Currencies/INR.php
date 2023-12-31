<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class INR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Indian Rupee');
        $this->setCode(Currency::INR);
        $this->setSymbol('₹');
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
