<?php

namespace RialtoWebService\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetOrderDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetOrderDetails $parameters
     * @return \RialtoWebService\StructType\GetOrderDetailsResponse|bool
     */
    public function GetOrderDetails(\RialtoWebService\StructType\GetOrderDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetOrderDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderDetailsStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetOrderDetailsStr $parameters
     * @return \RialtoWebService\StructType\GetOrderDetailsStrResponse|bool
     */
    public function GetOrderDetailsStr(\RialtoWebService\StructType\GetOrderDetailsStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetOrderDetailsStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedOrders $parameters
     * @return \RialtoWebService\StructType\GetUpdatedOrdersResponse|bool
     */
    public function GetUpdatedOrders(\RialtoWebService\StructType\GetUpdatedOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedOrdersStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedOrdersStr $parameters
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStrResponse|bool
     */
    public function GetUpdatedOrdersStr(\RialtoWebService\StructType\GetUpdatedOrdersStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedOrdersStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStockList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetStockList $parameters
     * @return \RialtoWebService\StructType\GetStockListResponse|bool
     */
    public function GetStockList(\RialtoWebService\StructType\GetStockList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStockList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedStock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedStock $parameters
     * @return \RialtoWebService\StructType\GetUpdatedStockResponse|bool
     */
    public function GetUpdatedStock(\RialtoWebService\StructType\GetUpdatedStock $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedStock($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStockListStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetStockListStr $parameters
     * @return \RialtoWebService\StructType\GetStockListStrResponse|bool
     */
    public function GetStockListStr(\RialtoWebService\StructType\GetStockListStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStockListStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedStockStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedStockStr $parameters
     * @return \RialtoWebService\StructType\GetUpdatedStockStrResponse|bool
     */
    public function GetUpdatedStockStr(\RialtoWebService\StructType\GetUpdatedStockStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedStockStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRialtoOrderDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetRialtoOrderDetails $parameters
     * @return \RialtoWebService\StructType\GetRialtoOrderDetailsResponse|bool
     */
    public function GetRialtoOrderDetails(\RialtoWebService\StructType\GetRialtoOrderDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetRialtoOrderDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRialtoOrderDetailsStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetRialtoOrderDetailsStr $parameters
     * @return \RialtoWebService\StructType\GetRialtoOrderDetailsStrResponse|bool
     */
    public function GetRialtoOrderDetailsStr(\RialtoWebService\StructType\GetRialtoOrderDetailsStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetRialtoOrderDetailsStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedRialtoOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedRialtoOrders $parameters
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersResponse|bool
     */
    public function GetUpdatedRialtoOrders(\RialtoWebService\StructType\GetUpdatedRialtoOrders $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedRialtoOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedRialtoOrdersStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedRialtoOrdersStr $parameters
     * @return \RialtoWebService\StructType\GetUpdatedRialtoOrdersStrResponse|bool
     */
    public function GetUpdatedRialtoOrdersStr(\RialtoWebService\StructType\GetUpdatedRialtoOrdersStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedRialtoOrdersStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStockLevels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetStockLevels $parameters
     * @return \RialtoWebService\StructType\GetStockLevelsResponse|bool
     */
    public function GetStockLevels(\RialtoWebService\StructType\GetStockLevels $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStockLevels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedStockLevels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedStockLevels $parameters
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsResponse|bool
     */
    public function GetUpdatedStockLevels(\RialtoWebService\StructType\GetUpdatedStockLevels $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedStockLevels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStockLevelsStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetStockLevelsStr $parameters
     * @return \RialtoWebService\StructType\GetStockLevelsStrResponse|bool
     */
    public function GetStockLevelsStr(\RialtoWebService\StructType\GetStockLevelsStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetStockLevelsStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUpdatedStockLevelsStr
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RialtoWebService\StructType\GetUpdatedStockLevelsStr $parameters
     * @return \RialtoWebService\StructType\GetUpdatedStockLevelsStrResponse|bool
     */
    public function GetUpdatedStockLevelsStr(\RialtoWebService\StructType\GetUpdatedStockLevelsStr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetUpdatedStockLevelsStr($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \RialtoWebService\StructType\GetOrderDetailsResponse|\RialtoWebService\StructType\GetOrderDetailsStrResponse|\RialtoWebService\StructType\GetRialtoOrderDetailsResponse|\RialtoWebService\StructType\GetRialtoOrderDetailsStrResponse|\RialtoWebService\StructType\GetStockLevelsResponse|\RialtoWebService\StructType\GetStockLevelsStrResponse|\RialtoWebService\StructType\GetStockListResponse|\RialtoWebService\StructType\GetStockListStrResponse|\RialtoWebService\StructType\GetUpdatedOrdersResponse|\RialtoWebService\StructType\GetUpdatedOrdersStrResponse|\RialtoWebService\StructType\GetUpdatedRialtoOrdersResponse|\RialtoWebService\StructType\GetUpdatedRialtoOrdersStrResponse|\RialtoWebService\StructType\GetUpdatedStockLevelsResponse|\RialtoWebService\StructType\GetUpdatedStockLevelsStrResponse|\RialtoWebService\StructType\GetUpdatedStockResponse|\RialtoWebService\StructType\GetUpdatedStockStrResponse
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
