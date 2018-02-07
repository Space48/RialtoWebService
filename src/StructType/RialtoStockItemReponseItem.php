<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItemReponseItem StructType
 * @subpackage Structs
 */
class RialtoStockItemReponseItem extends AbstractStructBase
{
    /**
     * The SKU
     * @var string
     */
    public $SKU;
    /**
     * Constructor method for RialtoStockItemReponseItem
     * @uses RialtoStockItemReponseItem::setSKU()
     * @param string $sKU
     */
    public function __construct($sKU = null)
    {
        $this
            ->setSKU($sKU);
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItem
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItem
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
