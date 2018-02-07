<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TestConnectResponse StructType
 * @subpackage Structs
 */
class TestConnectResponse extends AbstractStructBase
{
    /**
     * The TestConnectResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RialtoWebService\StructType\TestConnectResult
     */
    public $TestConnectResult;
    /**
     * Constructor method for TestConnectResponse
     * @uses TestConnectResponse::setTestConnectResult()
     * @param \RialtoWebService\StructType\TestConnectResult $testConnectResult
     */
    public function __construct(\RialtoWebService\StructType\TestConnectResult $testConnectResult = null)
    {
        $this
            ->setTestConnectResult($testConnectResult);
    }
    /**
     * Get TestConnectResult value
     * @return \RialtoWebService\StructType\TestConnectResult|null
     */
    public function getTestConnectResult()
    {
        return $this->TestConnectResult;
    }
    /**
     * Set TestConnectResult value
     * @param \RialtoWebService\StructType\TestConnectResult $testConnectResult
     * @return \RialtoWebService\StructType\TestConnectResponse
     */
    public function setTestConnectResult(\RialtoWebService\StructType\TestConnectResult $testConnectResult = null)
    {
        $this->TestConnectResult = $testConnectResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\TestConnectResponse
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
