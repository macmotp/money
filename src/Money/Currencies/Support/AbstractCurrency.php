<?php

namespace Macmotp\Currencies\Support;

use Macmotp\Currency;

/**
 * AbstractCurrency abstract class
 */
abstract class AbstractCurrency implements Currency
{
    private string $name;
    private string $code;
    private string $symbol;
    private bool $showSymbol;
    private bool $showCode;
    private bool $showSpace;
    private bool $showSymbolOrCodeOnLeft;
    private bool $showDecimals;
    private string $decimalSeparator;
    private string $thousandsSeparator;
    private int $defaultNumberOfDecimals;
    private int $numberOfDecimals;

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName(string $name): Currency
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     *
     * @return Currency
     */
    public function setCode(string $code): Currency
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Set Symbol
     *
     * @param string $symbol
     *
     * @return Currency
     */
    public function setSymbol(string $symbol): Currency
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Set Show Symbol
     *
     * @param bool $showSymbol
     *
     * @return Currency
     */
    public function setShowSymbol(bool $showSymbol): Currency
    {
        $this->showSymbol = $showSymbol;

        return $this;
    }

    /**
     * Set Show Code
     *
     * @param bool $showCode
     *
     * @return Currency
     */
    public function setShowCode(bool $showCode): Currency
    {
        $this->showCode = $showCode;

        return $this;
    }

    /**
     * Set Show Space
     *
     * @param bool $showSpace
     *
     * @return Currency
     */
    public function setShowSpace(bool $showSpace): Currency
    {
        $this->showSpace = $showSpace;

        return $this;
    }

    /**
     * Set Show Symbol or Code on Left/Right
     * true = left
     * false = right
     *
     * @param bool $showSymbolOrCodeOnLeft
     *
     * @return Currency
     */
    public function setShowSymbolOrCodeOnLeft(bool $showSymbolOrCodeOnLeft): Currency
    {
        $this->showSymbolOrCodeOnLeft = $showSymbolOrCodeOnLeft;

        return $this;
    }

    /**
     * Set Show Decimals
     *
     * @param bool $showDecimals
     *
     * @return Currency
     */
    public function setShowDecimals(bool $showDecimals): Currency
    {
        $this->showDecimals = $showDecimals;

        return $this;
    }

    /**
     * Set Decimal Separator
     *
     * @param string $decimalSeparator
     *
     * @return Currency
     */
    public function setDecimalSeparator(string $decimalSeparator): Currency
    {
        $this->decimalSeparator = $decimalSeparator;

        return $this;
    }

    /**
     * Set Thousands Separator
     *
     * @param string $thousandsSeparator
     *
     * @return Currency
     */
    public function setThousandsSeparator(string $thousandsSeparator): Currency
    {
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    /**
     * Set Number of Decimals
     *
     * @param int $numberOfDecimals
     *
     * @return Currency
     */
    public function setNumberOfDecimals(int $numberOfDecimals): Currency
    {
        $this->numberOfDecimals = $numberOfDecimals;

        return $this;
    }

    /**
     * Set Default Number of Decimals
     *
     * @param int $defaultNumberOfDecimals
     *
     * @return Currency
     */
    public function setDefaultNumberOfDecimals(int $defaultNumberOfDecimals): Currency
    {
        $this->defaultNumberOfDecimals = $defaultNumberOfDecimals;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Get Symbol
     *
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * Get Show Symbol
     *
     * @return bool
     */
    public function getShowSymbol(): bool
    {
        return $this->showSymbol;
    }

    /**
     * Get Show Code
     *
     * @return bool
     */
    public function getShowCode(): bool
    {
        return $this->showCode;
    }

    /**
     * Get Show Space
     *
     * @return bool
     */
    public function getShowSpace(): bool
    {
        return $this->showSpace;
    }

    /**
     * Get Show Symbol/Code On Left
     *
     * @return bool
     */
    public function getShowSymbolOrCodeOnLeft(): bool
    {
        return $this->showSymbolOrCodeOnLeft;
    }

    /**
     * Get Show Decimals
     *
     * @return bool
     */
    public function getShowDecimals(): bool
    {
        return $this->showDecimals;
    }

    /**
     * Get Decimal Separator Character
     *
     * @return string
     */
    public function getDecimalSeparator(): string
    {
        return $this->decimalSeparator;
    }

    /**
     * Get Thousands Separator Character
     *
     * @return string
     */
    public function getThousandsSeparator(): string
    {
        return $this->thousandsSeparator;
    }

    /**
     * Get the default number of Decimals
     *
     * @return int
     */
    public function getDefaultNumberOfDecimals(): int
    {
        return $this->defaultNumberOfDecimals;
    }

    /**
     * Get number of Decimals
     *
     * @return int
     */
    public function getNumberOfDecimals(): int
    {
        return $this->numberOfDecimals;
    }
}
