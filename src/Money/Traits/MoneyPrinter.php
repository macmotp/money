<?php

namespace Macmotp\Traits;

use Macmotp\Money;

trait MoneyPrinter
{
    /**
     * Transform to Array
     *
     * Example: $money = new Money(123456, 'USD');
     * echo($money->toArray()); // Output: ['amount' => 123456, 'currency_code' => 'USD']
     */
    public function toArray(): array
    {
        return [
            'amount' => $this->getAmount(),
            'currency' => $this->getCurrencyCode(),
        ];
    }

    /**
     * Print With Symbol
     *
     * @return Money
     */
    public function withSymbol(): Money
    {
        $this->getCurrency()->getFormat()->setShowSymbol(true)->setShowCode(false);

        return $this;
    }

    /**
     * Print Without Symbol
     *
     * @return Money
     */
    public function withoutSymbol(): Money
    {
        $this->getCurrency()->getFormat()->setShowSymbol(false)->setShowCode(false);

        return $this;
    }

    /**
     * Print With Code
     *
     * @return Money
     */
    public function withCode(): Money
    {
        $this->getCurrency()->getFormat()->setShowCode(true)->setShowSymbol(false);

        return $this;
    }

    /**
     * Print Without Code
     *
     * @return Money
     */
    public function withoutCode(): Money
    {
        $this->getCurrency()->getFormat()->setShowCode(false)->setShowSymbol(false);

        return $this;
    }

    /**
     * Print Symbol on the Left
     *
     * @return Money
     */
    public function withSymbolOnLeft(): Money
    {
        $this->getCurrency()->getFormat()->setShowSymbolOrCodeOnLeft(true);

        return $this;
    }

    /**
     * Print Symbol on the Right
     *
     * @return Money
     */
    public function withSymbolOnRight(): Money
    {
        $this->getCurrency()->getFormat()->setShowSymbolOrCodeOnLeft(false);

        return $this;
    }

    /**
     * Print Code on the Left
     *
     * @return Money
     */
    public function withCodeOnLeft(): Money
    {
        return $this->withCode()->withSymbolOnLeft();
    }

    /**
     * Print Code on the Right
     *
     * @return Money
     */
    public function withCodeOnRight(): Money
    {
        return $this->withCode()->withSymbolOnRight();
    }

    /**
     * Print With Space
     *
     * @return Money
     */
    public function withSpace(): Money
    {
        $this->getCurrency()->getFormat()->setShowSpace(true);

        return $this;
    }

    /**
     * Print Without Space
     *
     * @return Money
     */
    public function withoutSpace(): Money
    {
        $this->getCurrency()->getFormat()->setShowSpace(false);

        return $this;
    }

    /**
     * Print Without Decimals
     *
     * @return Money
     */
    public function withoutDecimals(): Money
    {
        $this->getCurrency()->getFormat()->setShowDecimals(false);

        return $this;
    }

    /**
     * Print Decimal Separator
     *
     * @param string $decimalSeparator
     *
     * @return Money
     */
    public function withDecimalSeparator(string $decimalSeparator): Money
    {
        $this->getCurrency()->getFormat()->setDecimalSeparator($decimalSeparator);

        return $this;
    }

    /**
     * Print Thousands Separator
     *
     * @param string $thousandsSeparator
     *
     * @return Money
     */
    public function withThousandsSeparator(string $thousandsSeparator): Money
    {
        $this->getCurrency()->getFormat()->setThousandsSeparator($thousandsSeparator);

        return $this;
    }

    /**
     * Print Number of Decimals
     *
     * @param int $numberOfDecimals
     *
     * @return Money
     */
    public function withNumberOfDecimals(int $numberOfDecimals): Money
    {
        $this->getCurrency()->getFormat()->setNumberOfDecimals($numberOfDecimals);

        return $this;
    }

    /**
     * Print the Money
     *
     * Example: $money = new Money(123456, 'USD');
     * echo($money->print()); // Output: 1,234.56$
     *
     * Override the default:
     * echo($money->withCode()->withCodeOnLeft()->withSpace()->print(); // Output: USD 1,234
     *
     * @return string
     */
    public function print(): string
    {
        $currencyFormat = $this->getCurrency()->getFormat();

        // First, we print the amount
        $amount = number_format(
            $this->getAmountForHumans(),
            $currencyFormat->getShowDecimals() ? $currencyFormat->getNumberOfDecimals() : 0,
            $currencyFormat->getDecimalSeparator(),
            $currencyFormat->getThousandsSeparator(),
        );

        // Check if we need to print the currency
        if (! $currencyFormat->getShowSymbol() && ! $currencyFormat->getShowCode()) {
            return $amount;
        }

        // Else we print the amount with the currency
        $symbolOrCode = $currencyFormat->getShowSymbol() ? $currencyFormat->getSymbol() : $currencyFormat->getCode();
        $spaceOrNot = $currencyFormat->getShowSpace() ? ' ' : '';

        return $currencyFormat->getShowSymbolOrCodeOnLeft() ?
            $symbolOrCode
            . $spaceOrNot
            . $amount :
            $amount
            . $spaceOrNot
            . $symbolOrCode;
    }
}
