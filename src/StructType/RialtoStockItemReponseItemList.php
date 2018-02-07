<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItemReponseItemList StructType
 * @subpackage Structs
 */
class RialtoStockItemReponseItemList extends AbstractStructBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoStockItemReponseItem[]
     */
    public $item;
    /**
     * Constructor method for RialtoStockItemReponseItemList
     * @uses RialtoStockItemReponseItemList::setItem()
     * @param \RialtoWebService\StructType\RialtoStockItemReponseItem[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItem[]|null
     */
    public function getItem()
    {
        return isset($this->item) ? $this->item : null;
    }
    /**
     * Set item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoStockItemReponseItem[] $item
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItemList
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $rialtoStockItemReponseItemListItemItem) {
            // validation for constraint: itemType
            if (!$rialtoStockItemReponseItemListItemItem instanceof \RialtoWebService\StructType\RialtoStockItemReponseItem) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \RialtoWebService\StructType\RialtoStockItemReponseItem, "%s" given', is_object($rialtoStockItemReponseItemListItemItem) ? get_class($rialtoStockItemReponseItemListItemItem) : gettype($rialtoStockItemReponseItemListItemItem)), __LINE__);
            }
        }
        if (is_null($item) || (is_array($item) && empty($item))) {
            unset($this->item);
        } else {
            $this->item = $item;
        }
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoStockItemReponseItem $item
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItemList
     */
    public function addToItem(\RialtoWebService\StructType\RialtoStockItemReponseItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\RialtoStockItemReponseItem) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \RialtoWebService\StructType\RialtoStockItemReponseItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItemList
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
