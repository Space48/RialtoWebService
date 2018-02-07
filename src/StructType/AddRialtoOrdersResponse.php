<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoOrdersResponse StructType
 * @subpackage Structs
 */
class AddRialtoOrdersResponse extends AbstractStructBase
{
    /**
     * The rialtowebordersresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtowebordersresponse
     * @var \RialtoWebService\StructType\RialtoWebOrdersResponse
     */
    public $rialtowebordersresponse;
    /**
     * Constructor method for AddRialtoOrdersResponse
     * @uses AddRialtoOrdersResponse::setRialtowebordersresponse()
     * @param \RialtoWebService\StructType\RialtoWebOrdersResponse $rialtowebordersresponse
     */
    public function __construct(\RialtoWebService\StructType\RialtoWebOrdersResponse $rialtowebordersresponse = null)
    {
        $this
            ->setRialtowebordersresponse($rialtowebordersresponse);
    }
    /**
     * Get rialtowebordersresponse value
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponse|null
     */
    public function getRialtowebordersresponse()
    {
        return $this->rialtowebordersresponse;
    }
    /**
     * Set rialtowebordersresponse value
     * @param \RialtoWebService\StructType\RialtoWebOrdersResponse $rialtowebordersresponse
     * @return \RialtoWebService\StructType\AddRialtoOrdersResponse
     */
    public function setRialtowebordersresponse(\RialtoWebService\StructType\RialtoWebOrdersResponse $rialtowebordersresponse = null)
    {
        $this->rialtowebordersresponse = $rialtowebordersresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddRialtoOrdersResponse
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
