<?php

namespace RialtoWebService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Test ServiceType
 * @subpackage Services
 */
class Test extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TestConnect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\TestConnect $parameters
     * @return \RialtoWebService\StructType\TestConnectResponse|bool
     */
    public function TestConnect(\RialtoWebService\StructType\TestConnect $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->TestConnect($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TestConnectStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\TestConnectStr $parameters
     * @return \RialtoWebService\StructType\TestConnectStrResponse|bool
     */
    public function TestConnectStr(\RialtoWebService\StructType\TestConnectStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->TestConnectStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \RialtoWebService\StructType\TestConnectResponse|\RialtoWebService\StructType\TestConnectStrResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
