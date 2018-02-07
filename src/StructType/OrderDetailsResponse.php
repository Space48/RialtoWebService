<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDetailsResponse StructType
 * @subpackage Structs
 */
class OrderDetailsResponse extends AbstractStructBase
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\OrderDetailsResponseOrderList
     */
    public $orders;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\OrdersResponseErrorList
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
     * Constructor method for OrderDetailsResponse
     * @uses OrderDetailsResponse::setOrders()
     * @uses OrderDetailsResponse::setErrors()
     * @uses OrderDetailsResponse::setReturnStatus()
     * @param \RialtoWebService\StructType\OrderDetailsResponseOrderList $orders
     * @param \RialtoWebService\StructType\OrdersResponseErrorList $errors
     * @param int $returnStatus
     */
    public function __construct(\RialtoWebService\StructType\OrderDetailsResponseOrderList $orders = null, \RialtoWebService\StructType\OrdersResponseErrorList $errors = null, $returnStatus = null)
    {
        $this
            ->setOrders($orders)
            ->setErrors($errors)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get orders value
     * @return \RialtoWebService\StructType\OrderDetailsResponseOrderList
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \RialtoWebService\StructType\OrderDetailsResponseOrderList $orders
     * @return \RialtoWebService\StructType\OrderDetailsResponse
     */
    public function setOrders(\RialtoWebService\StructType\OrderDetailsResponseOrderList $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Get errors value
     * @return \RialtoWebService\StructType\OrdersResponseErrorList
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param \RialtoWebService\StructType\OrdersResponseErrorList $errors
     * @return \RialtoWebService\StructType\OrderDetailsResponse
     */
    public function setErrors(\RialtoWebService\StructType\OrdersResponseErrorList $errors = null)
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
     * @return \RialtoWebService\StructType\OrderDetailsResponse
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
     * @return \RialtoWebService\StructType\OrderDetailsResponse
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
