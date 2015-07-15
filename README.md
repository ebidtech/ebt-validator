# EBT Validator
This project provides the ```ValidatorService``` class. This class encapsulates a few common validations, allowing both **required** and **optional** validations.

## Example

```PHP
// Instantiate the validator.
$validator = new EBT\Validator\Service\Validator\ValidatorService();

// Validations return TRUE when they succeed, FALSE when they fail.
$validator->requireString('i am a string', 'my_method', 1);              // true
$validator->requiredInteger('i am not an integer', 'my_method', 2);      // false

// When an exceptions class is defined, failed validations
// THROW AN EXCEPTION instead.
$validator->requiredPositiveInteger(1, 'my_method', 3, '\Exception');   // true
$validator->requiredPositiveInteger(-20, 'my_method', 4, '\Exception'); // throws \Exception

// It is possible to retrieve the message for the last
// failed validation.
$validator->requireString(5, 'my_method', 5);                           // false
$validator->getLastError();                                             // ...expected string...

// Required validations will fail if the value is not defined, 
// optional validations will not.
$validator->requiredPositiveInteger(null, 'my_method', 6);              // false;
$validator->optionalPositiveInteger(null, 'my_method', 7);              // true;

// The validator can also be used statically, keeping the same
// behavior.
use EBT\Validator\Model\Validator\Validator;

Validator::requireString('i am a string', 'my_method', 8);              // true
Validator::requiredInteger('i am not an integer', 'my_method', 9);      // false
```
