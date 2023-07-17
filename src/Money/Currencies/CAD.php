<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;

final class CAD extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('Canadian Dollar');
        $this->format->setCode(Currency::CAD);
        $this->format->setSymbol('C$');
        $this->format->setShowSymbol(true);
        $this->format->setShowCode(false);
        $this->format->setShowSpace(true);
        $this->format->setShowSymbolOrCodeOnLeft(false);
        $this->format->setShowDecimals(true);
        $this->format->setDecimalSeparator('.');
        $this->format->setThousandsSeparator(' ');
        $this->format->setNumberOfDecimals(2);
        $this->format->setDefaultNumberOfDecimals(2);
    }
}
