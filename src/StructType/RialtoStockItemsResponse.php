<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoStockItemsResponse StructType
 * @subpackage Structs
 */
class RialtoStockItemsResponse extends AbstractStructBase
{
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoStockItemReponseItemList
     */
    public $items;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoStockItemResponseErrorList
     */
    public $errors;
    /**
     * The ReturnStatus
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ReturnStatus;
    /**
     * Constructor method for RialtoStockItemsResponse
     * @uses RialtoStockItemsResponse::setItems()
     * @uses RialtoStockItemsResponse::setErrors()
     * @uses RialtoStockItemsResponse::setReturnStatus()
     * @param \RialtoWebService\StructType\RialtoStockItemReponseItemList $items
     * @param \RialtoWebService\StructType\RialtoStockItemResponseErrorList $errors
     * @param int $returnStatus
     */
    public function __construct(\RialtoWebService\StructType\RialtoStockItemReponseItemList $items = null, \RialtoWebService\StructType\RialtoStockItemResponseErrorList $errors = null, $returnStatus = null)
    {
        $this
            ->setItems($items)
            ->setErrors($errors)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get items value
     * @return \RialtoWebService\StructType\RialtoStockItemReponseItemList
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \RialtoWebService\StructType\RialtoStockItemReponseItemList $items
     * @return \RialtoWebService\StructType\RialtoStockItemsResponse
     */
    public function setItems(\RialtoWebService\StructType\RialtoStockItemReponseItemList $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get errors value
     * @return \RialtoWebService\StructType\RialtoStockItemResponseErrorList
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param \RialtoWebService\StructType\RialtoStockItemResponseErrorList $errors
     * @return \RialtoWebService\StructType\RialtoStockItemsResponse
     */
    public function setErrors(\RialtoWebService\StructType\RialtoStockItemResponseErrorList $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Get ReturnStatus value
     * @return int
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }
    /**
     * Set ReturnStatus value
     * @param int $returnStatus
     * @return \RialtoWebService\StructType\RialtoStockItemsResponse
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: int
        if (!is_null($returnStatus) && !is_numeric($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnStatus)), __LINE__);
        }
        $this->ReturnStatus = $returnStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoStockItemsResponse
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
