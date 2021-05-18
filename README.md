# validator (bool, int, float, number, string, email, uri)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/teodoroleckie/validator/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/validator/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/teodoroleckie/validator/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/validator/?branch=main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/teodoroleckie/validator/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
[![Build Status](https://scrutinizer-ci.com/g/teodoroleckie/validator/badges/build.png?b=main)](https://scrutinizer-ci.com/g/teodoroleckie/validator/build-status/main)

### Installation

You can install the package via composer:

```bash
composer require tleckie/validator
```

```php
<?php

require "vendor/autoload.php";

use Tleckie\Validator\ValidatorFactory;

$validator = new ValidatorFactory();

$validator->boolValidator()->isValid('true'); // false

$validator->emailValidator()->isValid('email@gmail.com'); // true

$validator->floatValidator()->isValid(1.22); // true

$validator->intValidator()->isValid(1.22); // false

$validator->numericValidator()->isValid(1.22); // true

$validator->stringValidator()->isValid("1.22"); // true

$validator->uriValidator()->isValid("https://hostname.dev/path/"); // true

```