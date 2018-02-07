<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoStockItemsResponse StructType
 * @subpackage Structs
 */
class AddRialtoStockItemsResponse extends AbstractStructBase
{
    /**
     * The rialtostockitemsresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtostockitemsresponse
     * @var \RialtoWebService\StructType\RialtoStockItemsResponse
     */
    public $rialtostockitemsresponse;
    /**
     * Constructor method for AddRialtoStockItemsResponse
     * @uses AddRialtoStockItemsResponse::setRialtostockitemsresponse()
     * @param \RialtoWebService\StructType\RialtoStockItemsResponse $rialtostockitemsresponse
     */
    public function __construct(\RialtoWebService\StructType\RialtoStockItemsResponse $rialtostockitemsresponse = null)
    {
        $this
            ->setRialtostockitemsresponse($rialtostockitemsresponse);
    }
    /**
     * Get rialtostockitemsresponse value
     * @return \RialtoWebService\StructType\RialtoStockItemsResponse|null
     */
    public function getRialtostockitemsresponse()
    {
        return $this->rialtostockitemsresponse;
    }
    /**
     * Set rialtostockitemsresponse value
     * @param \RialtoWebService\StructType\RialtoStockItemsResponse $rialtostockitemsresponse
     * @return \RialtoWebService\StructType\AddRialtoStockItemsResponse
     */
    public function setRialtostockitemsresponse(\RialtoWebService\StructType\RialtoStockItemsResponse $rialtostockitemsresponse = null)
    {
        $this->rialtostockitemsresponse = $rialtostockitemsresponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddRialtoStockItemsResponse
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
