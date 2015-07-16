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

use EBT\Validator\Exception\ValidationException;
use EBT\Validator\Model\Validator\Validator;
use EBT\Validator\Service\ValidatorServiceInterface;

class ValidatorService implements ValidatorServiceInterface
{
    /**
     * @var string
     */
    protected $lastError;

    /**
     * @var boolean
     */
    protected $exceptionEnabled;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->lastError        = null;
        $this->exceptionEnabled = false;
    }

    /**
     * {@inheritDoc}
     */
    public function requiredPositiveInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive integer, "%s" given.',
            ('integer' === $type) ? 'zero or negative integer' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredZeroPositiveInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredZeroPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive integer, "%s" given.',
            ('integer' === $type) ? 'negative integer' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredPositiveNumber($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive number, "%s" given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative number' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredZeroPositiveNumber($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredZeroPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive number, "%s" given.',
            ('integer' === $type || 'double' === $type) ? 'negative number' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected integer, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredIntegerRange($value, $min, $max)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredIntegerRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects integer in range [%d, %d], "%d" given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredNumberRange($value, $min, $max)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredNumberRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects number in range [%d, %d], "%d" given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredBool($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredBool($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected boolean, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredFloat($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected float, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredDouble($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredDouble($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected double, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredScalar($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredScalar($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected scalar, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredArray($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredArray($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredArrayNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredArrayNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = 'array' === gettype($value) ? 'empty array' : gettype($value);
        $this->lastError = sprintf(
            'Expected array not empty, "%s" given.',
            $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredString($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredString($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected string, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredStringNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredStringNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected string not empty, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected not empty, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredObject($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredObject($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected object, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredUrl($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredUrl($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected URL, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredEmail($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredEmail($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected email, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredIpAddress($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredIpAddress($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected IP address, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredKeyExists($key, array $values)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredKeyExists($key, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array to contain key "%s".',
            $key
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredValueExists($value, array $values)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredValueExists($value, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array to contain value "%s".',
            $value
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredExistingClass($className)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredExistingClass($className)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected class name, "%s" given.',
            $className
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function requiredExistingMethod($object, $methodName)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::requiredExistingMethod($object, $methodName)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected existing method for class "%s", "%s" given.',
            is_object($object) ? get_class($object) : sprintf('<NOT AN OBJECT: %s>', gettype($object)),
            $methodName
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalPositiveInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive integer, "%s" given.',
            ('integer' === $type) ? 'zero or negative integer' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalZeroPositiveInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalZeroPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive integer, "%s" given.',
            ('integer' === $type) ? 'negative integer' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalPositiveNumber($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive number, "%s" given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative number' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalZeroPositiveNumber($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalZeroPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive number, "%s" given.',
            ('integer' === $type || 'double' === $type) ? 'negative number' : $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalInteger($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or integer, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalIntegerRange($value, $min, $max)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalIntegerRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or integer in range [%d, %d], "%d" given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalNumberRange($value, $min, $max)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalNumberRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or number in range [%d, %d], "%d" given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalBool($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalBool($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or boolean, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalFloat($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or float, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalDouble($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalDouble($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or double, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalScalar($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalScalar($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or scalar, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalArray($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalArray($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalArrayNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalArrayNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = 'array' === gettype($value) ? 'empty array' : gettype($value);
        $this->lastError = sprintf(
            'Expected null or array not empty, "%s" given.',
            $type
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalString($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalString($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or string, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalStringNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalStringNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or string not empty, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalNotEmpty($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or not empty, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalObject($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalObject($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or object, "%s" given.',
            gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalUrl($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalUrl($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or URL, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalEmail($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalEmail($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or email, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalIpAddress($value)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalIpAddress($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or IP address, "%s" given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalKeyExists($key, array $values)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalKeyExists($key, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array to contain key "%s".',
            $key
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function optionalValueExists($value, array $values)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::optionalValueExists($value, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array to contain value "%s".',
            $value
        );

        return $this->validationFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Enables exceptions on failed validations.
     *
     * @return ValidatorService
     */
    public function enableExceptions()
    {
        $this->exceptionEnabled = true;

        return $this;
    }

    /**
     * Disables exceptions on failed validations.
     *
     * @return ValidatorService
     */
    public function disableExceptions()
    {
        $this->exceptionEnabled = false;

        return $this;
    }

    /**
     * Sets the error message and returns false or throws an exception, as needed.
     *
     * @return boolean
     *
     * @throws ValidationException
     */
    protected function validationFailed()
    {
        /* Throws an exception if they are enabled, or just return false. */
        if ($this->exceptionEnabled) {

            throw new ValidationException($this->lastError);
        }

        return false;
    }
}
