<?php

namespace RialtoWebService\Client;

use RialtoWebService\Client\GetOrderServiceDetails;
use RialtoWebService\Result\GetOrdersResult;
use RialtoWebService\ClassMap;
use RialtoWebService\ServiceType\Get;
use RialtoWebService\StructType\GetRialtoOrderDetails;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class GetClient
{
    /** @var ClientConfiguration */
    private $configuration;

    public function __construct(ClientConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getOrders(array $orderNumbers)
    {
        $service = new Get([
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_URL => $this->configuration->getWsdlUrl()
        ]);

        $rialtoOrderDetailsResult = $service->GetRialtoOrderDetails(
            $this->setOrderDetails($orderNumbers)
        );

        if ($rialtoOrderDetailsResult === false) {
            throw new \RuntimeException('Could not get orders from RWS, please re-check order Id\'s');
        }

//        return GetOrdersResult::of($rialtoOrderDetailsResult->getRialtoorderdetailsresponse());
        return GetOrdersResult::fromResponse($rialtoOrderDetailsResult->getRialtoorderdetailsresponse());
    }

    /**
     * @param $orderNumbers
     * @return GetRialtoOrderDetails
     */
    protected function setOrderDetails(array $orderNumbers): GetRialtoOrderDetails
    {
        $rialtoOrderDetails = new GetRialtoOrderDetails;
        $rialtoOrderDetails->setUserName($this->configuration->getUsername());
        $rialtoOrderDetails->setPassword($this->configuration->getPassword());
        $rialtoOrderDetails->setRialtoorderdetails(
            $this->getRialtoOrderDetailsList($orderNumbers)
        );

        return $rialtoOrderDetails;
    }

    /**
     * @param array $orderNumbers
     * @return \RialtoWebService\StructType\RialtoOrderDetailList
     */
    protected function getRialtoOrderDetailsList(array $orderNumbers)
    {
        $orderServiceDetails = new GetOrderServiceDetails;
        return $orderServiceDetails->getRialtoOrderDetailsList($orderNumbers);
    }
}