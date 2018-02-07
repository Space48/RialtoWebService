<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedRialtoOrdersStrResponse StructType
 * @subpackage Structs
 */
class GetUpdatedRialtoOrdersStrResponse extends AbstractStructBase
{
    /**
     * The GetUpdatedRialtoOrdersStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetUpdatedRialtoOrdersStrResult;
    /**
     * Constructor method for GetUpdatedRialtoOrdersStrResponse
     * @uses GetUpdatedRialtoOrdersStrResponse::setGetUpdatedRialtoOrdersStrResult()
     * @param string $getUpdatedRialtoOrdersStrResult
     */
    public function __construct($getUpdatedRialtoOrdersStrResult = null)
    {
        $this
            ->setGetUpdatedRialtoOrdersStrResult($getUpdatedRialtoOrdersStrResult);
    }
    /**
     * Get GetUpdatedRialtoOrdersStrResult value
     * @return string|null
     */
    public function getGetUpdatedRialtoOrdersStrResult()
    {
        return $this->GetUpdatedRialtoOrdersStrResult;
    }
    /**
     * Set GetUpdatedRialtoOrdersStrResult value
     * @param string $getUpdatedRialtoOrdersStrResult
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersStrResponse
     */
    public function setGetUpdatedRialtoOrdersStrResult($getUpdatedRialtoOrdersStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getUpdatedRialtoOrdersStrResult) && !is_string($getUpdatedRialtoOrdersStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getUpdatedRialtoOrdersStrResult)), __LINE__);
        }
        $this->GetUpdatedRialtoOrdersStrResult = $getUpdatedRialtoOrdersStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersStrResponse
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
