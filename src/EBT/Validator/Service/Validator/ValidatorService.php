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
     * Constructor.
     */
    public function __construct()
    {
        $this->lastError = null;
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNotNull($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNotNull($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected not null, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNull($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNull($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredPositiveInteger($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive integer, \'%s\' given.',
            ('integer' === $type) ? 'zero or negative integer' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredZeroPositiveInteger($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredZeroPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive integer, \'%s\' given.',
            ('integer' === $type) ? 'negative integer' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredPositiveNumeric($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredPositiveNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive numeric, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative numeric' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredZeroPositiveNumeric($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredZeroPositiveNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive numeric, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'negative numeric' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredInteger($value, $suppressException = true, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected integer, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredIntegerRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredIntegerRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects integer in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNumericRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNumericRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects numeric in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredBool($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredBool($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected boolean, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected float, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredScalar($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredScalar($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected scalar, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredArray($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredArray($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredArrayNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredArrayNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = 'array' === gettype($value) ? 'empty array' : gettype($value);
        $this->lastError = sprintf(
            'Expected array not empty, \'%s\' given.',
            $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredString($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredString($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected string, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredStringNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredStringNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected string not empty, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected not empty, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected empty, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredObject($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredObject($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected object, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredUrl($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredUrl($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected URL, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredEmail($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredEmail($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected email, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredIpAddress($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredIpAddress($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected IP address, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredExistingKey($key, array $values, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredExistingKey($key, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array to contain key \'%s\'.',
            $key
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredExistingValue($value, array $values, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredExistingValue($value, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected array to contain value \'%s\'.',
            $value
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredExistingClass($className, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredExistingClass($className)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected class name, \'%s\' given.',
            $className
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredExistingMethod($object, $methodName, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredExistingMethod($object, $methodName)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected existing method for class \'%s\', \'%s\' given.',
            is_object($object) ? get_class($object) : sprintf('[NOT AN OBJECT: %s]', gettype($object)),
            $methodName
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalPositiveInteger($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive integer, \'%s\' given.',
            ('integer' === $type) ? 'zero or negative integer' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalZeroPositiveInteger($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalZeroPositiveInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive integer, \'%s\' given.',
            ('integer' === $type) ? 'negative integer' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalPositiveNumeric($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalPositiveNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive numeric, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative numeric' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalZeroPositiveNumeric($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalZeroPositiveNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive numeric, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'negative numeric' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalInteger($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalInteger($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or integer, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalIntegerRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalIntegerRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or integer in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalNumericRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalNumericRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or numeric in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalBool($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalBool($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or boolean, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or float, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalScalar($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalScalar($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or scalar, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalArray($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalArray($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalArrayNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalArrayNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = 'array' === gettype($value) ? 'empty array' : gettype($value);
        $this->lastError = sprintf(
            'Expected null or array not empty, \'%s\' given.',
            $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalString($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalString($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or string, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalStringNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalStringNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or string not empty, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalNotEmpty($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalNotEmpty($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or not empty, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalObject($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalObject($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or object, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalUrl($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalUrl($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or URL, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalEmail($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalEmail($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or email, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalIpAddress($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalIpAddress($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or IP address, \'%s\' given.',
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalExistingKey($key, array $values, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalExistingKey($key, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array to contain key \'%s\'.',
            $key
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalExistingValue($value, array $values, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalExistingValue($value, $values)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or array to contain value \'%s\'.',
            $value
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredPositiveFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredPositiveFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive float, \'%s\' given.',
            ('double' === $type) ? 'zero or negative float' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredZeroPositiveFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredZeroPositiveFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive float, \'%s\' given.',
            ('double' === $type) ? 'negative float' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredFloatRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredFloatRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects float in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalPositiveFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalPositiveFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive float, \'%s\' given.',
            ('double' === $type) ? 'zero or negative float' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalZeroPositiveFloat($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalZeroPositiveFloat($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive float, \'%s\' given.',
            ('double' === $type) ? 'negative float' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalFloatRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalFloatRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or float in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected number, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or number, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNumeric($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected numeric, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalNumeric($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalNumeric($value)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expected null or numeric, \'%s\' given.',
            gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredPositiveNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected positive number, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative number' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredZeroPositiveNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredZeroPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected zero or positive number, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'negative number' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isRequiredNumberRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isRequiredNumberRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects number in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalPositiveNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null or positive number, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'zero or negative number' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalZeroPositiveNumber($value, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalZeroPositiveNumber($value)) {
            return true;
        }

        /* Set the error message. */
        $type            = gettype($value);
        $this->lastError = sprintf(
            'Expected null, zero or positive number, \'%s\' given.',
            ('integer' === $type || 'double' === $type) ? 'negative number' : $type
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function isOptionalNumberRange($value, $min, $max, $suppressException = true)
    {
        /* Clear the last error. */
        $this->lastError = null;

        /* If valid just return true. */
        if (Validator::isOptionalNumberRange($value, $min, $max)) {
            return true;
        }

        /* Set the error message. */
        $this->lastError = sprintf(
            'Expects null or number in range [%d, %d], \'%d\' given.',
            $min,
            $max,
            is_scalar($value) ? $value : gettype($value)
        );

        return $this->validationFailed($suppressException);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Sets the error message and returns false or throws an exception, as needed.
     *
     * @param bool $suppressException Indicates if an exception should or not be thrown.
     *
     * @return bool
     *
     * @throws ValidationException
     */
    protected function validationFailed($suppressException)
    {
        if ($suppressException) {

            return false;
        }

        throw new ValidationException($this->lastError);
    }
}
