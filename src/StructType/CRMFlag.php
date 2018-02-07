<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CRMFlag StructType
 * @subpackage Structs
 */
class CRMFlag extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Value;
    /**
     * Constructor method for CRMFlag
     * @uses CRMFlag::setType()
     * @uses CRMFlag::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \RialtoWebService\EnumType\RialtoCRMFlagType::valueIsValid()
     * @uses \RialtoWebService\EnumType\RialtoCRMFlagType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \RialtoWebService\StructType\CRMFlag
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\RialtoCRMFlagType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \RialtoWebService\EnumType\RialtoCRMFlagType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @uses \RialtoWebService\EnumType\RialtoCRMFlagValue::valueIsValid()
     * @uses \RialtoWebService\EnumType\RialtoCRMFlagValue::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $value
     * @return \RialtoWebService\StructType\CRMFlag
     */
    public function setValue($value = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\RialtoCRMFlagValue::valueIsValid($value)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $value, implode(', ', \RialtoWebService\EnumType\RialtoCRMFlagValue::getValidValues())), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\CRMFlag
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
