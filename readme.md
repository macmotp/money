# Money Handler

[![Latest Version on Packagist](https://img.shields.io/packagist/v/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)
[![Total Downloads](https://img.shields.io/packagist/dt/macmotp/money.svg)](https://packagist.org/packages/macmotp/money)

**Handle Money in PHP**

Useful for any ecommerce, fintech, or anything it requires 💰.

## Requirements
- PHP >= 8.2

## Installation

Install the package via composer:

```bash
composer require macmotp/money
```

## Basic Usage

#### Create Money objects
``` php
use Macmotp\Money;

$amount = 100; // Amounts are in cents!
$currency = Money::USD;

$money = new Money($amount, $currency);

echo $money->print();

// (string) '$1.00'
```

#### Create collections of codes
``` php
use Macmotp\Codegen;

$generator = new Codegen();

for ($i = 0; $i < 4; $i++) {
   echo $generator->generate('Bob McLovin');
}
// (string) 'BOMCLO'
// (string) 'BOMCLV'
// (string) 'BOMCLI'
// (string) 'BOMCLN'

// Or you can simply retrieve the codes directly within a collection:
echo $generator->collection('Bob McLovin', 4);

// (array) [
//    "BOMCLO",
//    "BOMCLV",
//    "BOMCLI",
//    "BOMCLN",
// ];
```
_Once the possibilities are running low due to lack of letters from the source, it automatically applies random letters._
_Please note that this package does not guarantee uniqueness on its results._
## Configuration
#### Set configuration parameters
``` php
use Macmotp\Codegen;

$generator = new Codegen();

echo $generator->setCodeLength(10)
        ->prepend('PR')
        ->append('AP')
        ->generate('Company Name');
// (string) 'PRCOMPNAAP'
```

#### List of methods for configuration
- `setCodeLength(int $length)`: total length of the generated code;
- `prepend(string $prepend)`: prepend a string;
- `append(string $append)`: append a string;
- `setMaxAttempts(int $maxAttempts)`: set the maximum number of attempts;
- `sanitizeLevel(int $sanitizeLevel)`: read below;

## Sanitize levels
Sometimes the purpose of human-readable codes is to avoid confusion while reading/spelling.
Therefore, is possible to apply some filters to remove similar graphic letters/digits.
#### Choose between 3 different levels of sanitization
- Level 1. Low/Default: will filter out anything is not a letter or a digit
- Level 2. Medium: will filter out (O - 0 - Q - I - 1) characters
- Level 3. High: will filter out (2 - Z - 4 - A - 5 - S - 8 - B - U - V - Y) characters

_Levels are inclusive, e.g. the highest level will apply also filters of level low and medium_
``` php
use Macmotp\Codegen;
use Macmotp\Codegen\Config\Config;

$generator = new Codegen();

echo $generator->sanitizeLevel(Config::SANITIZE_LEVEL_MEDIUM)
        ->generate('Bob McLovin');
// (string) 'BBMCLV'
```

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
