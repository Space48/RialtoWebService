<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedRialtoOrdersResponse StructType
 * @subpackage Structs
 */
class GetUpdatedRialtoOrdersResponse extends AbstractStructBase
{
    /**
     * The rialtoorderdetailsresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtoorderdetailsresponse
     * @var \RialtoWebService\StructType\RialtoOrderDetailsResponse
     */
    public $rialtoorderdetailsresponse;
    /**
     * Constructor method for GetUpdatedRialtoOrdersResponse
     * @uses GetUpdatedRialtoOrdersResponse::setRialtoorderdetailsresponse()
     * @param \RialtoWebService\StructType\RialtoOrderDetailsResponse $rialtoorderdetailsresponse
     */
    public function __construct(\RialtoWebService\StructType\RialtoOrderDetailsResponse $rialtoorderdetailsresponse = null)
    {
        $this
            ->setRialtoorderdetailsresponse($rialtoorderdetailsresponse);
    }
    /**
     * Get rialtoorderdetailsresponse value
     * @return \RialtoWebService\StructType\RialtoOrderDetailsResponse|null
     */
    public function getRialtoorderdetailsresponse()
    {
        return $this->rialtoorderdetailsresponse;
    }
    /**
     * Set rialtoorderdetailsresponse value
     * @param \RialtoWebService\StructType\RialtoOrderDetailsResponse $rialtoorderdetailsresponse
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersResponse
     */
    public function setRialtoorderdetailsresponse(\RialtoWebService\StructType\RialtoOrderDetailsResponse $rialtoorderdetailsresponse = null)
    {
        $this->rialtoorderdetailsresponse = $rialtoorderdetailsresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersResponse
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
