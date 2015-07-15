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

use EBT\Validator\Model\ValidatorInterface;
use EBT\Validator\Service\Validator\ValidatorService;
use EBT\Validator\Service\ValidatorServiceInterface;

class Validator implements ValidatorInterface
{
    /**
     * @var ValidatorServiceInterface
     */
    protected static $instance;

    /**
     * {@inheritDoc}
     */
    public static function requiredPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredZeroPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredZeroPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredBool($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredBool($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredFloat($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredFloat($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredScalar($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredScalar($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredArray($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredArray($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredArrayNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredString($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredString($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredStringNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredObject($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredObject($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredUrl($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredUrl($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredEmail($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredEmail($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredIpAddress($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredIpAddress($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredKeyExists($key, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredValueExists($value, array $values, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredValueExists($value, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredCustom($condition, $partialMessage, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredExistingClass($className, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredExistingClass($className, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->requiredExistingMethod($object, $methodName, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalZeroPositiveInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalZeroPositiveInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalZeroPositiveNumber($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalZeroPositiveNumber($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalInteger($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalInteger($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalIntegerRange($value, $min, $max, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalBool($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalBool($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalFloat($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalFloat($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalScalar($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalScalar($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalArray($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalArray($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalArrayNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalArrayNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalString($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalString($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalStringNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalStringNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalNotEmpty($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalNotEmpty($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalObject($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalObject($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalUrl($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalUrl($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalEmail($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalEmail($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalIpAddress($value, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalIpAddress($value, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalKeyExists($key, array $values, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalKeyExists($key, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function optionalValueExists($value, array $values, $callee, $parameter, $exceptionClass = null)
    {
        return self::getInstance()->optionalValueExists($value, $values, $callee, $parameter, $exceptionClass);
    }

    /**
     * {@inheritDoc}
     */
    public static function getLastError()
    {
        return self::getInstance()->getLastError();
    }

    /**
     * Retrieves the singleton validator service instance, and creates a new one if needed.
     *
     * @return ValidatorService|ValidatorServiceInterface
     */
    protected static function getInstance()
    {
        return self::$instance instanceof ValidatorServiceInterface
            ? self::$instance
            : self::$instance = new ValidatorService();
    }
}
