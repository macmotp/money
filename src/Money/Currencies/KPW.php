<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class KPW extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('North Korean Won');
        $this->setCode(Currency::KPW);
        $this->setSymbol('₩');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
