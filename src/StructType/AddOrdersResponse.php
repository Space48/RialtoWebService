<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrdersResponse StructType
 * @subpackage Structs
 */
class AddOrdersResponse extends AbstractStructBase
{
    /**
     * The emerywebordersresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:emerywebordersresponse
     * @var \RialtoWebService\StructType\WebOrdersResponse
     */
    public $emerywebordersresponse;
    /**
     * Constructor method for AddOrdersResponse
     * @uses AddOrdersResponse::setEmerywebordersresponse()
     * @param \RialtoWebService\StructType\WebOrdersResponse $emerywebordersresponse
     */
    public function __construct(\RialtoWebService\StructType\WebOrdersResponse $emerywebordersresponse = null)
    {
        $this
            ->setEmerywebordersresponse($emerywebordersresponse);
    }
    /**
     * Get emerywebordersresponse value
     * @return \RialtoWebService\StructType\WebOrdersResponse|null
     */
    public function getEmerywebordersresponse()
    {
        return $this->emerywebordersresponse;
    }
    /**
     * Set emerywebordersresponse value
     * @param \RialtoWebService\StructType\WebOrdersResponse $emerywebordersresponse
     * @return \RialtoWebService\StructType\AddOrdersResponse
     */
    public function setEmerywebordersresponse(\RialtoWebService\StructType\WebOrdersResponse $emerywebordersresponse = null)
    {
        $this->emerywebordersresponse = $emerywebordersresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddOrdersResponse
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
