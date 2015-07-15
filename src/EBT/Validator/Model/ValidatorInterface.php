<?php

/**
 * This file is a part of the Validator library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Validator\Model;

interface ValidatorInterface
{
    /**
     * Required value is a positive integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is zero or positive integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is a positive number.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is zero or positive number.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is integer in range.
     *
     * @param mixed          $value          Value.
     * @param integer        $min            Lower limit.
     * @param integer        $max            Upper limit.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is boolean.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredBool($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is float.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredFloat($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Require value is scalar.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredScalar($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is array.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredArray($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is array and not empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is string.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredString($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is string not empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value against empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is an object.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredObject($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required values in an URL.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredUrl($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is an email.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredEmail($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value is an IP address.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredIpAddress($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Required key exists.
     *
     * @param string         $key            Key to check.
     * @param array          $values         Array in which to search.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null);

    /**
     * Required value exists (in array).
     *
     * @param mixed          $value          Value to search for.
     * @param array          $values         Array in which to search.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredValueExists($value, array $values, $callee, $parameter, $exceptionClass = null);

    /**
     * Required custom.
     *
     * @param mixed          $condition      Conditional check result.
     * @param string         $partialMessage Partial message to be shown with the error.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass = null);

    /**
     * Check if a given class name exists.
     *
     * @param string         $className      Class name to check.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredExistingClass($className, $callee, $parameter, $exceptionClass = null);

    /**
     * Check if a given method name exists for a given class.
     *
     * @param object         $object         Object from class to be checked.
     * @param string         $methodName     Name of the method to check for.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is a positive integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is zero or positive integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is a positive number.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is zero or positive number.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is integer.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalInteger($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is integer in range.
     *
     * @param mixed          $value          Value.
     * @param integer        $min            Lower limit.
     * @param integer        $max            Upper limit.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is boolean.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalBool($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is float.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalFloat($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is scalar.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalScalar($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is array.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalArray($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is array and not empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is string.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalString($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is string not empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalStringNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value against empty.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is an object.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalObject($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional values in an URL.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalUrl($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is an email.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalEmail($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value is an IP address.
     *
     * @param mixed          $value          Value.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalIpAddress($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional key exists.
     *
     * @param string         $key            Key to check.
     * @param array          $values         Array in which to search.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null);

    /**
     * Optional value exists (in array).
     *
     * @param mixed          $value          Value to search for.
     * @param array          $values         Array in which to search.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public static function optionalValueExists($value, array $values, $callee, $parameter, $exceptionClass = null);

    /**
     * Retrieves the last validation error, or null if the last validation was successful.
     *
     * @return string|null
     */
    public static function getLastError();
}
