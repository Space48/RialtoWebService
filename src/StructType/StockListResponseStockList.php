<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockListResponseStockList StructType
 * @subpackage Structs
 */
class StockListResponseStockList extends AbstractStructBase
{
    /**
     * The stock
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\StockListResponseStock[]
     */
    public $stock;
    /**
     * Constructor method for StockListResponseStockList
     * @uses StockListResponseStockList::setStock()
     * @param \RialtoWebService\StructType\StockListResponseStock[] $stock
     */
    public function __construct(array $stock = array())
    {
        $this
            ->setStock($stock);
    }
    /**
     * Get stock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\StockListResponseStock[]|null
     */
    public function getStock()
    {
        return isset($this->stock) ? $this->stock : null;
    }
    /**
     * Set stock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\StockListResponseStock[] $stock
     * @return \RialtoWebService\StructType\StockListResponseStockList
     */
    public function setStock(array $stock = array())
    {
        foreach ($stock as $stockListResponseStockListStockItem) {
            // validation for constraint: itemType
            if (!$stockListResponseStockListStockItem instanceof \RialtoWebService\StructType\StockListResponseStock) {
                throw new \InvalidArgumentException(sprintf('The stock property can only contain items of \RialtoWebService\StructType\StockListResponseStock, "%s" given', is_object($stockListResponseStockListStockItem) ? get_class($stockListResponseStockListStockItem) : gettype($stockListResponseStockListStockItem)), __LINE__);
            }
        }
        if (is_null($stock) || (is_array($stock) && empty($stock))) {
            unset($this->stock);
        } else {
            $this->stock = $stock;
        }
        return $this;
    }
    /**
     * Add item to stock value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\StockListResponseStock $item
     * @return \RialtoWebService\StructType\StockListResponseStockList
     */
    public function addToStock(\RialtoWebService\StructType\StockListResponseStock $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\StockListResponseStock) {
            throw new \InvalidArgumentException(sprintf('The stock property can only contain items of \RialtoWebService\StructType\StockListResponseStock, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stock[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\StockListResponseStockList
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
