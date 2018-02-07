<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CRMFlags StructType
 * @subpackage Structs
 */
class CRMFlags extends AbstractStructBase
{
    /**
     * The flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\CRMFlag[]
     */
    public $flag;
    /**
     * Constructor method for CRMFlags
     * @uses CRMFlags::setFlag()
     * @param \RialtoWebService\StructType\CRMFlag[] $flag
     */
    public function __construct(array $flag = array())
    {
        $this
            ->setFlag($flag);
    }
    /**
     * Get flag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\CRMFlag[]|null
     */
    public function getFlag()
    {
        return isset($this->flag) ? $this->flag : null;
    }
    /**
     * Set flag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\CRMFlag[] $flag
     * @return \RialtoWebService\StructType\CRMFlags
     */
    public function setFlag(array $flag = array())
    {
        foreach ($flag as $cRMFlagsFlagItem) {
            // validation for constraint: itemType
            if (!$cRMFlagsFlagItem instanceof \RialtoWebService\StructType\CRMFlag) {
                throw new \InvalidArgumentException(sprintf('The flag property can only contain items of \RialtoWebService\StructType\CRMFlag, "%s" given', is_object($cRMFlagsFlagItem) ? get_class($cRMFlagsFlagItem) : gettype($cRMFlagsFlagItem)), __LINE__);
            }
        }
        if (is_null($flag) || (is_array($flag) && empty($flag))) {
            unset($this->flag);
        } else {
            $this->flag = $flag;
        }
        return $this;
    }
    /**
     * Add item to flag value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\CRMFlag $item
     * @return \RialtoWebService\StructType\CRMFlags
     */
    public function addToFlag(\RialtoWebService\StructType\CRMFlag $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\CRMFlag) {
            throw new \InvalidArgumentException(sprintf('The flag property can only contain items of \RialtoWebService\StructType\CRMFlag, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->flag[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\CRMFlags
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
