<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoOrderDetails StructType
 * @subpackage Structs
 */
class RialtoOrderDetails extends AbstractStructBase
{
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoOrderDetail[]
     */
    public $order;
    /**
     * Constructor method for RialtoOrderDetails
     * @uses RialtoOrderDetails::setOrder()
     * @param \RialtoWebService\StructType\RialtoOrderDetail[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\RialtoOrderDetail[]|null
     */
    public function getOrder()
    {
        return isset($this->order) ? $this->order : null;
    }
    /**
     * Set order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoOrderDetail[] $order
     * @return \RialtoWebService\StructType\RialtoOrderDetails
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $rialtoOrderDetailsOrderItem) {
            // validation for constraint: itemType
            if (!$rialtoOrderDetailsOrderItem instanceof \RialtoWebService\StructType\RialtoOrderDetail) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \RialtoWebService\StructType\RialtoOrderDetail, "%s" given', is_object($rialtoOrderDetailsOrderItem) ? get_class($rialtoOrderDetailsOrderItem) : gettype($rialtoOrderDetailsOrderItem)), __LINE__);
            }
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->order);
        } else {
            $this->order = $order;
        }
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoOrderDetail $item
     * @return \RialtoWebService\StructType\RialtoOrderDetails
     */
    public function addToOrder(\RialtoWebService\StructType\RialtoOrderDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\RialtoOrderDetail) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \RialtoWebService\StructType\RialtoOrderDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoOrderDetails
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
