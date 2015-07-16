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

use EBT\Validator\Model\Validator\Validator;
use EBT\Validator\Service\ValidatorServiceInterface;

class ValidatorService implements ValidatorServiceInterface
{
    /**
     * @var string
     */
    protected $lastError;

    /**
     * {{@inheritDoc}}
     */
    public function requiredZeroPositiveInteger($value)
    {
        $type = gettype($value);
        $message = sprintf(
            'Expected positive integer, "%s" given.',
            ('integer' === $type) ? 'zero or negative integer' : $type
        );

        return $this->validationResponse(
            Validator::requiredZeroPositiveInteger($value),
            $message
        );
    }

    /**
     * {@inheritDoc}
     */
    public function requiredPositiveNumber($value)
    {
        // TODO: Implement requiredPositiveNumber() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredZeroPositiveNumber($value)
    {
        // TODO: Implement requiredZeroPositiveNumber() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredInteger($value)
    {
        // TODO: Implement requiredInteger() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredIntegerRange($value, $min, $max)
    {
        // TODO: Implement requiredIntegerRange() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredNumberRange($value, $min, $max)
    {
        // TODO: Implement requiredNumberRange() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredBool($value)
    {
        // TODO: Implement requiredBool() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredFloat($value)
    {
        // TODO: Implement requiredFloat() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredDouble($value)
    {
        // TODO: Implement requiredDouble() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredScalar($value)
    {
        // TODO: Implement requiredScalar() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredArray($value)
    {
        // TODO: Implement requiredArray() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredArrayNotEmpty($value)
    {
        // TODO: Implement requiredArrayNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredString($value)
    {
        // TODO: Implement requiredString() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredStringNotEmpty($value)
    {
        // TODO: Implement requiredStringNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredNotEmpty($value)
    {
        // TODO: Implement requiredNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredObject($value)
    {
        // TODO: Implement requiredObject() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredUrl($value)
    {
        // TODO: Implement requiredUrl() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredEmail($value)
    {
        // TODO: Implement requiredEmail() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredIpAddress($value)
    {
        // TODO: Implement requiredIpAddress() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredKeyExists($key, array $values)
    {
        // TODO: Implement requiredKeyExists() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredValueExists($value, array $values)
    {
        // TODO: Implement requiredValueExists() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredExistingClass($className)
    {
        // TODO: Implement requiredExistingClass() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredExistingMethod($object, $methodName)
    {
        // TODO: Implement requiredExistingMethod() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalPositiveInteger($value)
    {
        // TODO: Implement optionalPositiveInteger() method.
    }

    /**
     * {@inheritDoc}
     */
    public function requiredPositiveInteger($value)
    {
        // TODO: Implement requiredPositiveInteger() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalZeroPositiveInteger($value)
    {
        // TODO: Implement optionalZeroPositiveInteger() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalPositiveNumber($value)
    {
        // TODO: Implement optionalPositiveNumber() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalZeroPositiveNumber($value)
    {
        // TODO: Implement optionalZeroPositiveNumber() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalInteger($value)
    {
        // TODO: Implement optionalInteger() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalIntegerRange($value, $min, $max)
    {
        // TODO: Implement optionalIntegerRange() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalNumberRange($value, $min, $max)
    {
        // TODO: Implement optionalNumberRange() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalBool($value)
    {
        // TODO: Implement optionalBool() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalFloat($value)
    {
        // TODO: Implement optionalFloat() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalDouble($value)
    {
        // TODO: Implement optionalDouble() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalScalar($value)
    {
        // TODO: Implement optionalScalar() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalArray($value)
    {
        // TODO: Implement optionalArray() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalArrayNotEmpty($value)
    {
        // TODO: Implement optionalArrayNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalString($value)
    {
        // TODO: Implement optionalString() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalStringNotEmpty($value)
    {
        // TODO: Implement optionalStringNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalNotEmpty($value)
    {
        // TODO: Implement optionalNotEmpty() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalObject($value)
    {
        // TODO: Implement optionalObject() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalUrl($value)
    {
        // TODO: Implement optionalUrl() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalEmail($value)
    {
        // TODO: Implement optionalEmail() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalIpAddress($value)
    {
        // TODO: Implement optionalIpAddress() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalKeyExists($key, array $values)
    {
        // TODO: Implement optionalKeyExists() method.
    }

    /**
     * {@inheritDoc}
     */
    public function optionalValueExists($value, array $values)
    {
        // TODO: Implement optionalValueExists() method.
    }

    /**
     * {{@inheritDoc}}
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Sets the last validation error.
     *
     * @param string|null $error
     */
    protected function setLastError($error = null)
    {
        $this->lastError = $error;
    }

    /**
     * Generates the appropriate response for a validation.
     *
     * @param boolean     $validationResult
     * @param string      $message
     *
     * @returns boolean
     */
    protected function validationResponse($validationResult, $message)
    {
        /* Set the error message. */
        $this->lastError = (false === $validationResult)
            ? $message
            : null;

        return $validationResult;
    }
}
