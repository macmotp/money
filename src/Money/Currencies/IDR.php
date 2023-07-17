<?php

namespace Macmotp\Currencies;

use Macmotp\Currencies\Support\AbstractCurrency;
use Macmotp\Currencies\Support\Format;
use Macmotp\Currency;

final class IDR extends AbstractCurrency implements Currency
{
    public function __construct()
    {
        parent::__construct(new Format());
        $this->format->setName('Indonesian Rupiah');
        $this->format->setCode(Currency::IDR);
        $this->format->setSymbol('Rp');
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
