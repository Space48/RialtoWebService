<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDetailsResponse StructType
 * @subpackage Structs
 */
class GetOrderDetailsResponse extends AbstractStructBase
{
    /**
     * The emeryorderdetailsresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:emeryorderdetailsresponse
     * @var \RialtoWebService\StructType\OrderDetailsResponse
     */
    public $emeryorderdetailsresponse;
    /**
     * Constructor method for GetOrderDetailsResponse
     * @uses GetOrderDetailsResponse::setEmeryorderdetailsresponse()
     * @param \RialtoWebService\StructType\OrderDetailsResponse $emeryorderdetailsresponse
     */
    public function __construct(\RialtoWebService\StructType\OrderDetailsResponse $emeryorderdetailsresponse = null)
    {
        $this
            ->setEmeryorderdetailsresponse($emeryorderdetailsresponse);
    }
    /**
     * Get emeryorderdetailsresponse value
     * @return \RialtoWebService\StructType\OrderDetailsResponse|null
     */
    public function getEmeryorderdetailsresponse()
    {
        return $this->emeryorderdetailsresponse;
    }
    /**
     * Set emeryorderdetailsresponse value
     * @param \RialtoWebService\StructType\OrderDetailsResponse $emeryorderdetailsresponse
     * @return \RialtoWebService\StructType\GetOrderDetailsResponse
     */
    public function setEmeryorderdetailsresponse(\RialtoWebService\StructType\OrderDetailsResponse $emeryorderdetailsresponse = null)
    {
        $this->emeryorderdetailsresponse = $emeryorderdetailsresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetOrderDetailsResponse
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
