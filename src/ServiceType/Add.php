<?php

namespace RialtoWebService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddOrders $parameters
     * @return \RialtoWebService\StructType\AddOrdersResponse|bool
     */
    public function AddOrders(\RialtoWebService\StructType\AddOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddOrdersStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddOrdersStr $parameters
     * @return \RialtoWebService\StructType\AddOrdersStrResponse|bool
     */
    public function AddOrdersStr(\RialtoWebService\StructType\AddOrdersStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddOrdersStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRialtoOrders_SampleXML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddRialtoOrders_SampleXML $parameters
     * @return \RialtoWebService\StructType\AddRialtoOrders_SampleXMLResponse|bool
     */
    public function AddRialtoOrders_SampleXML(\RialtoWebService\StructType\AddRialtoOrders_SampleXML $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddRialtoOrders_SampleXML($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRialtoOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddRialtoOrders $parameters
     * @return \RialtoWebService\StructType\AddRialtoOrdersResponse|bool
     */
    public function AddRialtoOrders(\RialtoWebService\StructType\AddRialtoOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddRialtoOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRialtoOrdersStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddRialtoOrdersStr $parameters
     * @return \RialtoWebService\StructType\AddRialtoOrdersStrResponse|bool
     */
    public function AddRialtoOrdersStr(\RialtoWebService\StructType\AddRialtoOrdersStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddRialtoOrdersStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRialtoStockItems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddRialtoStockItems $parameters
     * @return \RialtoWebService\StructType\AddRialtoStockItemsResponse|bool
     */
    public function AddRialtoStockItems(\RialtoWebService\StructType\AddRialtoStockItems $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddRialtoStockItems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddRialtoStockItemsStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\AddRialtoStockItemsStr $parameters
     * @return \RialtoWebService\StructType\AddRialtoStockItemsStrResponse|bool
     */
    public function AddRialtoStockItemsStr(\RialtoWebService\StructType\AddRialtoStockItemsStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AddRialtoStockItemsStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \RialtoWebService\StructType\AddOrdersResponse|\RialtoWebService\StructType\AddOrdersStrResponse|\RialtoWebService\StructType\AddRialtoOrdersResponse|\RialtoWebService\StructType\AddRialtoOrdersStrResponse|\RialtoWebService\StructType\AddRialtoOrders_SampleXMLResponse|\RialtoWebService\StructType\AddRialtoStockItemsResponse|\RialtoWebService\StructType\AddRialtoStockItemsStrResponse
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
