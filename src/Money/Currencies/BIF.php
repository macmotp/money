<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BIF extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Burundian Franc');
        $this->setCode(Currency::BIF);
        $this->setSymbol('FBu');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(0);
        $this->setSubunitLevel(0);
    }
}
