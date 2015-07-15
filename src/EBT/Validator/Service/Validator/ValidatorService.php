<?php

/**
 * This file is a part of the Validator library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Validator\Service\Validator;

use EBT\Validator\Service\ValidatorServiceInterface;

class ValidatorService implements ValidatorServiceInterface
{
    /**
     * @var string
     */
    protected $lastError;

    /**
     * {@inheritdoc}
     */
    public function requiredPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        $type = gettype($value);
        $message = sprintf(
            '%s() expects parameter "%s" to be positive integer, "%s" given.',
            $callee,
            $parameter,
            'integer' === $type ? 'zero or negative integer' : $type
        );

        return $this->validationResponse(
            is_int($value) && 1 <= $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        $type = gettype($value);
        $message = sprintf(
            '%s() expects parameter "%s" to be zero or positive integer, "%s" given.',
            $callee,
            $parameter,
            'integer' === $type ? 'negative integer' : $type
        );

        return $this->validationResponse(
            is_int($value) && 0 <= $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        $type = gettype($value);
        $message = sprintf(
            '%s() expects parameter "%s" to be positive number, "%s" given.',
            $callee,
            $parameter,
            'integer' === $type || 'double' === $type ? 'zero or negative number' : $type
        );

        return $this->validationResponse(
            is_numeric($value) && 1 <= $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        $type = gettype($value);
        $message = sprintf(
            '%s() expects parameter "%s" to be zero or positive number, "%s" given.',
            $callee,
            $parameter,
            'integer' === $type || 'double' === $type ? 'negative number' : $type
        );

        return $this->validationResponse(
            is_numeric($value) && 0 <= $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be integer, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_int($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be integer in range [%d, %d], "%d" given.',
            $callee,
            $parameter,
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationResponse(
            is_int($value) && $min <= $value && $max >= $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredBool($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be boolean, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_bool($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredFloat($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be float, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_float($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredScalar($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be scalar, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_scalar($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredArray($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be array, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_array($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        $type = 'array' === gettype($value) ? 'empty array' : gettype($value);
        $message = sprintf(
            '%s() expects parameter "%s" to be array not empty, "%s" given.',
            $callee,
            $parameter,
            $type
        );

        return $this->validationResponse(
            is_array($value) && array() !== $value,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredString($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be string, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_string($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be string not empty, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_string($value) && ! empty($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be not empty, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            ! empty($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredObject($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be object, "%s" given.',
            $callee,
            $parameter,
            gettype($value)
        );

        return $this->validationResponse(
            is_object($value),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredUrl($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be URL, "%s" given.',
            $callee,
            $parameter,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationResponse(
            is_string($value) && false !== filter_var($value, FILTER_VALIDATE_URL),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredEmail($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be email, "%s" given.',
            $callee,
            $parameter,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationResponse(
            is_string($value) && false !== filter_var($value, FILTER_VALIDATE_EMAIL),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredIpAddress($value, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be IP address, "%s" given.',
            $callee,
            $parameter,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationResponse(
            is_string($value) && false !== filter_var($value, FILTER_VALIDATE_IP),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to contain key "%s" on array.',
            $callee,
            $parameter,
            $key
        );

        return $this->validationResponse(
            array_key_exists($key, $values),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredValueExists($value, array $values, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to contain value "%s" on array.',
            $callee,
            $parameter,
            $value
        );

        return $this->validationResponse(
            in_array($value, $values),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to pass custom require: %s.',
            $callee,
            $parameter,
            $partialMessage
        );

        return $this->validationResponse(
            $condition,
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredExistingClass($className, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be existing class name, "%s" given.',
            $callee,
            $parameter,
            $className
        );

        return $this->validationResponse(
            class_exists($className),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass = null)
    {
        $message = sprintf(
            '%s() expects parameter "%s" to be a existing method for class "%s", "%s" given.',
            $callee,
            $parameter,
            is_object($object) ? get_class($object) : sprintf('<NOT AN OBJECT: %s>', gettype($object)),
            $methodName
        );

        return $this->validationResponse(
            is_object($object) && method_exists($object, $methodName),
            $message,
            $exceptionClass
        );
    }

    /**
     * {@inheritdoc}
     */
    public function optionalPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->optionalPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalBool($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredBool($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalFloat($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredFloat($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalScalar($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredScalar($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalArray($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredArray($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalString($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredString($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalStringNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalObject($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredObject($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalUrl($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredUrl($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalEmail($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredEmail($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalIpAddress($value, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredIpAddress($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the key is null. */
        if (null === $key) {

            return true;
        }

        return $this->requiredKeyExists($key, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function optionalValueExists($value, array $values, $callee, $parameter, $exceptionClass = null)
    {
        /* No additional validations when the value is null. */
        if (null === $value) {

            return true;
        }

        return $this->requiredValueExists($value, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastError()
    {
        return $this->lastError;
    }


    /**
     * Generates the appropriate response for a validation.
     *
     * @param boolean     $validationResult
     * @param string      $message
     * @param string|null $exceptionClass
     *
     * @returns boolean
     *
     * @throws \Exception
     */
    protected function validationResponse($validationResult, $message, $exceptionClass)
    {
        /* Clear the last error message. */
        $this->lastError = null;

        /* Set a new error message in case of validation error. */
        if (false === $validationResult) {
            $this->lastError = $message;
        }

        /* If an exception class was defined the correct exception must be thrown. */
        if (null !== $exceptionClass) {

            throw new $exceptionClass($message);
        }

        /* No exception, just return the result of the validation as a boolean. */
        return $validationResult;
    }
}
