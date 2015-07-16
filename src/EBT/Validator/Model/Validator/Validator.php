<?php

/**
 * This file is a part of the Validator library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Validator\Model\Validator;

abstract class Validator
{
    /**
     * Required value is not null.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredNotNull($value)
    {
        return ! is_null($value);
    }

    /**
     * Required value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredZeroPositiveInteger($value)
    {
        return is_int($value) && 0 <= $value;
    }

    /**
     * Required value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredPositiveNumber($value)
    {
        return is_numeric($value) && 1 <= $value;
    }

    /**
     * Required value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredZeroPositiveNumber($value)
    {
        return is_numeric($value) && 0 <= $value;
    }

    /**
     * Required value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredInteger($value)
    {
        return is_int($value);
    }

    /**
     * Required value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public static function isRequiredIntegerRange($value, $min, $max)
    {
        return is_int($value) && $min <= $value && $max >= $value;
    }

    /**
     * Required value is number in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public static function isRequiredNumberRange($value, $min, $max)
    {
        return is_numeric($value) && $min <= $value && $max >= $value;
    }

    /**
     * Required value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredBool($value)
    {
        return is_bool($value);
    }

    /**
     * Required value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredFloat($value)
    {
        return is_float($value);
    }

    /**
     * Required value is double.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredDouble($value)
    {
        return is_double($value);
    }

    /**
     * Require value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredScalar($value)
    {
        return is_scalar($value);
    }

    /**
     * Required value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredArray($value)
    {
        return is_array($value);
    }

    /**
     * Required value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredArrayNotEmpty($value)
    {
        return is_array($value) && ! empty($value);
    }

    /**
     * Required value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredString($value)
    {
        return is_string($value);
    }

    /**
     * Required value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredStringNotEmpty($value)
    {
        return is_string($value) && ! empty($value);
    }

    /**
     * Required value against empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredNotEmpty($value)
    {
        return ! empty($value);
    }

    /**
     * Required value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredObject($value)
    {
        return is_object($value);
    }

    /**
     * Required values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredUrl($value)
    {
        return is_string($value) && false !== filter_var($value, FILTER_VALIDATE_URL);
    }

    /**
     * Required value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredEmail($value)
    {
        return is_string($value) && false !== filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Required value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredIpAddress($value)
    {
        return is_string($value) && false !== filter_var($value, FILTER_VALIDATE_IP);
    }

    /**
     * Required key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     */
    public static function isRequiredExistingKey($key, array $values)
    {
        return array_key_exists($key, $values);
    }

    /**
     * Required value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     */
    public static function isRequiredExistingValue($value, array $values)
    {
        return in_array($value, $values);
    }

    /**
     * Check if a given class name exists.
     *
     * @param string $className Class name to check.
     *
     * @return boolean
     */
    public static function isRequiredExistingClass($className)
    {
        return class_exists($className);
    }

    /**
     * Check if a given method name exists for a given class.
     *
     * @param object $object     Object from class to be checked.
     * @param string $methodName Name of the method to check for.
     *
     * @return boolean
     */
    public static function isRequiredExistingMethod($object, $methodName)
    {
        return is_object($object) && method_exists($object, $methodName);
    }

    /**
     * Optional value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalPositiveInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredPositiveInteger($value);
    }

    /**
     * Required value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isRequiredPositiveInteger($value)
    {
        return is_int($value) && 1 <= $value;
    }

    /**
     * Optional value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalZeroPositiveInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredZeroPositiveInteger($value);
    }

    /**
     * Optional value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalPositiveNumber($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredPositiveNumber($value);
    }

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalZeroPositiveNumber($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredZeroPositiveNumber($value);
    }

    /**
     * Optional value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredInteger($value);
    }

    /**
     * Optional value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public static function isOptionalIntegerRange($value, $min, $max)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredIntegerRange($value, $min, $max);
    }

    /**
     * Optional value is number in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public static function isOptionalNumberRange($value, $min, $max)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredNumberRange($value, $min, $max);
    }

    /**
     * Optional value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalBool($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredBool($value);
    }

    /**
     * Optional value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalFloat($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredFloat($value);
    }

    /**
     * Optional value is double.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalDouble($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredDouble($value);
    }

    /**
     * Optional value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalScalar($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredScalar($value);
    }

    /**
     * Optional value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalArray($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredArray($value);
    }

    /**
     * Optional value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalArrayNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredArrayNotEmpty($value);
    }

    /**
     * Optional value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalString($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredString($value);
    }

    /**
     * Optional value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalStringNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredStringNotEmpty($value);
    }

    /**
     * Optional value against empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredNotEmpty($value);
    }

    /**
     * Optional value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalObject($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredObject($value);
    }

    /**
     * Optional values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalUrl($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredUrl($value);
    }

    /**
     * Optional value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalEmail($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredEmail($value);
    }

    /**
     * Optional value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function isOptionalIpAddress($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredIpAddress($value);
    }

    /**
     * Optional key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     */
    public static function isOptionalExistingKey($key, array $values)
    {
        /* No additional validations when the value is null. */
        if (null === $key) {

            return true;
        }

        return self::isRequiredExistingKey($key, $values);
    }

    /**
     * Optional value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     */
    public static function isOptionalExistingValue($value, array $values)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::isRequiredExistingValue($value, $values);
    }
}
