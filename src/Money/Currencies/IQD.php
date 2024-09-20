<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class IQD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Iraqi Dinar');
        $this->setCode(Currency::IQD);
        $this->setSymbol('ع.د');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(false);
        $this->setShowSymbolOrCodeOnLeft(true);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(3);
        $this->setSubunitLevel(3);
    }
}
