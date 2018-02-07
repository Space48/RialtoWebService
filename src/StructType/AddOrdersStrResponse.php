<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrdersStrResponse StructType
 * @subpackage Structs
 */
class AddOrdersStrResponse extends AbstractStructBase
{
    /**
     * The AddOrdersStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddOrdersStrResult;
    /**
     * Constructor method for AddOrdersStrResponse
     * @uses AddOrdersStrResponse::setAddOrdersStrResult()
     * @param string $addOrdersStrResult
     */
    public function __construct($addOrdersStrResult = null)
    {
        $this
            ->setAddOrdersStrResult($addOrdersStrResult);
    }
    /**
     * Get AddOrdersStrResult value
     * @return string|null
     */
    public function getAddOrdersStrResult()
    {
        return $this->AddOrdersStrResult;
    }
    /**
     * Set AddOrdersStrResult value
     * @param string $addOrdersStrResult
     * @return \RialtoWebService\StructType\AddOrdersStrResponse
     */
    public function setAddOrdersStrResult($addOrdersStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($addOrdersStrResult) && !is_string($addOrdersStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addOrdersStrResult)), __LINE__);
        }
        $this->AddOrdersStrResult = $addOrdersStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddOrdersStrResponse
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
