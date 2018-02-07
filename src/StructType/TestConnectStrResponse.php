<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TestConnectStrResponse StructType
 * @subpackage Structs
 */
class TestConnectStrResponse extends AbstractStructBase
{
    /**
     * The TestConnectStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TestConnectStrResult;
    /**
     * Constructor method for TestConnectStrResponse
     * @uses TestConnectStrResponse::setTestConnectStrResult()
     * @param string $testConnectStrResult
     */
    public function __construct($testConnectStrResult = null)
    {
        $this
            ->setTestConnectStrResult($testConnectStrResult);
    }
    /**
     * Get TestConnectStrResult value
     * @return string|null
     */
    public function getTestConnectStrResult()
    {
        return $this->TestConnectStrResult;
    }
    /**
     * Set TestConnectStrResult value
     * @param string $testConnectStrResult
     * @return \RialtoWebService\StructType\TestConnectStrResponse
     */
    public function setTestConnectStrResult($testConnectStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($testConnectStrResult) && !is_string($testConnectStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($testConnectStrResult)), __LINE__);
        }
        $this->TestConnectStrResult = $testConnectStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\TestConnectStrResponse
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
