<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItems StructType
 * @subpackage Structs
 */
class RialtoStockItems extends AbstractStructBase
{
    /**
     * The stocklist
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoStockItemList
     */
    public $stocklist;
    /**
     * Constructor method for RialtoStockItems
     * @uses RialtoStockItems::setStocklist()
     * @param \RialtoWebService\StructType\RialtoStockItemList $stocklist
     */
    public function __construct(\RialtoWebService\StructType\RialtoStockItemList $stocklist = null)
    {
        $this
            ->setStocklist($stocklist);
    }
    /**
     * Get stocklist value
     * @return \RialtoWebService\StructType\RialtoStockItemList
     */
    public function getStocklist()
    {
        return $this->stocklist;
    }
    /**
     * Set stocklist value
     * @param \RialtoWebService\StructType\RialtoStockItemList $stocklist
     * @return \RialtoWebService\StructType\RialtoStockItems
     */
    public function setStocklist(\RialtoWebService\StructType\RialtoStockItemList $stocklist = null)
    {
        $this->stocklist = $stocklist;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoStockItems
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
