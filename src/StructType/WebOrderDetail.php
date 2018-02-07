<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderDetail StructType
 * @subpackage Structs
 */
class WebOrderDetail extends AbstractStructBase
{
    /**
     * The orderheader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\WebOrderHeader
     */
    public $orderheader;
    /**
     * The orderitems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\WebOrderItems
     */
    public $orderitems;
    /**
     * The customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\WebOrderCustomer
     */
    public $customer;
    /**
     * The deliveryaddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\WebOrderAddress
     */
    public $deliveryaddress;
    /**
     * The addinfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\AdditionalData
     */
    public $addinfo;
    /**
     * Constructor method for WebOrderDetail
     * @uses WebOrderDetail::setOrderheader()
     * @uses WebOrderDetail::setOrderitems()
     * @uses WebOrderDetail::setCustomer()
     * @uses WebOrderDetail::setDeliveryaddress()
     * @uses WebOrderDetail::setAddinfo()
     * @param \RialtoWebService\StructType\WebOrderHeader $orderheader
     * @param \RialtoWebService\StructType\WebOrderItems $orderitems
     * @param \RialtoWebService\StructType\WebOrderCustomer $customer
     * @param \RialtoWebService\StructType\WebOrderAddress $deliveryaddress
     * @param \RialtoWebService\StructType\AdditionalData $addinfo
     */
    public function __construct(\RialtoWebService\StructType\WebOrderHeader $orderheader = null, \RialtoWebService\StructType\WebOrderItems $orderitems = null, \RialtoWebService\StructType\WebOrderCustomer $customer = null, \RialtoWebService\StructType\WebOrderAddress $deliveryaddress = null, \RialtoWebService\StructType\AdditionalData $addinfo = null)
    {
        $this
            ->setOrderheader($orderheader)
            ->setOrderitems($orderitems)
            ->setCustomer($customer)
            ->setDeliveryaddress($deliveryaddress)
            ->setAddinfo($addinfo);
    }
    /**
     * Get orderheader value
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function getOrderheader()
    {
        return $this->orderheader;
    }
    /**
     * Set orderheader value
     * @param \RialtoWebService\StructType\WebOrderHeader $orderheader
     * @return \RialtoWebService\StructType\WebOrderDetail
     */
    public function setOrderheader(\RialtoWebService\StructType\WebOrderHeader $orderheader = null)
    {
        $this->orderheader = $orderheader;
        return $this;
    }
    /**
     * Get orderitems value
     * @return \RialtoWebService\StructType\WebOrderItems
     */
    public function getOrderitems()
    {
        return $this->orderitems;
    }
    /**
     * Set orderitems value
     * @param \RialtoWebService\StructType\WebOrderItems $orderitems
     * @return \RialtoWebService\StructType\WebOrderDetail
     */
    public function setOrderitems(\RialtoWebService\StructType\WebOrderItems $orderitems = null)
    {
        $this->orderitems = $orderitems;
        return $this;
    }
    /**
     * Get customer value
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \RialtoWebService\StructType\WebOrderCustomer $customer
     * @return \RialtoWebService\StructType\WebOrderDetail
     */
    public function setCustomer(\RialtoWebService\StructType\WebOrderCustomer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * Get deliveryaddress value
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function getDeliveryaddress()
    {
        return $this->deliveryaddress;
    }
    /**
     * Set deliveryaddress value
     * @param \RialtoWebService\StructType\WebOrderAddress $deliveryaddress
     * @return \RialtoWebService\StructType\WebOrderDetail
     */
    public function setDeliveryaddress(\RialtoWebService\StructType\WebOrderAddress $deliveryaddress = null)
    {
        $this->deliveryaddress = $deliveryaddress;
        return $this;
    }
    /**
     * Get addinfo value
     * @return \RialtoWebService\StructType\AdditionalData
     */
    public function getAddinfo()
    {
        return $this->addinfo;
    }
    /**
     * Set addinfo value
     * @param \RialtoWebService\StructType\AdditionalData $addinfo
     * @return \RialtoWebService\StructType\WebOrderDetail
     */
    public function setAddinfo(\RialtoWebService\StructType\AdditionalData $addinfo = null)
    {
        $this->addinfo = $addinfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrderDetail
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
