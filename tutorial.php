<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://rws.redarrow.co.uk/service.asmx?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://rws.redarrow.co.uk/service.asmx?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \RialtoWebService\ClassMap::get(),
);
/**
 * Samples for Test ServiceType
 */
$test = new \RialtoWebService\ServiceType\Test($options);
/**
 * Sample call for TestConnect operation/method
 */
if ($test->TestConnect(new \RialtoWebService\StructType\TestConnect()) !== false) {
    print_r($test->getResult());
} else {
    print_r($test->getLastError());
}
/**
 * Sample call for TestConnectStr operation/method
 */
if ($test->TestConnectStr(new \RialtoWebService\StructType\TestConnectStr()) !== false) {
    print_r($test->getResult());
} else {
    print_r($test->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \RialtoWebService\ServiceType\Add($options);
/**
 * Sample call for AddOrders operation/method
 */
if ($add->AddOrders(new \RialtoWebService\StructType\AddOrders()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddOrdersStr operation/method
 */
if ($add->AddOrdersStr(new \RialtoWebService\StructType\AddOrdersStr()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddRialtoOrders_SampleXML operation/method
 */
if ($add->AddRialtoOrders_SampleXML(new \RialtoWebService\StructType\AddRialtoOrders_SampleXML()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddRialtoOrders operation/method
 */
if ($add->AddRialtoOrders(new \RialtoWebService\StructType\AddRialtoOrders()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddRialtoOrdersStr operation/method
 */
if ($add->AddRialtoOrdersStr(new \RialtoWebService\StructType\AddRialtoOrdersStr()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddRialtoStockItems operation/method
 */
if ($add->AddRialtoStockItems(new \RialtoWebService\StructType\AddRialtoStockItems()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddRialtoStockItemsStr operation/method
 */
if ($add->AddRialtoStockItemsStr(new \RialtoWebService\StructType\AddRialtoStockItemsStr()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \RialtoWebService\ServiceType\Get($options);
/**
 * Sample call for GetOrderDetails operation/method
 */
if ($get->GetOrderDetails(new \RialtoWebService\StructType\GetOrderDetails()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOrderDetailsStr operation/method
 */
if ($get->GetOrderDetailsStr(new \RialtoWebService\StructType\GetOrderDetailsStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedOrders operation/method
 */
if ($get->GetUpdatedOrders(new \RialtoWebService\StructType\GetUpdatedOrders()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedOrdersStr operation/method
 */
if ($get->GetUpdatedOrdersStr(new \RialtoWebService\StructType\GetUpdatedOrdersStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStockList operation/method
 */
if ($get->GetStockList(new \RialtoWebService\StructType\GetStockList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedStock operation/method
 */
if ($get->GetUpdatedStock(new \RialtoWebService\StructType\GetUpdatedStock()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStockListStr operation/method
 */
if ($get->GetStockListStr(new \RialtoWebService\StructType\GetStockListStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedStockStr operation/method
 */
if ($get->GetUpdatedStockStr(new \RialtoWebService\StructType\GetUpdatedStockStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRialtoOrderDetails operation/method
 */
if ($get->GetRialtoOrderDetails(new \RialtoWebService\StructType\GetRialtoOrderDetails()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRialtoOrderDetailsStr operation/method
 */
if ($get->GetRialtoOrderDetailsStr(new \RialtoWebService\StructType\GetRialtoOrderDetailsStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedRialtoOrders operation/method
 */
if ($get->GetUpdatedRialtoOrders(new \RialtoWebService\StructType\GetUpdatedRialtoOrders()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedRialtoOrdersStr operation/method
 */
if ($get->GetUpdatedRialtoOrdersStr(new \RialtoWebService\StructType\GetUpdatedRialtoOrdersStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStockLevels operation/method
 */
if ($get->GetStockLevels(new \RialtoWebService\StructType\GetStockLevels()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedStockLevels operation/method
 */
if ($get->GetUpdatedStockLevels(new \RialtoWebService\StructType\GetUpdatedStockLevels()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStockLevelsStr operation/method
 */
if ($get->GetStockLevelsStr(new \RialtoWebService\StructType\GetStockLevelsStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUpdatedStockLevelsStr operation/method
 */
if ($get->GetUpdatedStockLevelsStr(new \RialtoWebService\StructType\GetUpdatedStockLevelsStr()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
