<?php

namespace RialtoWebService\Client;

use RialtoWebService\ClassMap;
use RialtoWebService\Result\AddOrdersResult;
use RialtoWebService\ServiceType\Add;
use RialtoWebService\StructType\AddRialtoOrders;
use RialtoWebService\StructType\RialtoWebOrderList;
use RialtoWebService\StructType\TestConnect;
use RialtoWebService\StructType\TestConnectResponse;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class TestClient
{
    /** @var ClientConfiguration */
    private $configuration;

    public function __construct(ClientConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function testService(): string
    {
        $payload = new TestConnect(
            $this->configuration->getUsername(),
            $this->configuration->getPassword()
        );

        $service = new \RialtoWebService\ServiceType\Test([
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_URL => $this->configuration->getWsdlUrl()
        ]);


        $result = $service->TestConnect($payload);

        if (!$result instanceof TestConnectResponse) {
            $message = \implode("\n", $service->getLastError());
            throw new ClientException($message);
        }

        return $result->getTestConnectResult()->getAny(true);
    }
}
