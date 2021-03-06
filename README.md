# EBT Validator
This project provides the ```ValidatorService``` class. This class encapsulates a few common validations, allowing both **required** and **optional** validations.

## Installation

The recommended way to install is through composer.

Just create a `composer.json` file for your project:

``` json
{
    "require": {
        "ebidtech/ebt-validator": "2.*"
    }
}
```

And run these two commands to install it:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ composer install
```

Now you can add the autoloader, and you will have access to the library:

```php
<?php

require 'vendor/autoload.php';
```

## Example

```PHP
// Instantiate the validator.
$validator = new EBT\Validator\Service\Validator\ValidatorService();

// Validations return TRUE when they succeed, FALSE when they fail.
$validator->requireString('a string');         // true
$validator->requiredInteger('not an integer'); // false

// It is possible to retrieve the message for the last
// failed validation.
$validator->requireString(5);                  // false
$validator->getLastError();                    // 'Expected string, "integer" given.'

// It is also possible to pass an additional parameter to any validation method
// to control whether or not exceptions are suppressed when a validation fails.
// By default, exceptions suppressed.
$validator->requirePositiveInteger(-1);        // false
$validator->requirePositiveInteger(-1, true);  // false
$validator->requirePositiveInteger(-1, false); // throws ValidationException

// Required validations will fail if the value is not defined, 
// optional validations will not.
$validator->requiredPositiveInteger(null);     // false
$validator->optionalPositiveInteger(null);     // true

// The validator can also be used statically, keeping the same
// behavior. Note that the static validator sacrifices advanced
// features (for example, error messages) to improve performance
// and avoid validator instantiation.
use EBT\Validator\Model\Validator\Validator;

Validator::requireString('a string');          // true
Validator::requiredInteger('not an integer');  // false
```
