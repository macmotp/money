<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class KRW extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('South Korean Won');
        $this->setCode(Currency::KRW);
        $this->setSymbol('₩');
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
