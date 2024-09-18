<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class MWK extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Malawian Kwacha');
        $this->setCode(Currency::MWK);
        $this->setSymbol('K');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(true);
        $this->setDecimalSeparator(',');
        $this->setThousandsSeparator('.');
        $this->setNumberOfDecimals(2);
        $this->setDefaultNumberOfDecimals(2);
    }
}
