<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class VND extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Vietnamese Đồng');
        $this->setCode(Currency::VND);
        $this->setSymbol('₫');
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
