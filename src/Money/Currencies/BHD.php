<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BHD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Bahraini Dinar');
        $this->setCode(Currency::BHD);
        $this->setSymbol('BD');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(3);
        $this->setDefaultNumberOfDecimals(3);
    }
}
