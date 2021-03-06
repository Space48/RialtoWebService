<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrdersResponseOrder StructType
 * @subpackage Structs
 */
class WebOrdersResponseOrder extends AbstractStructBase
{
    /**
     * The OrderNo
     * @var string
     */
    public $OrderNo;
    /**
     * Constructor method for WebOrdersResponseOrder
     * @uses WebOrdersResponseOrder::setOrderNo()
     * @param string $orderNo
     */
    public function __construct($orderNo = null)
    {
        $this
            ->setOrderNo($orderNo);
    }
    /**
     * Get OrderNo value
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param string $orderNo
     * @return \RialtoWebService\StructType\WebOrdersResponseOrder
     */
    public function setOrderNo($orderNo = null)
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrdersResponseOrder
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
