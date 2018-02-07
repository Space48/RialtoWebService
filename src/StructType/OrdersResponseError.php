<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrdersResponseError StructType
 * @subpackage Structs
 */
class OrdersResponseError extends AbstractStructBase
{
    /**
     * The OrderNo
     * @var string
     */
    public $OrderNo;
    /**
     * The ErrorCode
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorMessage
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for OrdersResponseError
     * @uses OrdersResponseError::setOrderNo()
     * @uses OrdersResponseError::setErrorCode()
     * @uses OrdersResponseError::setErrorMessage()
     * @param string $orderNo
     * @param string $errorCode
     * @param string $errorMessage
     */
    public function __construct($orderNo = null, $errorCode = null, $errorMessage = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get OrderNo value
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param string $orderNo
     * @return \RialtoWebService\StructType\OrdersResponseError
     */
    public function setOrderNo($orderNo = null)
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \RialtoWebService\StructType\OrdersResponseError
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \RialtoWebService\StructType\OrdersResponseError
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\OrdersResponseError
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
