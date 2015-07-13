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
     * {@inheritdoc}
     */
    public function requiredPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredPositiveInteger() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredZeroPositiveInteger() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredZeroPositiveNumber() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredInteger() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredIntegerRange() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredBool($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredBool() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredFloat($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredFloat() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredScalar($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredScalar() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredArray($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredArray() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredArrayNotEmpty() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredArrayValuesType(array $values, $type, $callee, $parameter, $exceptionClass)
    {
        // TODO: Implement requiredArrayValuesType() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredString($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredString() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredStringNotEmpty() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredNotEmpty() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredObject($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredObject() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredUrl($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredUrl() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredEmail($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredEmail() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredIpAddress($value, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredIpAddress() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredKeyExists() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredValueExists($value, array $values, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredValueExists() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredCustom() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredExistingClass($className, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredExistingClass() method.
    }

    /**
     * {@inheritdoc}
     */
    public function requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass = null)
    {
        // TODO: Implement requiredExistingMethod() method.
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
}
