<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockLevelsResponseStock StructType
 * @subpackage Structs
 */
class StockLevelsResponseStock extends AbstractStructBase
{
    /**
     * The expecteddeliveries
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\ExpectedDeliveries
     */
    public $expecteddeliveries;
    /**
     * The Rate1
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate1;
    /**
     * The Rate2
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate2;
    /**
     * The Rate3
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate3;
    /**
     * The Rate4
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate4;
    /**
     * The Rate5
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Rate5;
    /**
     * The RateAdd
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $RateAdd;
    /**
     * The Enabled
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Enabled;
    /**
     * The QtyAvailable
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $QtyAvailable;
    /**
     * The NextDeliveryQty
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $NextDeliveryQty;
    /**
     * The ActualQtyAvailable
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ActualQtyAvailable;
    /**
     * The SKU
     * @var string
     */
    public $SKU;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The NextDeliveryDate
     * @var string
     */
    public $NextDeliveryDate;
    /**
     * The Updated
     * @var string
     */
    public $Updated;
    /**
     * The ExpectedDepletionDate
     * @var string
     */
    public $ExpectedDepletionDate;
    /**
     * Constructor method for StockLevelsResponseStock
     * @uses StockLevelsResponseStock::setExpecteddeliveries()
     * @uses StockLevelsResponseStock::setRate1()
     * @uses StockLevelsResponseStock::setRate2()
     * @uses StockLevelsResponseStock::setRate3()
     * @uses StockLevelsResponseStock::setRate4()
     * @uses StockLevelsResponseStock::setRate5()
     * @uses StockLevelsResponseStock::setRateAdd()
     * @uses StockLevelsResponseStock::setEnabled()
     * @uses StockLevelsResponseStock::setQtyAvailable()
     * @uses StockLevelsResponseStock::setNextDeliveryQty()
     * @uses StockLevelsResponseStock::setActualQtyAvailable()
     * @uses StockLevelsResponseStock::setSKU()
     * @uses StockLevelsResponseStock::setCode()
     * @uses StockLevelsResponseStock::setDescription()
     * @uses StockLevelsResponseStock::setNextDeliveryDate()
     * @uses StockLevelsResponseStock::setUpdated()
     * @uses StockLevelsResponseStock::setExpectedDepletionDate()
     * @param \RialtoWebService\StructType\ExpectedDeliveries $expecteddeliveries
     * @param float $rate1
     * @param float $rate2
     * @param float $rate3
     * @param float $rate4
     * @param float $rate5
     * @param float $rateAdd
     * @param int $enabled
     * @param int $qtyAvailable
     * @param int $nextDeliveryQty
     * @param int $actualQtyAvailable
     * @param string $sKU
     * @param string $code
     * @param string $description
     * @param string $nextDeliveryDate
     * @param string $updated
     * @param string $expectedDepletionDate
     */
    public function __construct(\RialtoWebService\StructType\ExpectedDeliveries $expecteddeliveries = null, $rate1 = null, $rate2 = null, $rate3 = null, $rate4 = null, $rate5 = null, $rateAdd = null, $enabled = null, $qtyAvailable = null, $nextDeliveryQty = null, $actualQtyAvailable = null, $sKU = null, $code = null, $description = null, $nextDeliveryDate = null, $updated = null, $expectedDepletionDate = null)
    {
        $this
            ->setExpecteddeliveries($expecteddeliveries)
            ->setRate1($rate1)
            ->setRate2($rate2)
            ->setRate3($rate3)
            ->setRate4($rate4)
            ->setRate5($rate5)
            ->setRateAdd($rateAdd)
            ->setEnabled($enabled)
            ->setQtyAvailable($qtyAvailable)
            ->setNextDeliveryQty($nextDeliveryQty)
            ->setActualQtyAvailable($actualQtyAvailable)
            ->setSKU($sKU)
            ->setCode($code)
            ->setDescription($description)
            ->setNextDeliveryDate($nextDeliveryDate)
            ->setUpdated($updated)
            ->setExpectedDepletionDate($expectedDepletionDate);
    }
    /**
     * Get expecteddeliveries value
     * @return \RialtoWebService\StructType\ExpectedDeliveries
     */
    public function getExpecteddeliveries()
    {
        return $this->expecteddeliveries;
    }
    /**
     * Set expecteddeliveries value
     * @param \RialtoWebService\StructType\ExpectedDeliveries $expecteddeliveries
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setExpecteddeliveries(\RialtoWebService\StructType\ExpectedDeliveries $expecteddeliveries = null)
    {
        $this->expecteddeliveries = $expecteddeliveries;
        return $this;
    }
    /**
     * Get Rate1 value
     * @return float
     */
    public function getRate1()
    {
        return $this->Rate1;
    }
    /**
     * Set Rate1 value
     * @param float $rate1
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRate1($rate1 = null)
    {
        $this->Rate1 = $rate1;
        return $this;
    }
    /**
     * Get Rate2 value
     * @return float
     */
    public function getRate2()
    {
        return $this->Rate2;
    }
    /**
     * Set Rate2 value
     * @param float $rate2
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRate2($rate2 = null)
    {
        $this->Rate2 = $rate2;
        return $this;
    }
    /**
     * Get Rate3 value
     * @return float
     */
    public function getRate3()
    {
        return $this->Rate3;
    }
    /**
     * Set Rate3 value
     * @param float $rate3
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRate3($rate3 = null)
    {
        $this->Rate3 = $rate3;
        return $this;
    }
    /**
     * Get Rate4 value
     * @return float
     */
    public function getRate4()
    {
        return $this->Rate4;
    }
    /**
     * Set Rate4 value
     * @param float $rate4
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRate4($rate4 = null)
    {
        $this->Rate4 = $rate4;
        return $this;
    }
    /**
     * Get Rate5 value
     * @return float
     */
    public function getRate5()
    {
        return $this->Rate5;
    }
    /**
     * Set Rate5 value
     * @param float $rate5
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRate5($rate5 = null)
    {
        $this->Rate5 = $rate5;
        return $this;
    }
    /**
     * Get RateAdd value
     * @return float
     */
    public function getRateAdd()
    {
        return $this->RateAdd;
    }
    /**
     * Set RateAdd value
     * @param float $rateAdd
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setRateAdd($rateAdd = null)
    {
        $this->RateAdd = $rateAdd;
        return $this;
    }
    /**
     * Get Enabled value
     * @return int
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }
    /**
     * Set Enabled value
     * @param int $enabled
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setEnabled($enabled = null)
    {
        // validation for constraint: int
        if (!is_null($enabled) && !is_numeric($enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enabled)), __LINE__);
        }
        $this->Enabled = $enabled;
        return $this;
    }
    /**
     * Get QtyAvailable value
     * @return int
     */
    public function getQtyAvailable()
    {
        return $this->QtyAvailable;
    }
    /**
     * Set QtyAvailable value
     * @param int $qtyAvailable
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setQtyAvailable($qtyAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($qtyAvailable) && !is_numeric($qtyAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($qtyAvailable)), __LINE__);
        }
        $this->QtyAvailable = $qtyAvailable;
        return $this;
    }
    /**
     * Get NextDeliveryQty value
     * @return int
     */
    public function getNextDeliveryQty()
    {
        return $this->NextDeliveryQty;
    }
    /**
     * Set NextDeliveryQty value
     * @param int $nextDeliveryQty
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setNextDeliveryQty($nextDeliveryQty = null)
    {
        // validation for constraint: int
        if (!is_null($nextDeliveryQty) && !is_numeric($nextDeliveryQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nextDeliveryQty)), __LINE__);
        }
        $this->NextDeliveryQty = $nextDeliveryQty;
        return $this;
    }
    /**
     * Get ActualQtyAvailable value
     * @return int
     */
    public function getActualQtyAvailable()
    {
        return $this->ActualQtyAvailable;
    }
    /**
     * Set ActualQtyAvailable value
     * @param int $actualQtyAvailable
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setActualQtyAvailable($actualQtyAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($actualQtyAvailable) && !is_numeric($actualQtyAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($actualQtyAvailable)), __LINE__);
        }
        $this->ActualQtyAvailable = $actualQtyAvailable;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get NextDeliveryDate value
     * @return string|null
     */
    public function getNextDeliveryDate()
    {
        return $this->NextDeliveryDate;
    }
    /**
     * Set NextDeliveryDate value
     * @param string $nextDeliveryDate
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setNextDeliveryDate($nextDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextDeliveryDate) && !is_string($nextDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextDeliveryDate)), __LINE__);
        }
        $this->NextDeliveryDate = $nextDeliveryDate;
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
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
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
     * Get ExpectedDepletionDate value
     * @return string|null
     */
    public function getExpectedDepletionDate()
    {
        return $this->ExpectedDepletionDate;
    }
    /**
     * Set ExpectedDepletionDate value
     * @param string $expectedDepletionDate
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
     */
    public function setExpectedDepletionDate($expectedDepletionDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedDepletionDate) && !is_string($expectedDepletionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedDepletionDate)), __LINE__);
        }
        $this->ExpectedDepletionDate = $expectedDepletionDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\StockLevelsResponseStock
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
