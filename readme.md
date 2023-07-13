# Light Money Handler

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)

**Library to Handle Money in PHP, simple and light**

Useful for any ecommerce, fintech, or any app that requires 💰.

## Requirements
- PHP >= 8.2

## Installation

Install the package via composer:

```bash
composer require macmotp/money
```

## Usage

### Create Money objects
``` php
use Macmotp\Money;
use Macmotp\Currency;

// Amounts are in cents (or lowest atomic value)!
$amount = 100;

// All Currencies adopt ISO 4217 standard
$currency = Currency::USD;

// Create the object
$money = new Money($amount, $currency);
// or Money::make($amount, $currency)

echo $money->print();

// (string) '1.00$'
```
#### List of basic methods
- `getAmount()`: return the amount in cents;
- `getAmountForHumans()`: return the amount in decimals;
- `getCurrency()`: return the currency (as Currency implementation, not as string);
- `clone()`: clone the entire object;
- `zero()`: set the amount to zero;

_If you want to print any of the currency properties, check the Format class._
_For example: if you want to get the currency code, you can run `$money->getCurrency()->getFormat()->getCode()`_

### Print Money (on the screen, not for real)
``` php
use Macmotp\Money;
use Macmotp\Currency;

$money = new Money(12345, Currency::USD);

// Default format based on each currency

echo $money->print();

// (string) '123.45$'

// Override the default

echo $money->withCode() 
           ->withSpace()
           ->withoutDecimals()
           ->print();

// (string) '123 USD'
```

#### List of methods for printing
- `withSymbol()`: print the symbol and not the currency code;
- `withoutSymbol()`: do not print neither symbol or currency code;
- `withCode()`: print the currency code and not the code;
- `withoutCode()`: do not print neither symbol or currency code;
- `withSymbolOnLeft()`: print symbol on the left;
- `withSymbolOnRight()`: print symbol on the right;
- `withCodeOnLeft()`: print currency code on the left;
- `withCodeOnRight()`: print currency code on the right;
- `withSpace()`: print a space between the amount and the currency;
- `withoutSpace()`: do not print a space between the amount and the currency;
- `withoutDecimals()`: do not print decimals of the amount;
- `withDecimalSeparator(string $decimalSeparator)`: override default decimal separator character;
- `withThousandsSeparator(string $thousandsSeparator)`: override default thousands separator character;
- `withNumberOfDecimals(int $numberOfDecimals)`: set the precision of the decimals;

### Calculate with Money
``` php
use Macmotp\Money;
use Macmotp\Currency;

$moneyOne = new Money(200, Currency::USD);
$moneyTwo = new Money(300, Currency::USD);

echo $moneyOne->add($moneyTwo);

// new Money(500, Currency::USD)
```
#### List of calculation methods
- `add(Money $money)`;
- `subtract(Money $money)`;
- `multiply(float $factor, string $flat = '')`;
- `divide(float $factor, string $flat = '')`;
- `inPercentage(float $percentage, string $flat = '')`;
- `absolute()`;

### Aggregate Money
``` php
use Macmotp\Money;
use Macmotp\Currency;

$moneyOne = new Money(200, Currency::USD);
$moneyTwo = new Money(300, Currency::USD);
$moneyThree = new Money(400, Currency::USD);

echo Money::max($moneyOne, $moneyTwo, $moneyThree);

// new Money(400, Currency::USD)

echo Money::avg($moneyOne, $moneyTwo, $moneyThree);

// new Money(300, Currency::USD)
```
#### List of aggregation methods
- `min(Money ...$money)`: return the minimum amount;
- `max(Money ...$money)`: return the maximum amount;
- `avg(Money ...$money)`: return the average amount;
- `sum(Money ...$money)`: return the sum of all amounts;


### Compare Money
``` php
use Macmotp\Money;
use Macmotp\Currency;

$moneyOne = new Money(200, Currency::USD);
$moneyTwo = new Money(300, Currency::USD);

echo $moneyOne->isLessThan($moneyTwo);

// (bool) true
```
#### List of comparison methods
- `isSameCurrency(Money ...$money)`;
- `isEqualTo(Money $money)`;
- `isGreaterThan(Money $money)`;
- `isGreaterThanOrEqualTo(Money $money)`;
- `isLessThan(Money $money)`;
- `isLessThanOrEqualTo(Money $money)`;
- `isPositive()`;
- `isNegative()`;
- `isZero()`;
- `isZeroOrPositive()`;
- `isZeroOrNegative()`;

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](changelog.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/contributing.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/security.md) on how to report security vulnerabilities.

## Credits

- [Marco Gava](https://github.com/macmotp)

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
