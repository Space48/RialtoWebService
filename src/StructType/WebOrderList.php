<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderList StructType
 * @subpackage Structs
 */
class WebOrderList extends AbstractStructBase
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\WebOrderDetails
     */
    public $orders;
    /**
     * Constructor method for WebOrderList
     * @uses WebOrderList::setOrders()
     * @param \RialtoWebService\StructType\WebOrderDetails $orders
     */
    public function __construct(\RialtoWebService\StructType\WebOrderDetails $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \RialtoWebService\StructType\WebOrderDetails
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \RialtoWebService\StructType\WebOrderDetails $orders
     * @return \RialtoWebService\StructType\WebOrderList
     */
    public function setOrders(\RialtoWebService\StructType\WebOrderDetails $orders = null)
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
     * @return \RialtoWebService\StructType\WebOrderList
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
