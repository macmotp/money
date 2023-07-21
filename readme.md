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

// Amounts are always in cents (or lowest minor unit)!
$amount = 100;

// All Currencies adopt ISO 4217 standard
$currency = Currency::USD;

// Create the object
$money = new Money($amount, $currency);
// or Money::make($amount, $currency)

echo $money->print();

// (string) '1.00$'

// Another example with Vietnamese Dong
$money = new Money(10000, Currency::VND);

echo $money->print();

// (string) '10 000₫'

```
#### List of basic methods
- `getAmount()`: return the amount in cents;
- `getAmountForHumans()`: return the amount in decimals;
- `getCurrencyCode()`: return the currency code;
- `getCurrencySymbol()`: return the currency symbol;
- `getCurrency()`: return the currency object (as Currency implementation, not as string);
- `clone()`: clone the entire object;
- `zero()`: set the amount to zero;

_If you want to print any of the currency properties, check the Format class._
_For example: if you want to get the currency code, you can run `$money->getCurrencyCode()`_

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
- `toArray()`: convert the object into array;
- `withSymbol()`: print the symbol and not the currency code;
- `withoutSymbol()`: do not print neither symbol nor currency code;
- `withCode()`: print the currency code and not the code;
- `withoutCode()`: do not print neither symbol nor currency code;
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

### List of Currencies in the package
``` php
use Macmotp\Money;

$list = Money::getAllCurrencies();
// This will return a Illuminate\Support\Collection
```
These are the implemented currencies (top exchanged in the world):
- `AED`: United Arab Emirates Dirham
- `ARS`: Argentine Peso
- `AUD`: Australian Dollar
- `BGN`: Bulgarian Lev
- `BRL`: Brazilian Real
- `CAD`: Canadian Dollar
- `CHF`: Swiss Franc
- `CLP`: Chilean Peso
- `CNY`: Chinese Yuan
- `CZK`: Czech Koruna
- `DKK`: Danish Krone
- `EUR`: Euro
- `GBP`: British Pound
- `HKD`: Hong Kong Dollar
- `HUF`: Hungarian Forint
- `IDR`: Indonesian Rupiah
- `ILS`: Israeli New Shekel
- `INR`: Indian Rupee
- `JPY`: Japanese Yen
- `KRW`: South Korean Won
- `MXN`: Mexican Peso
- `MYR`: Malaysian Ringgit
- `NOK`: Norwegian Krone
- `NZD`: New Zealand Dollar
- `PHP`: Philippine Peso
- `PLN`: Polish Złoty
- `RON`: Romanian Leu
- `RUB`: Russian Ruble
- `SAR`: Saudi Riyal
- `SEK`: Swedish Krona
- `SGD`: Singapore Dollar
- `THB`: Thai Baht
- `TRY`: Turkish Lira
- `TWD`: New Taiwan Dollar
- `UAH`: Ukrainian Hryvnia
- `USD`: United States Dollar
- `UYU`: Uruguayan Peso
- `VND`: Vietnamese Đồng
- `ZAR`: South African Rand

_If you are in need of any other currency, please open an issue._

## Testing

``` bash
composer test
```

## Changelog

Please see [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing](.github/contributing.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/security.md) on how to report security vulnerabilities.

## Credits

- [Marco Gava](https://github.com/macmotp)

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
