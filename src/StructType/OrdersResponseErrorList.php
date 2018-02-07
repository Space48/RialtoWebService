<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdersResponseErrorList StructType
 * @subpackage Structs
 */
class OrdersResponseErrorList extends AbstractStructBase
{
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\OrdersResponseError[]
     */
    public $error;
    /**
     * Constructor method for OrdersResponseErrorList
     * @uses OrdersResponseErrorList::setError()
     * @param \RialtoWebService\StructType\OrdersResponseError[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\OrdersResponseError[]|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }
    /**
     * Set error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\OrdersResponseError[] $error
     * @return \RialtoWebService\StructType\OrdersResponseErrorList
     */
    public function setError(array $error = array())
    {
        foreach ($error as $ordersResponseErrorListErrorItem) {
            // validation for constraint: itemType
            if (!$ordersResponseErrorListErrorItem instanceof \RialtoWebService\StructType\OrdersResponseError) {
                throw new \InvalidArgumentException(sprintf('The error property can only contain items of \RialtoWebService\StructType\OrdersResponseError, "%s" given', is_object($ordersResponseErrorListErrorItem) ? get_class($ordersResponseErrorListErrorItem) : gettype($ordersResponseErrorListErrorItem)), __LINE__);
            }
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->error);
        } else {
            $this->error = $error;
        }
        return $this;
    }
    /**
     * Add item to error value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\OrdersResponseError $item
     * @return \RialtoWebService\StructType\OrdersResponseErrorList
     */
    public function addToError(\RialtoWebService\StructType\OrdersResponseError $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\OrdersResponseError) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of \RialtoWebService\StructType\OrdersResponseError, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\OrdersResponseErrorList
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
