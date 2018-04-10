<?php

namespace RialtoWebService\Client;

use RialtoWebService\ClassMap;
use RialtoWebService\Result\AddOrdersResult;
use RialtoWebService\ServiceType\Add;
use RialtoWebService\StructType\AddRialtoOrders;
use RialtoWebService\StructType\RialtoWebOrderList;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Psr\Log\LoggerInterface;

class AddClient
{
    /** @var ClientConfiguration */
    private $configuration;

    /** @var LoggerInterface */
    private $loggerInterface;

    public function __construct(ClientConfiguration $configuration, LoggerInterface $loggerInterface)
    {
        $this->configuration = $configuration;
        $this->loggerInterface = $loggerInterface;
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

        // log request and response
        $xmlRequest = $this->configuration->concealRequestCredentials(Add::getSoapClient()->__getLastRequest());
        $this->loggerInterface->info($xmlRequest);
        $this->loggerInterface->info(Add::getSoapClient()->__getLastResponse());


        if (!$result instanceof \RialtoWebService\StructType\AddRialtoOrdersResponse) {
            $errors = $service->getLastError();
            if (empty($errors)) {
                $message = 'RWS AddOrder Service failed without reporting any errors.';
            } else {
                $message = \implode("\n", $errors);
            }
            throw new ClientException($message);
        }

        return AddOrdersResult::of($result->getRialtowebordersresponse()->getErrors()->getError() ?? []);
    }
}
