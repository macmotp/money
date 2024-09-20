<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currency;

final class MRU extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        $this->setName('Mauritanian Ouguiya');
        $this->setCode(Currency::MRU);
        $this->setSymbol('UM');
        $this->setShowSymbol(true);
        $this->setShowCode(false);
        $this->setShowSpace(true);
        $this->setShowSymbolOrCodeOnLeft(false);
        $this->setShowDecimals(false);
        $this->setDecimalSeparator('.');
        $this->setThousandsSeparator(',');
        $this->setNumberOfDecimals(2);
        $this->setSubunitLevel(2);
    }
}
