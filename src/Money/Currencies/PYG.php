<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class PYG extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Paraguayan Guaraní');
        $this->setCode(Currency::PYG);
        $this->setSymbol('₲');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(0);
        $this->setSubunitLevel(0);
    }
}
