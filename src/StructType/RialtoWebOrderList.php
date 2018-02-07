<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderList StructType
 * @subpackage Structs
 */
class RialtoWebOrderList extends AbstractStructBase
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderDetails
     */
    public $orders;
    /**
     * Constructor method for RialtoWebOrderList
     * @uses RialtoWebOrderList::setOrders()
     * @param \RialtoWebService\StructType\RialtoWebOrderDetails $orders
     */
    public function __construct(\RialtoWebService\StructType\RialtoWebOrderDetails $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \RialtoWebService\StructType\RialtoWebOrderDetails
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \RialtoWebService\StructType\RialtoWebOrderDetails $orders
     * @return \RialtoWebService\StructType\RialtoWebOrderList
     */
    public function setOrders(\RialtoWebService\StructType\RialtoWebOrderDetails $orders = null)
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
     * @return \RialtoWebService\StructType\RialtoWebOrderList
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
