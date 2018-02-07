<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockListResponse StructType
 * @subpackage Structs
 */
class StockListResponse extends AbstractStructBase
{
    /**
     * The stocklist
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\StockListResponseStockList
     */
    public $stocklist;
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
     * Constructor method for StockListResponse
     * @uses StockListResponse::setStocklist()
     * @uses StockListResponse::setErrors()
     * @uses StockListResponse::setReturnStatus()
     * @param \RialtoWebService\StructType\StockListResponseStockList $stocklist
     * @param \RialtoWebService\StructType\OrdersResponseErrorList $errors
     * @param int $returnStatus
     */
    public function __construct(\RialtoWebService\StructType\StockListResponseStockList $stocklist = null, \RialtoWebService\StructType\OrdersResponseErrorList $errors = null, $returnStatus = null)
    {
        $this
            ->setStocklist($stocklist)
            ->setErrors($errors)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get stocklist value
     * @return \RialtoWebService\StructType\StockListResponseStockList
     */
    public function getStocklist()
    {
        return $this->stocklist;
    }
    /**
     * Set stocklist value
     * @param \RialtoWebService\StructType\StockListResponseStockList $stocklist
     * @return \RialtoWebService\StructType\StockListResponse
     */
    public function setStocklist(\RialtoWebService\StructType\StockListResponseStockList $stocklist = null)
    {
        $this->stocklist = $stocklist;
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
     * @return \RialtoWebService\StructType\StockListResponse
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
     * @return \RialtoWebService\StructType\StockListResponse
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
     * @return \RialtoWebService\StructType\StockListResponse
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
