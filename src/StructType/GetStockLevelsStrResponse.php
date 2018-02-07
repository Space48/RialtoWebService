<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStockLevelsStrResponse StructType
 * @subpackage Structs
 */
class GetStockLevelsStrResponse extends AbstractStructBase
{
    /**
     * The GetStockLevelsStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetStockLevelsStrResult;
    /**
     * Constructor method for GetStockLevelsStrResponse
     * @uses GetStockLevelsStrResponse::setGetStockLevelsStrResult()
     * @param string $getStockLevelsStrResult
     */
    public function __construct($getStockLevelsStrResult = null)
    {
        $this
            ->setGetStockLevelsStrResult($getStockLevelsStrResult);
    }
    /**
     * Get GetStockLevelsStrResult value
     * @return string|null
     */
    public function getGetStockLevelsStrResult()
    {
        return $this->GetStockLevelsStrResult;
    }
    /**
     * Set GetStockLevelsStrResult value
     * @param string $getStockLevelsStrResult
     * @return \RialtoWebService\StructType\GetStockLevelsStrResponse
     */
    public function setGetStockLevelsStrResult($getStockLevelsStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getStockLevelsStrResult) && !is_string($getStockLevelsStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getStockLevelsStrResult)), __LINE__);
        }
        $this->GetStockLevelsStrResult = $getStockLevelsStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetStockLevelsStrResponse
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
