<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderItems StructType
 * @subpackage Structs
 */
class RialtoWebOrderItems extends AbstractStructBase
{
    /**
     * The orderitem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrderItem[]
     */
    public $orderitem;
    /**
     * Constructor method for RialtoWebOrderItems
     * @uses RialtoWebOrderItems::setOrderitem()
     * @param \RialtoWebService\StructType\RialtoWebOrderItem[] $orderitem
     */
    public function __construct(array $orderitem = array())
    {
        $this
            ->setOrderitem($orderitem);
    }
    /**
     * Get orderitem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\RialtoWebOrderItem[]|null
     */
    public function getOrderitem()
    {
        return isset($this->orderitem) ? $this->orderitem : null;
    }
    /**
     * Set orderitem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoWebOrderItem[] $orderitem
     * @return \RialtoWebService\StructType\RialtoWebOrderItems
     */
    public function setOrderitem(array $orderitem = array())
    {
        foreach ($orderitem as $rialtoWebOrderItemsOrderitemItem) {
            // validation for constraint: itemType
            if (!$rialtoWebOrderItemsOrderitemItem instanceof \RialtoWebService\StructType\RialtoWebOrderItem) {
                throw new \InvalidArgumentException(sprintf('The orderitem property can only contain items of \RialtoWebService\StructType\RialtoWebOrderItem, "%s" given', is_object($rialtoWebOrderItemsOrderitemItem) ? get_class($rialtoWebOrderItemsOrderitemItem) : gettype($rialtoWebOrderItemsOrderitemItem)), __LINE__);
            }
        }
        if (is_null($orderitem) || (is_array($orderitem) && empty($orderitem))) {
            unset($this->orderitem);
        } else {
            $this->orderitem = $orderitem;
        }
        return $this;
    }
    /**
     * Add item to orderitem value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoWebOrderItem $item
     * @return \RialtoWebService\StructType\RialtoWebOrderItems
     */
    public function addToOrderitem(\RialtoWebService\StructType\RialtoWebOrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\RialtoWebOrderItem) {
            throw new \InvalidArgumentException(sprintf('The orderitem property can only contain items of \RialtoWebService\StructType\RialtoWebOrderItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->orderitem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoWebOrderItems
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
