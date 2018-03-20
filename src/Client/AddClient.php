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

    /** @var ClientConfiguration */
    private $configuration;

    public function __construct(ClientConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function sendOrders(RialtoWebOrderList $orderList): AddOrdersResult
    {
        $orders = new AddRialtoOrders(
            $orderList,
            $this->configuration->getUsername(),
            $this->configuration->getPassword()
        );

        $service = new Add([
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_URL => $this->configuration->getWsdlUrl()
        ]);

        $result = $service->AddRialtoOrders($orders);
        return AddOrdersResult::of($result->getRialtowebordersresponse()->getErrors()->getError());
    }
}
