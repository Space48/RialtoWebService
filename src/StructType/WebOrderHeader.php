<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderHeader StructType
 * @subpackage Structs
 */
class WebOrderHeader extends AbstractStructBase
{
    /**
     * The OrderDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $OrderDate;
    /**
     * The OrderTotal
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $OrderTotal;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentType;
    /**
     * The OrderDiscount
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $OrderDiscount;
    /**
     * The PaymentTypeString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTypeString;
    /**
     * The OrderNo
     * @var string
     */
    public $OrderNo;
    /**
     * The MediaCode
     * @var string
     */
    public $MediaCode;
    /**
     * The AuthCode
     * @var string
     */
    public $AuthCode;
    /**
     * The CrossRef
     * @var string
     */
    public $CrossRef;
    /**
     * The DelInstrucs
     * @var string
     */
    public $DelInstrucs;
    /**
     * Constructor method for WebOrderHeader
     * @uses WebOrderHeader::setOrderDate()
     * @uses WebOrderHeader::setOrderTotal()
     * @uses WebOrderHeader::setPaymentType()
     * @uses WebOrderHeader::setOrderDiscount()
     * @uses WebOrderHeader::setPaymentTypeString()
     * @uses WebOrderHeader::setOrderNo()
     * @uses WebOrderHeader::setMediaCode()
     * @uses WebOrderHeader::setAuthCode()
     * @uses WebOrderHeader::setCrossRef()
     * @uses WebOrderHeader::setDelInstrucs()
     * @param string $orderDate
     * @param float $orderTotal
     * @param string $paymentType
     * @param float $orderDiscount
     * @param string $paymentTypeString
     * @param string $orderNo
     * @param string $mediaCode
     * @param string $authCode
     * @param string $crossRef
     * @param string $delInstrucs
     */
    public function __construct($orderDate = null, $orderTotal = null, $paymentType = null, $orderDiscount = null, $paymentTypeString = null, $orderNo = null, $mediaCode = null, $authCode = null, $crossRef = null, $delInstrucs = null)
    {
        $this
            ->setOrderDate($orderDate)
            ->setOrderTotal($orderTotal)
            ->setPaymentType($paymentType)
            ->setOrderDiscount($orderDiscount)
            ->setPaymentTypeString($paymentTypeString)
            ->setOrderNo($orderNo)
            ->setMediaCode($mediaCode)
            ->setAuthCode($authCode)
            ->setCrossRef($crossRef)
            ->setDelInstrucs($delInstrucs);
    }
    /**
     * Get OrderDate value
     * @return string
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $orderDate
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setOrderDate($orderDate = null)
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderDate)), __LINE__);
        }
        $this->OrderDate = $orderDate;
        return $this;
    }
    /**
     * Get OrderTotal value
     * @return float
     */
    public function getOrderTotal()
    {
        return $this->OrderTotal;
    }
    /**
     * Set OrderTotal value
     * @param float $orderTotal
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setOrderTotal($orderTotal = null)
    {
        $this->OrderTotal = $orderTotal;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \RialtoWebService\EnumType\WebOrderPaymentType::valueIsValid()
     * @uses \RialtoWebService\EnumType\WebOrderPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\WebOrderPaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \RialtoWebService\EnumType\WebOrderPaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get OrderDiscount value
     * @return float
     */
    public function getOrderDiscount()
    {
        return $this->OrderDiscount;
    }
    /**
     * Set OrderDiscount value
     * @param float $orderDiscount
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setOrderDiscount($orderDiscount = null)
    {
        $this->OrderDiscount = $orderDiscount;
        return $this;
    }
    /**
     * Get PaymentTypeString value
     * @return string|null
     */
    public function getPaymentTypeString()
    {
        return $this->PaymentTypeString;
    }
    /**
     * Set PaymentTypeString value
     * @param string $paymentTypeString
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setPaymentTypeString($paymentTypeString = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTypeString) && !is_string($paymentTypeString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTypeString)), __LINE__);
        }
        $this->PaymentTypeString = $paymentTypeString;
        return $this;
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
     * @return \RialtoWebService\StructType\WebOrderHeader
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
     * Get MediaCode value
     * @return string|null
     */
    public function getMediaCode()
    {
        return $this->MediaCode;
    }
    /**
     * Set MediaCode value
     * @param string $mediaCode
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setMediaCode($mediaCode = null)
    {
        // validation for constraint: string
        if (!is_null($mediaCode) && !is_string($mediaCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mediaCode)), __LINE__);
        }
        $this->MediaCode = $mediaCode;
        return $this;
    }
    /**
     * Get AuthCode value
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }
    /**
     * Set AuthCode value
     * @param string $authCode
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setAuthCode($authCode = null)
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authCode)), __LINE__);
        }
        $this->AuthCode = $authCode;
        return $this;
    }
    /**
     * Get CrossRef value
     * @return string|null
     */
    public function getCrossRef()
    {
        return $this->CrossRef;
    }
    /**
     * Set CrossRef value
     * @param string $crossRef
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setCrossRef($crossRef = null)
    {
        // validation for constraint: string
        if (!is_null($crossRef) && !is_string($crossRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($crossRef)), __LINE__);
        }
        $this->CrossRef = $crossRef;
        return $this;
    }
    /**
     * Get DelInstrucs value
     * @return string|null
     */
    public function getDelInstrucs()
    {
        return $this->DelInstrucs;
    }
    /**
     * Set DelInstrucs value
     * @param string $delInstrucs
     * @return \RialtoWebService\StructType\WebOrderHeader
     */
    public function setDelInstrucs($delInstrucs = null)
    {
        // validation for constraint: string
        if (!is_null($delInstrucs) && !is_string($delInstrucs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delInstrucs)), __LINE__);
        }
        $this->DelInstrucs = $delInstrucs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrderHeader
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
