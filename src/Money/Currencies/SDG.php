<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class SDG extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Sudanese Pound');
        $this->setCode(Currency::SDG);
        $this->setSymbol('ج.س');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
