<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderItem StructType
 * @subpackage Structs
 */
class WebOrderItem extends AbstractStructBase
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
     * Constructor method for WebOrderItem
     * @uses WebOrderItem::setQty()
     * @uses WebOrderItem::setRate()
     * @uses WebOrderItem::setProductRef()
     * @uses WebOrderItem::setProductDesc()
     * @param int $qty
     * @param float $rate
     * @param string $productRef
     * @param string $productDesc
     */
    public function __construct($qty = null, $rate = null, $productRef = null, $productDesc = null)
    {
        $this
            ->setQty($qty)
            ->setRate($rate)
            ->setProductRef($productRef)
            ->setProductDesc($productDesc);
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
     * @return \RialtoWebService\StructType\WebOrderItem
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
     * @return \RialtoWebService\StructType\WebOrderItem
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
     * @return \RialtoWebService\StructType\WebOrderItem
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
     * @return \RialtoWebService\StructType\WebOrderItem
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrderItem
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
