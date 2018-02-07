<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoOrdersStrResponse StructType
 * @subpackage Structs
 */
class AddRialtoOrdersStrResponse extends AbstractStructBase
{
    /**
     * The AddRialtoOrdersStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddRialtoOrdersStrResult;
    /**
     * Constructor method for AddRialtoOrdersStrResponse
     * @uses AddRialtoOrdersStrResponse::setAddRialtoOrdersStrResult()
     * @param string $addRialtoOrdersStrResult
     */
    public function __construct($addRialtoOrdersStrResult = null)
    {
        $this
            ->setAddRialtoOrdersStrResult($addRialtoOrdersStrResult);
    }
    /**
     * Get AddRialtoOrdersStrResult value
     * @return string|null
     */
    public function getAddRialtoOrdersStrResult()
    {
        return $this->AddRialtoOrdersStrResult;
    }
    /**
     * Set AddRialtoOrdersStrResult value
     * @param string $addRialtoOrdersStrResult
     * @return \RialtoWebService\StructType\AddRialtoOrdersStrResponse
     */
    public function setAddRialtoOrdersStrResult($addRialtoOrdersStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($addRialtoOrdersStrResult) && !is_string($addRialtoOrdersStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addRialtoOrdersStrResult)), __LINE__);
        }
        $this->AddRialtoOrdersStrResult = $addRialtoOrdersStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddRialtoOrdersStrResponse
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
