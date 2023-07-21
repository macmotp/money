<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class CLP extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Chilean Peso');
        $this->setCode(Currency::CLP);
        $this->setSymbol('Ch$');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(0);
        $this->setDefaultNumberOfDecimals(0);
    }
}
