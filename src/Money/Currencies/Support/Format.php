<?php

namespace Macmotp\Currencies\Support;

/**
 * Format class
 */
class Format
{
    private string $name;
    private string $code;
    private int $numericCode;
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
     * @return Format
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Code
     *
     * @param string $code
     *
     * @return Format
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Set Numeric Code
     *
     * @param int $numericCode
     *
     * @return Format
     */
    public function setNumericCode(int $numericCode): self
    {
        $this->numericCode = $numericCode;

        return $this;
    }

    /**
     * Set Symbol
     *
     * @param string $symbol
     *
     * @return Format
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Set Show Symbol
     *
     * @param bool $showSymbol
     *
     * @return Format
     */
    public function setShowSymbol(bool $showSymbol): self
    {
        $this->showSymbol = $showSymbol;

        return $this;
    }

    /**
     * Set Show Code
     *
     * @param bool $showCode
     *
     * @return Format
     */
    public function setShowCode(bool $showCode): self
    {
        $this->showCode = $showCode;

        return $this;
    }

    /**
     * Set Show Space
     *
     * @param bool $showSpace
     *
     * @return Format
     */
    public function setShowSpace(bool $showSpace): self
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
     * @return Format
     */
    public function setShowSymbolOrCodeOnLeft(bool $showSymbolOrCodeOnLeft): self
    {
        $this->showSymbolOrCodeOnLeft = $showSymbolOrCodeOnLeft;

        return $this;
    }

    /**
     * Set Show Decimals
     *
     * @param bool $showDecimals
     *
     * @return Format
     */
    public function setShowDecimals(bool $showDecimals): self
    {
        $this->showDecimals = $showDecimals;

        return $this;
    }

    /**
     * Set Decimal Separator
     *
     * @param string $decimalSeparator
     *
     * @return Format
     */
    public function setDecimalSeparator(string $decimalSeparator): self
    {
        $this->decimalSeparator = $decimalSeparator;

        return $this;
    }

    /**
     * Set Thousands Separator
     *
     * @param string $thousandsSeparator
     *
     * @return Format
     */
    public function setThousandsSeparator(string $thousandsSeparator): self
    {
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    /**
     * Set Number of Decimals
     *
     * @param int $numberOfDecimals
     *
     * @return Format
     */
    public function setNumberOfDecimals(int $numberOfDecimals): self
    {
        $this->numberOfDecimals = $numberOfDecimals;

        return $this;
    }

    /**
     * Set Default Number of Decimals
     *
     * @param int $defaultNumberOfDecimals
     *
     * @return Format
     */
    public function setDefaultNumberOfDecimals(int $defaultNumberOfDecimals): self
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
     * Get Numeric Code
     *
     * @return int
     */
    public function getNumericCode(): int
    {
        return $this->numericCode;
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
