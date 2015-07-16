<?php

/**
 * This file is a part of the Validator library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Validator\Service;

interface ValidatorServiceInterface
{
    /**
     * Required value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredZeroPositiveInteger($value);

    /**
     * Required value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredPositiveNumber($value);

    /**
     * Required value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredZeroPositiveNumber($value);

    /**
     * Required value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredInteger($value);

    /**
     * Required value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public function requiredIntegerRange($value, $min, $max);

    /**
     * Required value is number in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public function requiredNumberRange($value, $min, $max);

    /**
     * Required value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredBool($value);

    /**
     * Required value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredFloat($value);

    /**
     * Required value is double.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredDouble($value);

    /**
     * Require value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredScalar($value);

    /**
     * Required value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredArray($value);

    /**
     * Required value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredArrayNotEmpty($value);

    /**
     * Required value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredString($value);

    /**
     * Required value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredStringNotEmpty($value);

    /**
     * Required value against empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredNotEmpty($value);

    /**
     * Required value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredObject($value);

    /**
     * Required values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredUrl($value);

    /**
     * Required value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredEmail($value);

    /**
     * Required value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredIpAddress($value);

    /**
     * Required key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     */
    public function requiredKeyExists($key, array $values);

    /**
     * Required value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     */
    public function requiredValueExists($value, array $values);

    /**
     * Check if a given class name exists.
     *
     * @param string $className Class name to check.
     *
     * @return boolean
     */
    public function requiredExistingClass($className);

    /**
     * Check if a given method name exists for a given class.
     *
     * @param object $object     Object from class to be checked.
     * @param string $methodName Name of the method to check for.
     *
     * @return boolean
     */
    public function requiredExistingMethod($object, $methodName);

    /**
     * Optional value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalPositiveInteger($value);

    /**
     * Required value is a positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function requiredPositiveInteger($value);

    /**
     * Optional value is zero or positive integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalZeroPositiveInteger($value);

    /**
     * Optional value is a positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalPositiveNumber($value);

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalZeroPositiveNumber($value);

    /**
     * Optional value is integer.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalInteger($value);

    /**
     * Optional value is integer in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public function optionalIntegerRange($value, $min, $max);

    /**
     * Optional value is number in range.
     *
     * @param mixed   $value Value.
     * @param integer $min   Lower limit.
     * @param integer $max   Upper limit.
     *
     * @return boolean
     */
    public function optionalNumberRange($value, $min, $max);

    /**
     * Optional value is boolean.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalBool($value);

    /**
     * Optional value is float.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalFloat($value);

    /**
     * Optional value is double.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalDouble($value);

    /**
     * Optional value is scalar.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalScalar($value);

    /**
     * Optional value is array.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalArray($value);

    /**
     * Optional value is array and not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalArrayNotEmpty($value);

    /**
     * Optional value is string.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalString($value);

    /**
     * Optional value is string not empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalStringNotEmpty($value);

    /**
     * Optional value against empty.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalNotEmpty($value);

    /**
     * Optional value is an object.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalObject($value);

    /**
     * Optional values in an URL.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalUrl($value);

    /**
     * Optional value is an email.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalEmail($value);

    /**
     * Optional value is an IP address.
     *
     * @param mixed $value Value.
     *
     * @return boolean
     */
    public function optionalIpAddress($value);

    /**
     * Optional key exists.
     *
     * @param string $key    Key to check.
     * @param array  $values Array in which to search.
     *
     * @return boolean
     */
    public function optionalKeyExists($key, array $values);

    /**
     * Optional value exists (in array).
     *
     * @param mixed $value  Value to search for.
     * @param array $values Array in which to search.
     *
     * @return boolean
     */
    public function optionalValueExists($value, array $values);

    /**
     * Retrieves the last validation error, or null if the last validation was successful.
     *
     * @return string|null
     */
    public function getLastError();
}
