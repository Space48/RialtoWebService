<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderHeader StructType
 * @subpackage Structs
 */
class RialtoWebOrderHeader extends AbstractStructBase
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
     * The SourceId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $SourceId;
    /**
     * The PaymentServiceProvider
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PaymentServiceProvider;
    /**
     * The PaymentTypeString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTypeString;
    /**
     * The PaymentServiceProviderString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentServiceProviderString;
    /**
     * The giftmessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RialtoWebService\StructType\Giftmessage
     */
    public $giftmessage;
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
     * The OfferCode
     * @var string
     */
    public $OfferCode;
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
     * The PSLOutletID
     * @var string
     */
    public $PSLOutletID;
    /**
     * The PSLCountryCode
     * @var string
     */
    public $PSLCountryCode;
    /**
     * The PSLCurrencyCode
     * @var string
     */
    public $PSLCurrencyCode;
    /**
     * The CardNumber
     * @var string
     */
    public $CardNumber;
    /**
     * The StartMonth
     * @var string
     */
    public $StartMonth;
    /**
     * The StartYear
     * @var string
     */
    public $StartYear;
    /**
     * The ExpiryMonth
     * @var string
     */
    public $ExpiryMonth;
    /**
     * The ExpiryYear
     * @var string
     */
    public $ExpiryYear;
    /**
     * The CVV
     * @var string
     */
    public $CVV;
    /**
     * The Issue
     * @var string
     */
    public $Issue;
    /**
     * The SageSecurityCode
     * @var string
     */
    public $SageSecurityCode;
    /**
     * The VendorTransactionId
     * @var string
     */
    public $VendorTransactionId;
    /**
     * Constructor method for RialtoWebOrderHeader
     * @uses RialtoWebOrderHeader::setOrderDate()
     * @uses RialtoWebOrderHeader::setOrderTotal()
     * @uses RialtoWebOrderHeader::setPaymentType()
     * @uses RialtoWebOrderHeader::setOrderDiscount()
     * @uses RialtoWebOrderHeader::setSourceId()
     * @uses RialtoWebOrderHeader::setPaymentServiceProvider()
     * @uses RialtoWebOrderHeader::setPaymentTypeString()
     * @uses RialtoWebOrderHeader::setPaymentServiceProviderString()
     * @uses RialtoWebOrderHeader::setGiftmessage()
     * @uses RialtoWebOrderHeader::setOrderNo()
     * @uses RialtoWebOrderHeader::setMediaCode()
     * @uses RialtoWebOrderHeader::setOfferCode()
     * @uses RialtoWebOrderHeader::setAuthCode()
     * @uses RialtoWebOrderHeader::setCrossRef()
     * @uses RialtoWebOrderHeader::setDelInstrucs()
     * @uses RialtoWebOrderHeader::setPSLOutletID()
     * @uses RialtoWebOrderHeader::setPSLCountryCode()
     * @uses RialtoWebOrderHeader::setPSLCurrencyCode()
     * @uses RialtoWebOrderHeader::setCardNumber()
     * @uses RialtoWebOrderHeader::setStartMonth()
     * @uses RialtoWebOrderHeader::setStartYear()
     * @uses RialtoWebOrderHeader::setExpiryMonth()
     * @uses RialtoWebOrderHeader::setExpiryYear()
     * @uses RialtoWebOrderHeader::setCVV()
     * @uses RialtoWebOrderHeader::setIssue()
     * @uses RialtoWebOrderHeader::setSageSecurityCode()
     * @uses RialtoWebOrderHeader::setVendorTransactionId()
     * @param string $orderDate
     * @param float $orderTotal
     * @param string $paymentType
     * @param float $orderDiscount
     * @param int $sourceId
     * @param string $paymentServiceProvider
     * @param string $paymentTypeString
     * @param string $paymentServiceProviderString
     * @param \RialtoWebService\StructType\Giftmessage $giftmessage
     * @param string $orderNo
     * @param string $mediaCode
     * @param string $offerCode
     * @param string $authCode
     * @param string $crossRef
     * @param string $delInstrucs
     * @param string $pSLOutletID
     * @param string $pSLCountryCode
     * @param string $pSLCurrencyCode
     * @param string $cardNumber
     * @param string $startMonth
     * @param string $startYear
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $cVV
     * @param string $issue
     * @param string $sageSecurityCode
     * @param string $vendorTransactionId
     */
    public function __construct($orderDate = null, $orderTotal = null, $paymentType = null, $orderDiscount = null, $sourceId = null, $paymentServiceProvider = null, $paymentTypeString = null, $paymentServiceProviderString = null, \RialtoWebService\StructType\Giftmessage $giftmessage = null, $orderNo = null, $mediaCode = null, $offerCode = null, $authCode = null, $crossRef = null, $delInstrucs = null, $pSLOutletID = null, $pSLCountryCode = null, $pSLCurrencyCode = null, $cardNumber = null, $startMonth = null, $startYear = null, $expiryMonth = null, $expiryYear = null, $cVV = null, $issue = null, $sageSecurityCode = null, $vendorTransactionId = null)
    {
        $this
            ->setOrderDate($orderDate)
            ->setOrderTotal($orderTotal)
            ->setPaymentType($paymentType)
            ->setOrderDiscount($orderDiscount)
            ->setSourceId($sourceId)
            ->setPaymentServiceProvider($paymentServiceProvider)
            ->setPaymentTypeString($paymentTypeString)
            ->setPaymentServiceProviderString($paymentServiceProviderString)
            ->setGiftmessage($giftmessage)
            ->setOrderNo($orderNo)
            ->setMediaCode($mediaCode)
            ->setOfferCode($offerCode)
            ->setAuthCode($authCode)
            ->setCrossRef($crossRef)
            ->setDelInstrucs($delInstrucs)
            ->setPSLOutletID($pSLOutletID)
            ->setPSLCountryCode($pSLCountryCode)
            ->setPSLCurrencyCode($pSLCurrencyCode)
            ->setCardNumber($cardNumber)
            ->setStartMonth($startMonth)
            ->setStartYear($startYear)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear)
            ->setCVV($cVV)
            ->setIssue($issue)
            ->setSageSecurityCode($sageSecurityCode)
            ->setVendorTransactionId($vendorTransactionId);
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * @uses \RialtoWebService\EnumType\RialtoWebOrderPaymentType::valueIsValid()
     * @uses \RialtoWebService\EnumType\RialtoWebOrderPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\RialtoWebOrderPaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \RialtoWebService\EnumType\RialtoWebOrderPaymentType::getValidValues())), __LINE__);
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setOrderDiscount($orderDiscount = null)
    {
        $this->OrderDiscount = $orderDiscount;
        return $this;
    }
    /**
     * Get SourceId value
     * @return int
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param int $sourceId
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setSourceId($sourceId = null)
    {
        // validation for constraint: int
        if (!is_null($sourceId) && !is_numeric($sourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get PaymentServiceProvider value
     * @return string
     */
    public function getPaymentServiceProvider()
    {
        return $this->PaymentServiceProvider;
    }
    /**
     * Set PaymentServiceProvider value
     * @uses \RialtoWebService\EnumType\RialtoPaymentServiceProviders::valueIsValid()
     * @uses \RialtoWebService\EnumType\RialtoPaymentServiceProviders::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentServiceProvider
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPaymentServiceProvider($paymentServiceProvider = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\RialtoPaymentServiceProviders::valueIsValid($paymentServiceProvider)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentServiceProvider, implode(', ', \RialtoWebService\EnumType\RialtoPaymentServiceProviders::getValidValues())), __LINE__);
        }
        $this->PaymentServiceProvider = $paymentServiceProvider;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * Get PaymentServiceProviderString value
     * @return string|null
     */
    public function getPaymentServiceProviderString()
    {
        return $this->PaymentServiceProviderString;
    }
    /**
     * Set PaymentServiceProviderString value
     * @param string $paymentServiceProviderString
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPaymentServiceProviderString($paymentServiceProviderString = null)
    {
        // validation for constraint: string
        if (!is_null($paymentServiceProviderString) && !is_string($paymentServiceProviderString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentServiceProviderString)), __LINE__);
        }
        $this->PaymentServiceProviderString = $paymentServiceProviderString;
        return $this;
    }
    /**
     * Get giftmessage value
     * @return \RialtoWebService\StructType\Giftmessage|null
     */
    public function getGiftmessage()
    {
        return $this->giftmessage;
    }
    /**
     * Set giftmessage value
     * @param \RialtoWebService\StructType\Giftmessage $giftmessage
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setGiftmessage(\RialtoWebService\StructType\Giftmessage $giftmessage = null)
    {
        $this->giftmessage = $giftmessage;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * Get OfferCode value
     * @return string|null
     */
    public function getOfferCode()
    {
        return $this->OfferCode;
    }
    /**
     * Set OfferCode value
     * @param string $offerCode
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setOfferCode($offerCode = null)
    {
        // validation for constraint: string
        if (!is_null($offerCode) && !is_string($offerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerCode)), __LINE__);
        }
        $this->OfferCode = $offerCode;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
     * Get PSLOutletID value
     * @return string|null
     */
    public function getPSLOutletID()
    {
        return $this->PSLOutletID;
    }
    /**
     * Set PSLOutletID value
     * @param string $pSLOutletID
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPSLOutletID($pSLOutletID = null)
    {
        // validation for constraint: string
        if (!is_null($pSLOutletID) && !is_string($pSLOutletID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pSLOutletID)), __LINE__);
        }
        $this->PSLOutletID = $pSLOutletID;
        return $this;
    }
    /**
     * Get PSLCountryCode value
     * @return string|null
     */
    public function getPSLCountryCode()
    {
        return $this->PSLCountryCode;
    }
    /**
     * Set PSLCountryCode value
     * @param string $pSLCountryCode
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPSLCountryCode($pSLCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($pSLCountryCode) && !is_string($pSLCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pSLCountryCode)), __LINE__);
        }
        $this->PSLCountryCode = $pSLCountryCode;
        return $this;
    }
    /**
     * Get PSLCurrencyCode value
     * @return string|null
     */
    public function getPSLCurrencyCode()
    {
        return $this->PSLCurrencyCode;
    }
    /**
     * Set PSLCurrencyCode value
     * @param string $pSLCurrencyCode
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setPSLCurrencyCode($pSLCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($pSLCurrencyCode) && !is_string($pSLCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pSLCurrencyCode)), __LINE__);
        }
        $this->PSLCurrencyCode = $pSLCurrencyCode;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get StartMonth value
     * @return string|null
     */
    public function getStartMonth()
    {
        return $this->StartMonth;
    }
    /**
     * Set StartMonth value
     * @param string $startMonth
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setStartMonth($startMonth = null)
    {
        // validation for constraint: string
        if (!is_null($startMonth) && !is_string($startMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startMonth)), __LINE__);
        }
        $this->StartMonth = $startMonth;
        return $this;
    }
    /**
     * Get StartYear value
     * @return string|null
     */
    public function getStartYear()
    {
        return $this->StartYear;
    }
    /**
     * Set StartYear value
     * @param string $startYear
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setStartYear($startYear = null)
    {
        // validation for constraint: string
        if (!is_null($startYear) && !is_string($startYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startYear)), __LINE__);
        }
        $this->StartYear = $startYear;
        return $this;
    }
    /**
     * Get ExpiryMonth value
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }
    /**
     * Set ExpiryMonth value
     * @param string $expiryMonth
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expiryMonth) && !is_string($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryMonth)), __LINE__);
        }
        $this->ExpiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get ExpiryYear value
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }
    /**
     * Set ExpiryYear value
     * @param string $expiryYear
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($expiryYear) && !is_string($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryYear)), __LINE__);
        }
        $this->ExpiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get CVV value
     * @return string|null
     */
    public function getCVV()
    {
        return $this->CVV;
    }
    /**
     * Set CVV value
     * @param string $cVV
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setCVV($cVV = null)
    {
        // validation for constraint: string
        if (!is_null($cVV) && !is_string($cVV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVV)), __LINE__);
        }
        $this->CVV = $cVV;
        return $this;
    }
    /**
     * Get Issue value
     * @return string|null
     */
    public function getIssue()
    {
        return $this->Issue;
    }
    /**
     * Set Issue value
     * @param string $issue
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setIssue($issue = null)
    {
        // validation for constraint: string
        if (!is_null($issue) && !is_string($issue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issue)), __LINE__);
        }
        $this->Issue = $issue;
        return $this;
    }
    /**
     * Get SageSecurityCode value
     * @return string|null
     */
    public function getSageSecurityCode()
    {
        return $this->SageSecurityCode;
    }
    /**
     * Set SageSecurityCode value
     * @param string $sageSecurityCode
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setSageSecurityCode($sageSecurityCode = null)
    {
        // validation for constraint: string
        if (!is_null($sageSecurityCode) && !is_string($sageSecurityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sageSecurityCode)), __LINE__);
        }
        $this->SageSecurityCode = $sageSecurityCode;
        return $this;
    }
    /**
     * Get VendorTransactionId value
     * @return string|null
     */
    public function getVendorTransactionId()
    {
        return $this->VendorTransactionId;
    }
    /**
     * Set VendorTransactionId value
     * @param string $vendorTransactionId
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
     */
    public function setVendorTransactionId($vendorTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($vendorTransactionId) && !is_string($vendorTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorTransactionId)), __LINE__);
        }
        $this->VendorTransactionId = $vendorTransactionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoWebOrderHeader
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
