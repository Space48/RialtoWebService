<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoOrderItemDetailsResponseOrderItem StructType
 * @subpackage Structs
 */
class RialtoOrderItemDetailsResponseOrderItem extends AbstractStructBase
{
    /**
     * The OrderNo
     * @var string
     */
    public $OrderNo;
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
     * The StatusCode
     * @var string
     */
    public $StatusCode;
    /**
     * The DespatchDate
     * @var string
     */
    public $DespatchDate;
    /**
     * The CarrierRef
     * @var string
     */
    public $CarrierRef;
    /**
     * The CarrierName
     * @var string
     */
    public $CarrierName;
    /**
     * The ConsignmentNo
     * @var string
     */
    public $ConsignmentNo;
    /**
     * The Updated
     * @var string
     */
    public $Updated;
    /**
     * Constructor method for RialtoOrderItemDetailsResponseOrderItem
     * @uses RialtoOrderItemDetailsResponseOrderItem::setOrderNo()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setProductRef()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setProductDesc()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setStatusCode()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setDespatchDate()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setCarrierRef()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setCarrierName()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setConsignmentNo()
     * @uses RialtoOrderItemDetailsResponseOrderItem::setUpdated()
     * @param string $orderNo
     * @param string $productRef
     * @param string $productDesc
     * @param string $statusCode
     * @param string $despatchDate
     * @param string $carrierRef
     * @param string $carrierName
     * @param string $consignmentNo
     * @param string $updated
     */
    public function __construct($orderNo = null, $productRef = null, $productDesc = null, $statusCode = null, $despatchDate = null, $carrierRef = null, $carrierName = null, $consignmentNo = null, $updated = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setProductRef($productRef)
            ->setProductDesc($productDesc)
            ->setStatusCode($statusCode)
            ->setDespatchDate($despatchDate)
            ->setCarrierRef($carrierRef)
            ->setCarrierName($carrierName)
            ->setConsignmentNo($consignmentNo)
            ->setUpdated($updated);
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
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
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
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
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
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
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
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get DespatchDate value
     * @return string|null
     */
    public function getDespatchDate()
    {
        return $this->DespatchDate;
    }
    /**
     * Set DespatchDate value
     * @param string $despatchDate
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setDespatchDate($despatchDate = null)
    {
        // validation for constraint: string
        if (!is_null($despatchDate) && !is_string($despatchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($despatchDate)), __LINE__);
        }
        $this->DespatchDate = $despatchDate;
        return $this;
    }
    /**
     * Get CarrierRef value
     * @return string|null
     */
    public function getCarrierRef()
    {
        return $this->CarrierRef;
    }
    /**
     * Set CarrierRef value
     * @param string $carrierRef
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setCarrierRef($carrierRef = null)
    {
        // validation for constraint: string
        if (!is_null($carrierRef) && !is_string($carrierRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierRef)), __LINE__);
        }
        $this->CarrierRef = $carrierRef;
        return $this;
    }
    /**
     * Get CarrierName value
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->CarrierName;
    }
    /**
     * Set CarrierName value
     * @param string $carrierName
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setCarrierName($carrierName = null)
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierName)), __LINE__);
        }
        $this->CarrierName = $carrierName;
        return $this;
    }
    /**
     * Get ConsignmentNo value
     * @return string|null
     */
    public function getConsignmentNo()
    {
        return $this->ConsignmentNo;
    }
    /**
     * Set ConsignmentNo value
     * @param string $consignmentNo
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setConsignmentNo($consignmentNo = null)
    {
        // validation for constraint: string
        if (!is_null($consignmentNo) && !is_string($consignmentNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consignmentNo)), __LINE__);
        }
        $this->ConsignmentNo = $consignmentNo;
        return $this;
    }
    /**
     * Get Updated value
     * @return string|null
     */
    public function getUpdated()
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param string $updated
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
     */
    public function setUpdated($updated = null)
    {
        // validation for constraint: string
        if (!is_null($updated) && !is_string($updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoOrderItemDetailsResponseOrderItem
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
