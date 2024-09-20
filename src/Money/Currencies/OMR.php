<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class OMR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Omani Rial');
        $this->setCode(Currency::OMR);
        $this->setSymbol('.ر.ع');
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
