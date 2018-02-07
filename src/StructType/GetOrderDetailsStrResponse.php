<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDetailsStrResponse StructType
 * @subpackage Structs
 */
class GetOrderDetailsStrResponse extends AbstractStructBase
{
    /**
     * The GetOrderDetailsStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetOrderDetailsStrResult;
    /**
     * Constructor method for GetOrderDetailsStrResponse
     * @uses GetOrderDetailsStrResponse::setGetOrderDetailsStrResult()
     * @param string $getOrderDetailsStrResult
     */
    public function __construct($getOrderDetailsStrResult = null)
    {
        $this
            ->setGetOrderDetailsStrResult($getOrderDetailsStrResult);
    }
    /**
     * Get GetOrderDetailsStrResult value
     * @return string|null
     */
    public function getGetOrderDetailsStrResult()
    {
        return $this->GetOrderDetailsStrResult;
    }
    /**
     * Set GetOrderDetailsStrResult value
     * @param string $getOrderDetailsStrResult
     * @return \RialtoWebService\StructType\GetOrderDetailsStrResponse
     */
    public function setGetOrderDetailsStrResult($getOrderDetailsStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getOrderDetailsStrResult) && !is_string($getOrderDetailsStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getOrderDetailsStrResult)), __LINE__);
        }
        $this->GetOrderDetailsStrResult = $getOrderDetailsStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetOrderDetailsStrResponse
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
