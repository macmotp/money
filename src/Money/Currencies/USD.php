<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;
use Macmotp\Currencies\Support\AbstractCurrency;

class USD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('United States Dollar');
        $this->format->setCode('USD');
        $this->format->setNumericCode(840);
        $this->format->setSymbol('$');
        $this->format->setShowSymbol(true);
        $this->format->setShowCode(false);
        $this->format->setShowSpace(false);
        $this->format->setShowSymbolOrCodeOnLeft(false);
        $this->format->setShowDecimals(true);
        $this->format->setDecimalSeparator('.');
        $this->format->setThousandsSeparator(',');
        $this->format->setNumberOfDecimals(2);
        $this->format->setDefaultNumberOfDecimals(2);
    }
}
