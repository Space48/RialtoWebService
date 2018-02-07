<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStockListStrResponse StructType
 * @subpackage Structs
 */
class GetStockListStrResponse extends AbstractStructBase
{
    /**
     * The GetStockListStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetStockListStrResult;
    /**
     * Constructor method for GetStockListStrResponse
     * @uses GetStockListStrResponse::setGetStockListStrResult()
     * @param string $getStockListStrResult
     */
    public function __construct($getStockListStrResult = null)
    {
        $this
            ->setGetStockListStrResult($getStockListStrResult);
    }
    /**
     * Get GetStockListStrResult value
     * @return string|null
     */
    public function getGetStockListStrResult()
    {
        return $this->GetStockListStrResult;
    }
    /**
     * Set GetStockListStrResult value
     * @param string $getStockListStrResult
     * @return \RialtoWebService\StructType\GetStockListStrResponse
     */
    public function setGetStockListStrResult($getStockListStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getStockListStrResult) && !is_string($getStockListStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getStockListStrResult)), __LINE__);
        }
        $this->GetStockListStrResult = $getStockListStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetStockListStrResponse
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
