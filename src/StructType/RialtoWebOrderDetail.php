<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderDetail StructType
 * @subpackage Structs
 */
class RialtoWebOrderDetail extends AbstractStructBase
{
    /**
     * The orderheader
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public $orderheader;
    /**
     * The orderitems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderItems
     */
    public $orderitems;
    /**
     * The customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderCustomer
     */
    public $customer;
    /**
     * The deliveryaddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderAddress
     */
    public $deliveryaddress;
    /**
     * The addinfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoAdditionalData
     */
    public $addinfo;
    /**
     * The membership
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoMembership
     */
    public $membership;
    /**
     * The paymentschedule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoPaymentSchedule
     */
    public $paymentschedule;
    /**
     * Constructor method for RialtoWebOrderDetail
     * @uses RialtoWebOrderDetail::setOrderheader()
     * @uses RialtoWebOrderDetail::setOrderitems()
     * @uses RialtoWebOrderDetail::setCustomer()
     * @uses RialtoWebOrderDetail::setDeliveryaddress()
     * @uses RialtoWebOrderDetail::setAddinfo()
     * @uses RialtoWebOrderDetail::setMembership()
     * @uses RialtoWebOrderDetail::setPaymentschedule()
     * @param \RialtoWebService\StructType\RialtoWebOrderHeader $orderheader
     * @param \RialtoWebService\StructType\RialtoWebOrderItems $orderitems
     * @param \RialtoWebService\StructType\RialtoWebOrderCustomer $customer
     * @param \RialtoWebService\StructType\RialtoWebOrderAddress $deliveryaddress
     * @param \RialtoWebService\StructType\RialtoAdditionalData $addinfo
     * @param \RialtoWebService\StructType\RialtoMembership $membership
     * @param \RialtoWebService\StructType\RialtoPaymentSchedule $paymentschedule
     */
    public function __construct(\RialtoWebService\StructType\RialtoWebOrderHeader $orderheader = null, \RialtoWebService\StructType\RialtoWebOrderItems $orderitems = null, \RialtoWebService\StructType\RialtoWebOrderCustomer $customer = null, \RialtoWebService\StructType\RialtoWebOrderAddress $deliveryaddress = null, \RialtoWebService\StructType\RialtoAdditionalData $addinfo = null, \RialtoWebService\StructType\RialtoMembership $membership = null, \RialtoWebService\StructType\RialtoPaymentSchedule $paymentschedule = null)
    {
        $this
            ->setOrderheader($orderheader)
            ->setOrderitems($orderitems)
            ->setCustomer($customer)
            ->setDeliveryaddress($deliveryaddress)
            ->setAddinfo($addinfo)
            ->setMembership($membership)
            ->setPaymentschedule($paymentschedule);
    }
    /**
     * Get orderheader value
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function getOrderheader()
    {
        return $this->orderheader;
    }
    /**
     * Set orderheader value
     * @param \RialtoWebService\StructType\RialtoWebOrderHeader $orderheader
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setOrderheader(\RialtoWebService\StructType\RialtoWebOrderHeader $orderheader = null)
    {
        $this->orderheader = $orderheader;
        return $this;
    }
    /**
     * Get orderitems value
     * @return \RialtoWebService\StructType\RialtoWebOrderItems
     */
    public function getOrderitems()
    {
        return $this->orderitems;
    }
    /**
     * Set orderitems value
     * @param \RialtoWebService\StructType\RialtoWebOrderItems $orderitems
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setOrderitems(\RialtoWebService\StructType\RialtoWebOrderItems $orderitems = null)
    {
        $this->orderitems = $orderitems;
        return $this;
    }
    /**
     * Get customer value
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \RialtoWebService\StructType\RialtoWebOrderCustomer $customer
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setCustomer(\RialtoWebService\StructType\RialtoWebOrderCustomer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * Get deliveryaddress value
     * @return \RialtoWebService\StructType\RialtoWebOrderAddress
     */
    public function getDeliveryaddress()
    {
        return $this->deliveryaddress;
    }
    /**
     * Set deliveryaddress value
     * @param \RialtoWebService\StructType\RialtoWebOrderAddress $deliveryaddress
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setDeliveryaddress(\RialtoWebService\StructType\RialtoWebOrderAddress $deliveryaddress = null)
    {
        $this->deliveryaddress = $deliveryaddress;
        return $this;
    }
    /**
     * Get addinfo value
     * @return \RialtoWebService\StructType\RialtoAdditionalData
     */
    public function getAddinfo()
    {
        return $this->addinfo;
    }
    /**
     * Set addinfo value
     * @param \RialtoWebService\StructType\RialtoAdditionalData $addinfo
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setAddinfo(\RialtoWebService\StructType\RialtoAdditionalData $addinfo = null)
    {
        $this->addinfo = $addinfo;
        return $this;
    }
    /**
     * Get membership value
     * @return \RialtoWebService\StructType\RialtoMembership
     */
    public function getMembership()
    {
        return $this->membership;
    }
    /**
     * Set membership value
     * @param \RialtoWebService\StructType\RialtoMembership $membership
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setMembership(\RialtoWebService\StructType\RialtoMembership $membership = null)
    {
        $this->membership = $membership;
        return $this;
    }
    /**
     * Get paymentschedule value
     * @return \RialtoWebService\StructType\RialtoPaymentSchedule
     */
    public function getPaymentschedule()
    {
        return $this->paymentschedule;
    }
    /**
     * Set paymentschedule value
     * @param \RialtoWebService\StructType\RialtoPaymentSchedule $paymentschedule
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
     */
    public function setPaymentschedule(\RialtoWebService\StructType\RialtoPaymentSchedule $paymentschedule = null)
    {
        $this->paymentschedule = $paymentschedule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoWebOrderDetail
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
