<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class IDR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Indonesian Rupiah');
        $this->setCode(Currency::IDR);
        $this->setSymbol('Rp');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
