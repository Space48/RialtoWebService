<?php

namespace RialtoWebService\Client;

use RialtoWebService\ClassMap;
use RialtoWebService\Result\AddOrdersResult;
use RialtoWebService\ServiceType\Add;
use RialtoWebService\StructType\AddRialtoOrders;
use RialtoWebService\StructType\RialtoWebOrderList;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class AddClient
{
    const LIVE_WSDL_URL = 'https://rws.redarrow.co.uk/service.asmx?wsdl';
    const TEST_WSDL_URL = 'http://test.rws.redarrow.co.uk/service.asmx?wsdl';

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $wsdlUrl;

    public function __construct(string $username, string $password, bool $testMode = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->wsdlUrl = $testMode ? self::TEST_WSDL_URL : self::LIVE_WSDL_URL;
    }

    public function sendOrders(RialtoWebOrderList $orderList): AddOrdersResult
    {
        $orders = new AddRialtoOrders($orderList, $this->username, $this->password);
        $service = new Add([
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_URL => $this->wsdlUrl
        ]);

        $result = $service->AddRialtoOrders($orders);
        return AddOrdersResult::of($result->getRialtowebordersresponse()->getErrors()->getError());
    }
}
