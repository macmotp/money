<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;

final class DKK extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('Danish Krone');
        $this->format->setCode(Currency::DKK);
        $this->format->setSymbol('kr.');
        $this->format->setShowSymbol(true);
        $this->format->setShowCode(false);
        $this->format->setShowSpace(true);
        $this->format->setShowSymbolOrCodeOnLeft(false);
        $this->format->setShowDecimals(true);
        $this->format->setDecimalSeparator(',');
        $this->format->setThousandsSeparator('.');
        $this->format->setNumberOfDecimals(2);
        $this->format->setDefaultNumberOfDecimals(2);
    }
}
