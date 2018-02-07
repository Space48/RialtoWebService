<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedStockLevelsResponse StructType
 * @subpackage Structs
 */
class GetUpdatedStockLevelsResponse extends AbstractStructBase
{
    /**
     * The rialtostocklevelresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtostocklevelresponse
     * @var \RialtoWebService\StructType\StockLevelsResponse
     */
    public $rialtostocklevelresponse;
    /**
     * Constructor method for GetUpdatedStockLevelsResponse
     * @uses GetUpdatedStockLevelsResponse::setRialtostocklevelresponse()
     * @param \RialtoWebService\StructType\StockLevelsResponse $rialtostocklevelresponse
     */
    public function __construct(\RialtoWebService\StructType\StockLevelsResponse $rialtostocklevelresponse = null)
    {
        $this
            ->setRialtostocklevelresponse($rialtostocklevelresponse);
    }
    /**
     * Get rialtostocklevelresponse value
     * @return \RialtoWebService\StructType\StockLevelsResponse|null
     */
    public function getRialtostocklevelresponse()
    {
        return $this->rialtostocklevelresponse;
    }
    /**
     * Set rialtostocklevelresponse value
     * @param \RialtoWebService\StructType\StockLevelsResponse $rialtostocklevelresponse
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsResponse
     */
    public function setRialtostocklevelresponse(\RialtoWebService\StructType\StockLevelsResponse $rialtostocklevelresponse = null)
    {
        $this->rialtostocklevelresponse = $rialtostocklevelresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsResponse
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
