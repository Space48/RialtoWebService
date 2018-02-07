<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedStockLevelsStrResponse StructType
 * @subpackage Structs
 */
class GetUpdatedStockLevelsStrResponse extends AbstractStructBase
{
    /**
     * The GetUpdatedStockLevelsStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetUpdatedStockLevelsStrResult;
    /**
     * Constructor method for GetUpdatedStockLevelsStrResponse
     * @uses GetUpdatedStockLevelsStrResponse::setGetUpdatedStockLevelsStrResult()
     * @param string $getUpdatedStockLevelsStrResult
     */
    public function __construct($getUpdatedStockLevelsStrResult = null)
    {
        $this
            ->setGetUpdatedStockLevelsStrResult($getUpdatedStockLevelsStrResult);
    }
    /**
     * Get GetUpdatedStockLevelsStrResult value
     * @return string|null
     */
    public function getGetUpdatedStockLevelsStrResult()
    {
        return $this->GetUpdatedStockLevelsStrResult;
    }
    /**
     * Set GetUpdatedStockLevelsStrResult value
     * @param string $getUpdatedStockLevelsStrResult
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsStrResponse
     */
    public function setGetUpdatedStockLevelsStrResult($getUpdatedStockLevelsStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getUpdatedStockLevelsStrResult) && !is_string($getUpdatedStockLevelsStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getUpdatedStockLevelsStrResult)), __LINE__);
        }
        $this->GetUpdatedStockLevelsStrResult = $getUpdatedStockLevelsStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsStrResponse
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
