<?php

namespace RialtoWebService\EnumType;

/**
 * This class stands for WebOrderPaymentType EnumType
 * @subpackage Enumerations
 */
class WebOrderPaymentType
{
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Constant for value 'CP'
     * @return string 'CP'
     */
    const VALUE_CP = 'CP';
    /**
     * Constant for value 'PY'
     * @return string 'PY'
     */
    const VALUE_PY = 'PY';
    /**
     * Constant for value 'CA'
     * @return string 'CA'
     */
    const VALUE_CA = 'CA';
    /**
     * Constant for value 'WP'
     * @return string 'WP'
     */
    const VALUE_WP = 'WP';
    /**
     * Constant for value 'BT'
     * @return string 'BT'
     */
    const VALUE_BT = 'BT';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_CC
     * @uses self::VALUE_PP
     * @uses self::VALUE_CP
     * @uses self::VALUE_PY
     * @uses self::VALUE_CA
     * @uses self::VALUE_WP
     * @uses self::VALUE_BT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CC,
            self::VALUE_PP,
            self::VALUE_CP,
            self::VALUE_PY,
            self::VALUE_CA,
            self::VALUE_WP,
            self::VALUE_BT,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
