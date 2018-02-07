<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItem StructType
 * @subpackage Structs
 */
class RialtoStockItem extends AbstractStructBase
{
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
     * The EAN
     * @var string
     */
    public $EAN;
    /**
     * Constructor method for RialtoStockItem
     * @uses RialtoStockItem::setRate1()
     * @uses RialtoStockItem::setRate2()
     * @uses RialtoStockItem::setRate3()
     * @uses RialtoStockItem::setRate4()
     * @uses RialtoStockItem::setRate5()
     * @uses RialtoStockItem::setRateAdd()
     * @uses RialtoStockItem::setSKU()
     * @uses RialtoStockItem::setCode()
     * @uses RialtoStockItem::setDescription()
     * @uses RialtoStockItem::setEAN()
     * @param float $rate1
     * @param float $rate2
     * @param float $rate3
     * @param float $rate4
     * @param float $rate5
     * @param float $rateAdd
     * @param string $sKU
     * @param string $code
     * @param string $description
     * @param string $eAN
     */
    public function __construct($rate1 = null, $rate2 = null, $rate3 = null, $rate4 = null, $rate5 = null, $rateAdd = null, $sKU = null, $code = null, $description = null, $eAN = null)
    {
        $this
            ->setRate1($rate1)
            ->setRate2($rate2)
            ->setRate3($rate3)
            ->setRate4($rate4)
            ->setRate5($rate5)
            ->setRateAdd($rateAdd)
            ->setSKU($sKU)
            ->setCode($code)
            ->setDescription($description)
            ->setEAN($eAN);
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
     */
    public function setRateAdd($rateAdd = null)
    {
        $this->RateAdd = $rateAdd;
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * @return \RialtoWebService\StructType\RialtoStockItem
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
     * Get EAN value
     * @return string|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \RialtoWebService\StructType\RialtoStockItem
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoStockItem
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
