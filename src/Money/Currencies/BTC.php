<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class BTC extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Bitcoin');
        $this->setCode(Currency::BTC);
        $this->setSymbol('₿');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(8);
        $this->setSubunitLevel(8);
    }
}
