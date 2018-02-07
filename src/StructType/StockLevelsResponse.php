<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockLevelsResponse StructType
 * @subpackage Structs
 */
class StockLevelsResponse extends AbstractStructBase
{
    /**
     * The stocklist
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\StockLevelsResponseStockList
     */
    public $stocklist;
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
     * Constructor method for StockLevelsResponse
     * @uses StockLevelsResponse::setStocklist()
     * @uses StockLevelsResponse::setErrors()
     * @uses StockLevelsResponse::setReturnStatus()
     * @param \RialtoWebService\StructType\StockLevelsResponseStockList $stocklist
     * @param \RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors
     * @param int $returnStatus
     */
    public function __construct(\RialtoWebService\StructType\StockLevelsResponseStockList $stocklist = null, \RialtoWebService\StructType\RialtoOrdersResponseErrorList $errors = null, $returnStatus = null)
    {
        $this
            ->setStocklist($stocklist)
            ->setErrors($errors)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get stocklist value
     * @return \RialtoWebService\StructType\StockLevelsResponseStockList
     */
    public function getStocklist()
    {
        return $this->stocklist;
    }
    /**
     * Set stocklist value
     * @param \RialtoWebService\StructType\StockLevelsResponseStockList $stocklist
     * @return \RialtoWebService\StructType\StockLevelsResponse
     */
    public function setStocklist(\RialtoWebService\StructType\StockLevelsResponseStockList $stocklist = null)
    {
        $this->stocklist = $stocklist;
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
     * @return \RialtoWebService\StructType\StockLevelsResponse
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
     * @return \RialtoWebService\StructType\StockLevelsResponse
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
     * @return \RialtoWebService\StructType\StockLevelsResponse
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
