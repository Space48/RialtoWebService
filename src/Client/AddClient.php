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
    private $logger;

    public function __construct(ClientConfiguration $configuration, LoggerInterface $logger)
    {
        $this->configuration = $configuration;
        $this->logger = $logger;
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
        $this->logger->info($xmlRequest);
        $this->logger->info(Add::getSoapClient()->__getLastResponse());


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
