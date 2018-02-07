<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedStockResponse StructType
 * @subpackage Structs
 */
class GetUpdatedStockResponse extends AbstractStructBase
{
    /**
     * The emerystocklistresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:emerystocklistresponse
     * @var \RialtoWebService\StructType\StockListResponse
     */
    public $emerystocklistresponse;
    /**
     * Constructor method for GetUpdatedStockResponse
     * @uses GetUpdatedStockResponse::setEmerystocklistresponse()
     * @param \RialtoWebService\StructType\StockListResponse $emerystocklistresponse
     */
    public function __construct(\RialtoWebService\StructType\StockListResponse $emerystocklistresponse = null)
    {
        $this
            ->setEmerystocklistresponse($emerystocklistresponse);
    }
    /**
     * Get emerystocklistresponse value
     * @return \RialtoWebService\StructType\StockListResponse|null
     */
    public function getEmerystocklistresponse()
    {
        return $this->emerystocklistresponse;
    }
    /**
     * Set emerystocklistresponse value
     * @param \RialtoWebService\StructType\StockListResponse $emerystocklistresponse
     * @return \RialtoWebService\StructType\GetUpdatedStockResponse
     */
    public function setEmerystocklistresponse(\RialtoWebService\StructType\StockListResponse $emerystocklistresponse = null)
    {
        $this->emerystocklistresponse = $emerystocklistresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedStockResponse
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
