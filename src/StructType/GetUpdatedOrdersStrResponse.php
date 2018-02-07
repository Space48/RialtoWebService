<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedOrdersStrResponse StructType
 * @subpackage Structs
 */
class GetUpdatedOrdersStrResponse extends AbstractStructBase
{
    /**
     * The GetUpdatedOrdersStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetUpdatedOrdersStrResult;
    /**
     * Constructor method for GetUpdatedOrdersStrResponse
     * @uses GetUpdatedOrdersStrResponse::setGetUpdatedOrdersStrResult()
     * @param string $getUpdatedOrdersStrResult
     */
    public function __construct($getUpdatedOrdersStrResult = null)
    {
        $this
            ->setGetUpdatedOrdersStrResult($getUpdatedOrdersStrResult);
    }
    /**
     * Get GetUpdatedOrdersStrResult value
     * @return string|null
     */
    public function getGetUpdatedOrdersStrResult()
    {
        return $this->GetUpdatedOrdersStrResult;
    }
    /**
     * Set GetUpdatedOrdersStrResult value
     * @param string $getUpdatedOrdersStrResult
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStrResponse
     */
    public function setGetUpdatedOrdersStrResult($getUpdatedOrdersStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getUpdatedOrdersStrResult) && !is_string($getUpdatedOrdersStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getUpdatedOrdersStrResult)), __LINE__);
        }
        $this->GetUpdatedOrdersStrResult = $getUpdatedOrdersStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStrResponse
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
