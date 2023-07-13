<?php

namespace Macmotp\Currencies\Support;

/**
 * AbstractCurrency abstract class
 */
abstract class AbstractCurrency
{
    /**
     * @param Format $format
     */
    public function __construct(protected Format $format)
    {}

    /**
     * Get the Currency Formatting Rules
     *
     * @return Format
     */
    public function getFormat(): Format
    {
        return $this->format;
    }
}
