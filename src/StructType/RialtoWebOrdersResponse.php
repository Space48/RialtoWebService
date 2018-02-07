<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrdersResponse StructType
 * @subpackage Structs
 */
class RialtoWebOrdersResponse extends AbstractStructBase
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoWebOrdersResponseOrderList
     */
    public $orders;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoOrdersResponseErrorList
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
     * Constructor method for RialtoWebOrdersResponse
     * @uses RialtoWebOrdersResponse::setOrders()
     * @uses RialtoWebOrdersResponse::setErrors()
     * @uses RialtoWebOrdersResponse::setReturnStatus()
     * @param \RialtoWebService\StructType\RialtoWebOrdersResponseOrderList $orders
     * @param \RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors
     * @param int $returnStatus
     */
    public function __construct(\RialtoWebService\StructType\RialtoWebOrdersResponseOrderList $orders = null, \RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors = null, $returnStatus = null)
    {
        $this
            ->setOrders($orders)
            ->setErrors($errors)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get orders value
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponseOrderList
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \RialtoWebService\StructType\RialtoWebOrdersResponseOrderList $orders
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponse
     */
    public function setOrders(\RialtoWebService\StructType\RialtoWebOrdersResponseOrderList $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Get errors value
     * @return \RialtoWebService\StructType\RialtoOrdersResponseErrorList
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param \RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponse
     */
    public function setErrors(\RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors = null)
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
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponse
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
     * @return \RialtoWebService\StructType\RialtoWebOrdersResponse
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
