<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;

final class CLP extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('Chilean Peso');
        $this->format->setCode(Currency::CLP);
        $this->format->setSymbol('Ch$');
        $this->format->setShowSymbol(true);
        $this->format->setShowCode(false);
        $this->format->setShowSpace(true);
        $this->format->setShowSymbolOrCodeOnLeft(false);
        $this->format->setShowDecimals(false);
        $this->format->setDecimalSeparator(',');
        $this->format->setThousandsSeparator('.');
        $this->format->setNumberOfDecimals(0);
        $this->format->setDefaultNumberOfDecimals(0);
    }
}
