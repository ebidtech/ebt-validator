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
    public function requiredPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null);

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
    public function requiredBool($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredFloat($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredScalar($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredArray($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null);

    /**
     * Require all values of array be of a given type.
     *
     * {@see ArrayUtil::valuesType()}
     *
     * @param array          $values         Value.
     * @param string         $type           Type to check against.
     * @param string         $callee         Method name of the caller.
     * @param integer|string $parameter      Parameter position/name.
     * @param string|null    $exceptionClass Exception class name.
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    public function requiredArrayValuesType(array $values, $type, $callee, $parameter, $exceptionClass);

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
    public function requiredString($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredNotEmpty($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredObject($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredUrl($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredEmail($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredIpAddress($value, $callee, $parameter, $exceptionClass = null);

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
    public function requiredKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null);

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
    public function requiredValueExists($value, array $values, $callee, $parameter, $exceptionClass = null);

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
    public function requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass = null);

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
    public function requiredExistingClass($className, $callee, $parameter, $exceptionClass = null);

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
    public function requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass = null);

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
    public function optionalPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalInteger($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null);

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
    public function optionalBool($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalFloat($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalScalar($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalArray($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalString($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalStringNotEmpty($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalNotEmpty($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalObject($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalUrl($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalEmail($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalIpAddress($value, $callee, $parameter, $exceptionClass = null);

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
    public function optionalKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null);

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
    public function optionalValueExists($value, array $values, $callee, $parameter, $exceptionClass = null);
}
