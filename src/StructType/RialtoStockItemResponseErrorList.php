<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItemResponseErrorList StructType
 * @subpackage Structs
 */
class RialtoStockItemResponseErrorList extends AbstractStructBase
{
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoStockItemResponseError[]
     */
    public $error;
    /**
     * Constructor method for RialtoStockItemResponseErrorList
     * @uses RialtoStockItemResponseErrorList::setError()
     * @param \RialtoWebService\StructType\RialtoStockItemResponseError[] $error
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
     * @return \RialtoWebService\StructType\RialtoStockItemResponseError[]|null
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
     * @param \RialtoWebService\StructType\RialtoStockItemResponseError[] $error
     * @return \RialtoWebService\StructType\RialtoStockItemResponseErrorList
     */
    public function setError(array $error = array())
    {
        foreach ($error as $rialtoStockItemResponseErrorListErrorItem) {
            // validation for constraint: itemType
            if (!$rialtoStockItemResponseErrorListErrorItem instanceof \RialtoWebService\StructType\RialtoStockItemResponseError) {
                throw new \InvalidArgumentException(sprintf('The error property can only contain items of \RialtoWebService\StructType\RialtoStockItemResponseError, "%s" given', is_object($rialtoStockItemResponseErrorListErrorItem) ? get_class($rialtoStockItemResponseErrorListErrorItem) : gettype($rialtoStockItemResponseErrorListErrorItem)), __LINE__);
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
     * @param \RialtoWebService\StructType\RialtoStockItemResponseError $item
     * @return \RialtoWebService\StructType\RialtoStockItemResponseErrorList
     */
    public function addToError(\RialtoWebService\StructType\RialtoStockItemResponseError $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\RialtoStockItemResponseError) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of \RialtoWebService\StructType\RialtoStockItemResponseError, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \RialtoWebService\StructType\RialtoStockItemResponseErrorList
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
