<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpectedDelivery StructType
 * @subpackage Structs
 */
class ExpectedDelivery extends AbstractStructBase
{
    /**
     * The Qty
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Qty;
    /**
     * The DueDate
     * @var string
     */
    public $DueDate;
    /**
     * Constructor method for ExpectedDelivery
     * @uses ExpectedDelivery::setQty()
     * @uses ExpectedDelivery::setDueDate()
     * @param int $qty
     * @param string $dueDate
     */
    public function __construct($qty = null, $dueDate = null)
    {
        $this
            ->setQty($qty)
            ->setDueDate($dueDate);
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
     * @return \RialtoWebService\StructType\ExpectedDelivery
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
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \RialtoWebService\StructType\ExpectedDelivery
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\ExpectedDelivery
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
