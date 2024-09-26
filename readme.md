# Light Money Handler

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)

**Library to Handle Money and Currencies in PHP, simple and light**

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
- `getCurrency()->toArray()`: convert the currency object into array;
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
These are the implemented currencies:
- `AED`: United Arab Emirates Dirham
- `AFN`: Afghan Afghani
- `ALL`: Albanian Lek
- `AMD`: Armenian Dram
- `ANG`: Netherlands Antillean Guilder
- `AOA`: Angolan Kwanza
- `ARS`: Argentine Peso
- `AUD`: Australian Dollar
- `AWG`: Aruban Florin
- `AZN`: Azerbaijani Manat
- `BAM`: Bosnia and Herzegovina Convertible Mark
- `BBD`: Barbados Dollar
- `BDT`: Bangladeshi Taka
- `BGN`: Bulgarian Lev
- `BHD`: Bahraini Dinar
- `BIF`: Burundian Franc
- `BMD`: Bermudian Dollar
- `BND`: Brunei Dollar
- `BOB`: Bolivian Boliviano
- `BRL`: Brazilian Real
- `BSD`: Bahamian Dollar
- `BTC`: Bitcoin
- `BTN`: Bhutanese Ngultrum
- `BWP`: Botswana Pula
- `BYN`: Belarusian Ruble
- `BZD`: Belize Dollar
- `CAD`: Canadian Dollar
- `CDF`: Congolese Franc
- `CHF`: Swiss Franc
- `CLP`: Chilean Peso
- `CNY`: Chinese Yuan - Renminbi
- `COP`: Colombian Peso
- `CRC`: Costa Rican Colón
- `CUP`: Cuban Peso
- `CVE`: Cape Verdean Escudo
- `CZK`: Czech Koruna
- `DJF`: Djiboutian Franc
- `DKK`: Danish Krone
- `DOP`: Dominican Peso
- `DZD`: Algerian Dinar
- `EGP`: Egyptian Pound
- `ERN`: Eritrean Nakfa
- `ETB`: Ethiopian Birr
- `EUR`: Euro
- `FJD`: Fijian Dollar
- `FKP`: Falkland Islands Pound
- `GBP`: British Pound
- `GEL`: Georgian Lari
- `GHS`: Ghanaian Cedi
- `GIP`: Gibraltar Pound
- `GMD`: Gambian Dalasi
- `GNF`: Guinean Franc
- `GTQ`: Guatemalan Quetzal
- `GYD`: Guyanese Dollar
- `HKD`: Hong Kong Dollar
- `HNL`: Honduran Lempira
- `HTG`: Haitian Gourde
- `HUF`: Hungarian Forint
- `IDR`: Indonesian Rupiah
- `ILS`: Israeli New Shekel
- `INR`: Indian Rupee
- `IQD`: Iraqi Dinar
- `IRR`: Iranian Rial
- `ISK`: Icelandic Króna
- `JMD`: Jamaican Dollar
- `JOD`: Jordanian Dinar
- `JPY`: Japanese Yen
- `KES`: Kenyan Shilling
- `KGS`: Kyrgyz Som
- `KHR`: Cambodian Riel
- `KMF`: Comorian Franc
- `KPW`: North Korean Won
- `KRW`: South Korean Won
- `KWD`: Kuwaiti Dinar
- `KYD`: Cayman Islands Dollar
- `KZT`: Kazakhstani Tenge
- `LAK`: Lao Kip
- `LBP`: Lebanese Pound
- `LKR`: Sri Lankan Rupee
- `LRD`: Liberian Dollar
- `LSL`: Lesotho Loti
- `LYD`: Libyan Dinar
- `MAD`: Moroccan Dirham
- `MDL`: Moldovan Leu
- `MGA`: Malagasy Ariary
- `MKD`: Macedonian Denar
- `MMK`: Burmese Kyat
- `MNT`: Mongolian Tögrög
- `MOP`: Macanese Pataca
- `MRU`: Mauritanian Ouguiya
- `MUR`: Mauritian Rupee
- `MVR`: Maldivian Rufiyaa
- `MWK`: Malawian Kwacha
- `MXN`: Mexican Peso
- `MYR`: Malaysian Ringgit
- `MZN`: Mozambican Metical
- `NAD`: Namibian Dollar
- `NGN`: Nigerian Naira
- `NIO`: Nicaraguan Córdoba
- `NOK`: Norwegian Krone
- `NPR`: Nepalese Rupee
- `NZD`: New Zealand Dollar
- `OMR`: Omani Rial
- `PAB`: Panamanian Balboa
- `PEN`: Peruvian Sol
- `PGK`: Papua New Guinean Kina
- `PHP`: Philippine Peso
- `PKR`: Pakistani Rupee
- `PLN`: Polish Złoty
- `PYG`: Paraguayan Guaraní
- `QAR`: Qatari Riyal
- `RON`: Romanian Leu
- `RSD`: Serbian Dinar
- `RUB`: Russian Ruble
- `RWF`: Rwandan Franc
- `SAR`: Saudi Riyal
- `SBD`: Solomon Islands Dollar
- `SCR`: Seychellois Rupee
- `SDG`: Sudanese Pound
- `SEK`: Swedish Krona
- `SGD`: Singapore Dollar
- `SHP`: Saint Helena Pound
- `SLE`: Sierra Leonean Leone
- `SOS`: Somali Shilling
- `SRD`: Surinamese Dollar
- `SSP`: South Sudanese Pound
- `STN`: São Tomé and Príncipe Dobra
- `SYP`: Syrian Pound
- `SZL`: Swazi Lilangeni
- `THB`: Thai Baht
- `TJS`: Tajikistani Somoni
- `TMT`: Turkmenistani Manat
- `TND`: Tunisian Dinar
- `TOP`: Tongan Paʻanga
- `TRY`: Turkish Lira
- `TTD`: Trinidad and Tobago Dollar
- `TWD`: New Taiwan Dollar
- `TZS`: Tanzanian Shilling
- `UAH`: Ukrainian Hryvnia
- `UGX`: Ugandan Shilling
- `USD`: United States Dollar
- `UYU`: Uruguayan Peso
- `UZS`: Uzbekistani Sum
- `VES`: Venezuelan Sovereign Bolívar
- `VND`: Vietnamese Đồng
- `VUV`: Vanuatu Vatu
- `WST`: Samoan Tālā
- `XAF`: Central African CFA Franc
- `XCD`: Eastern Caribbean Dollar
- `XOF`: West African CFA Franc
- `XPF`: CFP Franc
- `YER`: Yemeni Rial
- `ZAR`: South African Rand
- `ZMW`: Zambian Kwacha
- `ZWG`: Zimbabwe Gold

_If you want to add another currency, please open an issue._

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
