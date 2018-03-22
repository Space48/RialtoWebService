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
    /** @var ClientConfiguration */
    private $configuration;

    public function __construct(ClientConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param RialtoWebOrderList $orderList
     * @return AddOrdersResult
     * @throws ClientException
     * @throws \SoapFault
     */
    public function addOrders(RialtoWebOrderList $orderList): AddOrdersResult
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

        if (!$result instanceof AddRialtoOrdersResponse) {
            $message = \implode("\n", $service->getLastError());
            throw new ClientException($message);
        }

        return AddOrdersResult::of($result->getRialtowebordersresponse()->getErrors()->getError());
    }
}
