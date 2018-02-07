<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoOrderDetailList StructType
 * @subpackage Structs
 */
class RialtoOrderDetailList extends AbstractStructBase
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoOrderDetails
     */
    public $orders;
    /**
     * Constructor method for RialtoOrderDetailList
     * @uses RialtoOrderDetailList::setOrders()
     * @param \RialtoWebService\StructType\RialtoOrderDetails $orders
     */
    public function __construct(\RialtoWebService\StructType\RialtoOrderDetails $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \RialtoWebService\StructType\RialtoOrderDetails
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \RialtoWebService\StructType\RialtoOrderDetails $orders
     * @return \RialtoWebService\StructType\RialtoOrderDetailList
     */
    public function setOrders(\RialtoWebService\StructType\RialtoOrderDetails $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoOrderDetailList
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
