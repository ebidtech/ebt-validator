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
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredInteger($value, $suppressException = true);

    /**
     * Required value is a positive integer.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveInteger($value, $suppressException = true);

    /**
     * Required value is zero or positive integer.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveInteger($value, $suppressException = true);

    /**
     * Required value is integer in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredIntegerRange($value, $min, $max, $suppressException = true);

    /**
     * Optional value is integer.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalInteger($value, $suppressException = true);

    /**
     * Optional value is a positive integer.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveInteger($value, $suppressException = true);

    /**
     * Optional value is zero or positive integer.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveInteger($value, $suppressException = true);

    /**
     * Optional value is integer in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalIntegerRange($value, $min, $max, $suppressException = true);

    /* --------------------------- */
    /* Float validations           */
    /* --------------------------- */

    /**
     * Required value is float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredFloat($value, $suppressException = true);

    /**
     * Required value is a positive float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveFloat($value, $suppressException = true);

    /**
     * Required value is zero or positive float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveFloat($value, $suppressException = true);

    /**
     * Required value is float in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredFloatRange($value, $min, $max, $suppressException = true);

    /**
     * Optional value is float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalFloat($value, $suppressException = true);

    /**
     * Optional value is a positive float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveFloat($value, $suppressException = true);

    /**
     * Optional value is zero or positive float.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveFloat($value, $suppressException = true);

    /**
     * Optional value is float in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalFloatRange($value, $min, $max, $suppressException = true);

    /* --------------------------- */
    /* Number validations          */
    /* --------------------------- */

    /**
     * Required value is number (int or float).
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNumber($value, $suppressException = true);

    /**
     * Required value is a positive number (int or float).
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveNumber($value, $suppressException = true);

    /**
     * Required value is zero or positive number (int or float).
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveNumber($value, $suppressException = true);

    /**
     * Required value is number (int or float) in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNumberRange($value, $min, $max, $suppressException = true);

    /**
     * Optional value is number.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalNumber($value, $suppressException = true);

    /**
     * Optional value is a positive number.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveNumber($value, $suppressException = true);

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveNumber($value, $suppressException = true);

    /**
     * Optional value is number in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalNumberRange($value, $min, $max, $suppressException = true);

    /* --------------------------- */
    /* Numeric validations         */
    /* --------------------------- */

    /**
     * Required value is numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNumeric($value, $suppressException = true);

    /**
     * Required value is a positive numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredPositiveNumeric($value, $suppressException = true);

    /**
     * Required value is zero or positive numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredZeroPositiveNumeric($value, $suppressException = true);

    /**
     * Required value is numeric in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNumericRange($value, $min, $max, $suppressException = true);

    /**
     * Optional value is numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalNumeric($value, $suppressException = true);

    /**
     * Optional value is a positive numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalPositiveNumeric($value, $suppressException = true);

    /**
     * Optional value is zero or positive numeric.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalZeroPositiveNumeric($value, $suppressException = true);

    /**
     * Optional value is numeric in range.
     *
     * @param mixed $value             Value.
     * @param int   $min               Lower limit.
     * @param int   $max               Upper limit.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalNumericRange($value, $min, $max, $suppressException = true);

    /* --------------------------- */
    /* Boolean validations         */
    /* --------------------------- */

    /**
     * Required value is boolean.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredBool($value, $suppressException = true);

    /**
     * Optional value is boolean.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalBool($value, $suppressException = true);

    /* --------------------------- */
    /* Scalar validations          */
    /* --------------------------- */

    /**
     * Require value is scalar.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredScalar($value, $suppressException = true);

    /**
     * Optional value is scalar.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalScalar($value, $suppressException = true);

    /* --------------------------- */
    /* String validations          */
    /* --------------------------- */

    /**
     * Required value is string.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredString($value, $suppressException = true);

    /**
     * Required value is string not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredStringNotEmpty($value, $suppressException = true);

    /**
     * Required values in an URL.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredUrl($value, $suppressException = true);

    /**
     * Required value is an email.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredEmail($value, $suppressException = true);

    /**
     * Required value is an IP address.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredIpAddress($value, $suppressException = true);

    /**
     * Optional value is string.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalString($value, $suppressException = true);

    /**
     * Optional value is string not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalStringNotEmpty($value, $suppressException = true);

    /**
     * Optional values in an URL.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalUrl($value, $suppressException = true);

    /**
     * Optional value is an email.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalEmail($value, $suppressException = true);

    /**
     * Optional value is an IP address.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalIpAddress($value, $suppressException = true);

    /* --------------------------- */
    /* Array validations           */
    /* --------------------------- */

    /**
     * Required value is array.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredArray($value, $suppressException = true);

    /**
     * Required value is array and not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredArrayNotEmpty($value, $suppressException = true);

    /**
     * Required key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return bool
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
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredExistingValue($value, array $values);

    /**
     * Optional value is array.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalArray($value, $suppressException = true);

    /**
     * Optional value is array and not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalArrayNotEmpty($value, $suppressException = true);

    /**
     * Optional key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return bool
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
     * @return bool
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
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredObject($value, $suppressException = true);

    /**
     * Check if a given class name exists.
     *
     * @param string $className Class name to check.
     *
     * @return bool
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
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredExistingMethod($object, $methodName);

    /**
     * Optional value is an object.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalObject($value, $suppressException = true);

    /* --------------------------- */
    /* Other validations           */
    /* --------------------------- */

    /**
     * Required value is not null.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNotNull($value, $suppressException = true);

    /**
     * Required value is null.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNull($value, $suppressException = true);

    /**
     * Required value is not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredNotEmpty($value, $suppressException = true);

    /**
     * Required value is empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isRequiredEmpty($value, $suppressException = true);

    /**
     * Optional value is not empty.
     *
     * @param mixed $value             Value.
     * @param bool  $suppressException Indicates whether the method should return false or thrown an exception.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    public function isOptionalNotEmpty($value, $suppressException = true);

    /* --------------------------- */
    /* Utilities                   */
    /* --------------------------- */

    /**
     * Retrieves the last validation error.
     *
     * @return string
     */
    public function getLastError();
}
