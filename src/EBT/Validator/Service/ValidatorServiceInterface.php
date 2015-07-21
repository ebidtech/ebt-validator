<?php

/**
 * This file is a part of the Validator library.
 *
 * (c) 2015015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Validator\Service;

use EBT\Validator\Exception\ValidationException;

interface ValidatorServiceInterface
{
    /* --------------------------- */
    /* Integer validations         */
    /* --------------------------- */

    /**
     * Required value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredInteger($value);

    /**
     * Required value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveInteger($value);

    /**
     * Required value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveInteger($value);

    /**
     * Required value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredIntegerRange($value, $min, $max);

    /**
     * Optional value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalInteger($value);

    /**
     * Optional value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveInteger($value);

    /**
     * Optional value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveInteger($value);

    /**
     * Optional value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalIntegerRange($value, $min, $max);

    /* --------------------------- */
    /* Float validations           */
    /* --------------------------- */

    /**
     * Required value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredFloat($value);

    /**
     * Required value is a positive float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveFloat($value);

    /**
     * Required value is zero or positive float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveFloat($value);

    /**
     * Required value is float in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredFloatRange($value, $min, $max);

    /**
     * Optional value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalFloat($value);

    /**
     * Optional value is a positive float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveFloat($value);

    /**
     * Optional value is zero or positive float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveFloat($value);

    /**
     * Optional value is float in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalFloatRange($value, $min, $max);

    /* --------------------------- */
    /* Number validations          */
    /* --------------------------- */

    /**
     * Required value is number (int or float).
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNumber($value);

    /**
     * Required value is a positive number (int or float).
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveNumber($value);

    /**
     * Required value is zero or positive number (int or float).
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveNumber($value);

    /**
     * Required value is number (int or float) in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNumberRange($value, $min, $max);

    /**
     * Optional value is number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalNumber($value);

    /**
     * Optional value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveNumber($value);

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveNumber($value);

    /**
     * Optional value is number in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalNumberRange($value, $min, $max);

    /* --------------------------- */
    /* Numeric validations         */
    /* --------------------------- */

    /**
     * Required value is numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNumeric($value);

    /**
     * Required value is a positive numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveNumeric($value);

    /**
     * Required value is zero or positive numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveNumeric($value);

    /**
     * Required value is numeric in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNumericRange($value, $min, $max);

    /**
     * Optional value is numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalNumeric($value);

    /**
     * Optional value is a positive numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveNumeric($value);

    /**
     * Optional value is zero or positive numeric.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveNumeric($value);

    /**
     * Optional value is numeric in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalNumericRange($value, $min, $max);

    /* --------------------------- */
    /* Boolean validations         */
    /* --------------------------- */

    /**
     * Required value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredBool($value);

    /**
     * Optional value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalBool($value);

    /* --------------------------- */
    /* Scalar validations          */
    /* --------------------------- */

    /**
     * Require value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredScalar($value);

    /**
     * Optional value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalScalar($value);

    /* --------------------------- */
    /* String validations          */
    /* --------------------------- */

    /**
     * Required value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredString($value);

    /**
     * Required value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredStringNotEmpty($value);

    /**
     * Required values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredUrl($value);

    /**
     * Required value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredEmail($value);

    /**
     * Required value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredIpAddress($value);

    /**
     * Optional value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalString($value);

    /**
     * Optional value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalStringNotEmpty($value);

    /**
     * Optional values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalUrl($value);

    /**
     * Optional value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalEmail($value);

    /**
     * Optional value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalIpAddress($value);

    /* --------------------------- */
    /* Array validations           */
    /* --------------------------- */

    /**
     * Required value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredArray($value);

    /**
     * Required value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredArrayNotEmpty($value);

    /**
     * Required key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredExistingKey($key, array $values);

    /**
     * Required value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredExistingValue($value, array $values);

    /**
     * Optional value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalArray($value);

    /**
     * Optional value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalArrayNotEmpty($value);

    /**
     * Optional key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalExistingKey($key, array $values);

    /**
     * Optional value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalExistingValue($value, array $values);

    /* --------------------------- */
    /* Object validations          */
    /* --------------------------- */

    /**
     * Required value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredObject($value);

    /**
     * Check if a given class name exists.
     *
     * @param string $className Class name to check.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredExistingClass($className);

    /**
     * Check if a given method name exists for a given class.
     *
     * @param object $object     Object from class to be checked.
     * @param string $methodName Name of the method to check for.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredExistingMethod($object, $methodName);

    /**
     * Optional value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalObject($value);

    /* --------------------------- */
    /* Other validations           */
    /* --------------------------- */

    /**
     * Required value is not null.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNotNull($value);

    /**
     * Required value is null.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNull($value);

    /**
     * Required value is not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredNotEmpty($value);

    /**
     * Required value is empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isRequiredEmpty($value);

    /**
     * Optional value is not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    public function isOptionalNotEmpty($value);

    /* --------------------------- */
    /* Utilities                   */
    /* --------------------------- */

    /**
     * Retrieves the last validation error.
     *
     * @return string
     */
    public function getLastError();

    /**
     * Enables exceptions on failed validations.
     *
     * @return ValidatorServiceInterface
     */
    public function enableExceptions();

    /**
     * Disables exceptions on failed validations.
     *
     * @return ValidatorServiceInterface
     */
    public function disableExceptions();
}
