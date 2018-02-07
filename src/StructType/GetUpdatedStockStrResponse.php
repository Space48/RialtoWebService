<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedStockStrResponse StructType
 * @subpackage Structs
 */
class GetUpdatedStockStrResponse extends AbstractStructBase
{
    /**
     * The GetUpdatedStockStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetUpdatedStockStrResult;
    /**
     * Constructor method for GetUpdatedStockStrResponse
     * @uses GetUpdatedStockStrResponse::setGetUpdatedStockStrResult()
     * @param string $getUpdatedStockStrResult
     */
    public function __construct($getUpdatedStockStrResult = null)
    {
        $this
            ->setGetUpdatedStockStrResult($getUpdatedStockStrResult);
    }
    /**
     * Get GetUpdatedStockStrResult value
     * @return string|null
     */
    public function getGetUpdatedStockStrResult()
    {
        return $this->GetUpdatedStockStrResult;
    }
    /**
     * Set GetUpdatedStockStrResult value
     * @param string $getUpdatedStockStrResult
     * @return \RialtoWebService\StructType\GetUpdatedStockStrResponse
     */
    public function setGetUpdatedStockStrResult($getUpdatedStockStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getUpdatedStockStrResult) && !is_string($getUpdatedStockStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getUpdatedStockStrResult)), __LINE__);
        }
        $this->GetUpdatedStockStrResult = $getUpdatedStockStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedStockStrResponse
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
