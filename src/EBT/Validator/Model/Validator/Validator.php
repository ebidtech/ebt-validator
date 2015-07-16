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

class Validator
{
    /**
     * Required value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function requiredZeroPositiveInteger($value)
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
    public static function requiredPositiveNumber($value)
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
    public static function requiredZeroPositiveNumber($value)
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
    public static function requiredInteger($value)
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
    public static function requiredIntegerRange($value, $min, $max)
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
    public static function requiredNumberRange($value, $min, $max)
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
    public static function requiredBool($value)
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
    public static function requiredFloat($value)
    {
        return is_float($value);
    }

    /**
     * Require value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function requiredScalar($value)
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
    public static function requiredArray($value)
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
    public static function requiredArrayNotEmpty($value)
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
    public static function requiredString($value)
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
    public static function requiredStringNotEmpty($value)
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
    public static function requiredNotEmpty($value)
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
    public static function requiredObject($value)
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
    public static function requiredUrl($value)
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
    public static function requiredEmail($value)
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
    public static function requiredIpAddress($value)
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
    public static function requiredKeyExists($key, array $values)
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
    public static function requiredValueExists($value, array $values)
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
    public static function requiredExistingClass($className)
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
    public static function requiredExistingMethod($object, $methodName)
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
    public static function optionalPositiveInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::requiredPositiveInteger($value);
    }

    /**
     * Required value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function requiredPositiveInteger($value)
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
    public static function optionalZeroPositiveInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalZeroPositiveInteger($value);
    }

    /**
     * Optional value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalPositiveNumber($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalPositiveNumber($value);
    }

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalZeroPositiveNumber($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalZeroPositiveNumber($value);
    }

    /**
     * Optional value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalInteger($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalInteger($value);
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
    public static function optionalIntegerRange($value, $min, $max)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalIntegerRange($value, $min, $max);
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
    public static function optionalNumberRange($value, $min, $max)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalNumberRange($value, $min, $max);
    }

    /**
     * Optional value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalBool($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalBool($value);
    }

    /**
     * Optional value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalFloat($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalFloat($value);
    }

    /**
     * Optional value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalScalar($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalScalar($value);
    }

    /**
     * Optional value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalArray($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalArray($value);
    }

    /**
     * Optional value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalArrayNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalArrayNotEmpty($value);
    }

    /**
     * Optional value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalString($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalString($value);
    }

    /**
     * Optional value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalStringNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalStringNotEmpty($value);
    }

    /**
     * Optional value against empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalNotEmpty($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalNotEmpty($value);
    }

    /**
     * Optional value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalObject($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalObject($value);
    }

    /**
     * Optional values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalUrl($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalUrl($value);
    }

    /**
     * Optional value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalEmail($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalEmail($value);
    }

    /**
     * Optional value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public static function optionalIpAddress($value)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalIpAddress($value);
    }

    /**
     * Optional key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     */
    public static function optionalKeyExists($key, array $values)
    {
        /* No additional validations when the value is null. */
        if (null === $key) {

            return true;
        }

        return self::optionalKeyExists($key, $values);
    }

    /**
     * Optional value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     */
    public static function optionalValueExists($value, array $values)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return self::optionalValueExists($value, $values);
    }
}
