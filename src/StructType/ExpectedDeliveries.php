<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpectedDeliveries StructType
 * @subpackage Structs
 */
class ExpectedDeliveries extends AbstractStructBase
{
    /**
     * The expecteddelivery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\ExpectedDelivery[]
     */
    public $expecteddelivery;
    /**
     * Constructor method for ExpectedDeliveries
     * @uses ExpectedDeliveries::setExpecteddelivery()
     * @param \RialtoWebService\StructType\ExpectedDelivery[] $expecteddelivery
     */
    public function __construct(array $expecteddelivery = array())
    {
        $this
            ->setExpecteddelivery($expecteddelivery);
    }
    /**
     * Get expecteddelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\ExpectedDelivery[]|null
     */
    public function getExpecteddelivery()
    {
        return isset($this->expecteddelivery) ? $this->expecteddelivery : null;
    }
    /**
     * Set expecteddelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\ExpectedDelivery[] $expecteddelivery
     * @return \RialtoWebService\StructType\ExpectedDeliveries
     */
    public function setExpecteddelivery(array $expecteddelivery = array())
    {
        foreach ($expecteddelivery as $expectedDeliveriesExpecteddeliveryItem) {
            // validation for constraint: itemType
            if (!$expectedDeliveriesExpecteddeliveryItem instanceof \RialtoWebService\StructType\ExpectedDelivery) {
                throw new \InvalidArgumentException(sprintf('The expecteddelivery property can only contain items of \RialtoWebService\StructType\ExpectedDelivery, "%s" given', is_object($expectedDeliveriesExpecteddeliveryItem) ? get_class($expectedDeliveriesExpecteddeliveryItem) : gettype($expectedDeliveriesExpecteddeliveryItem)), __LINE__);
            }
        }
        if (is_null($expecteddelivery) || (is_array($expecteddelivery) && empty($expecteddelivery))) {
            unset($this->expecteddelivery);
        } else {
            $this->expecteddelivery = $expecteddelivery;
        }
        return $this;
    }
    /**
     * Add item to expecteddelivery value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\ExpectedDelivery $item
     * @return \RialtoWebService\StructType\ExpectedDeliveries
     */
    public function addToExpecteddelivery(\RialtoWebService\StructType\ExpectedDelivery $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\ExpectedDelivery) {
            throw new \InvalidArgumentException(sprintf('The expecteddelivery property can only contain items of \RialtoWebService\StructType\ExpectedDelivery, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->expecteddelivery[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\ExpectedDeliveries
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
