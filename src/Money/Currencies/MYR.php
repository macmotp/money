<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;

final class MYR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('United Arab Emirates Dirham');
        $this->format->setCode('AED');
        $this->format->setSymbol('د.إ');
        $this->format->setShowSymbol(true);
        $this->format->setShowCode(false);
        $this->format->setShowSpace(false);
        $this->format->setShowSymbolOrCodeOnLeft(true);
        $this->format->setShowDecimals(true);
        $this->format->setDecimalSeparator(',');
        $this->format->setThousandsSeparator('.');
        $this->format->setNumberOfDecimals(2);
        $this->format->setDefaultNumberOfDecimals(2);
    }
}
