<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderItem StructType
 * @subpackage Structs
 */
class RialtoWebOrderItem extends AbstractStructBase
{
    /**
     * The Qty
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Qty;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate;
    /**
     * The ProductRef
     * @var string
     */
    public $ProductRef;
    /**
     * The ProductDesc
     * @var string
     */
    public $ProductDesc;
    /**
     * The OfferCode
     * @var string
     */
    public $OfferCode;
    /**
     * Constructor method for RialtoWebOrderItem
     * @uses RialtoWebOrderItem::setQty()
     * @uses RialtoWebOrderItem::setRate()
     * @uses RialtoWebOrderItem::setProductRef()
     * @uses RialtoWebOrderItem::setProductDesc()
     * @uses RialtoWebOrderItem::setOfferCode()
     * @param int $qty
     * @param float $rate
     * @param string $productRef
     * @param string $productDesc
     * @param string $offerCode
     */
    public function __construct($qty = null, $rate = null, $productRef = null, $productDesc = null, $offerCode = null)
    {
        $this
            ->setQty($qty)
            ->setRate($rate)
            ->setProductRef($productRef)
            ->setProductDesc($productDesc)
            ->setOfferCode($offerCode);
    }
    /**
     * Get Qty value
     * @return int
     */
    public function getQty()
    {
        return $this->Qty;
    }
    /**
     * Set Qty value
     * @param int $qty
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
     */
    public function setQty($qty = null)
    {
        // validation for constraint: int
        if (!is_null($qty) && !is_numeric($qty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($qty)), __LINE__);
        }
        $this->Qty = $qty;
        return $this;
    }
    /**
     * Get Rate value
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param float $rate
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
     */
    public function setRate($rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get ProductRef value
     * @return string|null
     */
    public function getProductRef()
    {
        return $this->ProductRef;
    }
    /**
     * Set ProductRef value
     * @param string $productRef
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
     */
    public function setProductRef($productRef = null)
    {
        // validation for constraint: string
        if (!is_null($productRef) && !is_string($productRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productRef)), __LINE__);
        }
        $this->ProductRef = $productRef;
        return $this;
    }
    /**
     * Get ProductDesc value
     * @return string|null
     */
    public function getProductDesc()
    {
        return $this->ProductDesc;
    }
    /**
     * Set ProductDesc value
     * @param string $productDesc
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
     */
    public function setProductDesc($productDesc = null)
    {
        // validation for constraint: string
        if (!is_null($productDesc) && !is_string($productDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productDesc)), __LINE__);
        }
        $this->ProductDesc = $productDesc;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoWebOrderItem
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
