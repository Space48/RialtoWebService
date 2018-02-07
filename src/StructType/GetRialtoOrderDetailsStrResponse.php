<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRialtoOrderDetailsStrResponse StructType
 * @subpackage Structs
 */
class GetRialtoOrderDetailsStrResponse extends AbstractStructBase
{
    /**
     * The GetRialtoOrderDetailsStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetRialtoOrderDetailsStrResult;
    /**
     * Constructor method for GetRialtoOrderDetailsStrResponse
     * @uses GetRialtoOrderDetailsStrResponse::setGetRialtoOrderDetailsStrResult()
     * @param string $getRialtoOrderDetailsStrResult
     */
    public function __construct($getRialtoOrderDetailsStrResult = null)
    {
        $this
            ->setGetRialtoOrderDetailsStrResult($getRialtoOrderDetailsStrResult);
    }
    /**
     * Get GetRialtoOrderDetailsStrResult value
     * @return string|null
     */
    public function getGetRialtoOrderDetailsStrResult()
    {
        return $this->GetRialtoOrderDetailsStrResult;
    }
    /**
     * Set GetRialtoOrderDetailsStrResult value
     * @param string $getRialtoOrderDetailsStrResult
     * @return \RialtoWebService\StructType\GetRialtoOrderDetailsStrResponse
     */
    public function setGetRialtoOrderDetailsStrResult($getRialtoOrderDetailsStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getRialtoOrderDetailsStrResult) && !is_string($getRialtoOrderDetailsStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getRialtoOrderDetailsStrResult)), __LINE__);
        }
        $this->GetRialtoOrderDetailsStrResult = $getRialtoOrderDetailsStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetRialtoOrderDetailsStrResponse
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
