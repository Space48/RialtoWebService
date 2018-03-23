<?php

namespace RialtoWebService\Result;

use RialtoWebService\StructType\RialtoOrderDetailsResponse;
use RialtoWebService\StructType\RialtoOrderDetailsResponseOrder;
use RialtoWebService\StructType\RialtoOrderDetailsResponseOrderList;
use RialtoWebService\StructType\RialtoOrdersResponseError;
use RialtoWebService\StructType\RialtoOrdersResponseErrorList;

class GetOrdersResult implements \IteratorAggregate
{
    /** @var array $orders */
    private $orders = [];

    /** @var string */
    private $returnStatus;

    private function __construct(string $returnStatus)
    {
        $this->returnStatus = $returnStatus;
    }

//    public static function of($orderResults): self
//    {
//        $instance = new self();
//
//        \assert($orderResults instanceof RialtoOrderDetailsResponse);
//        $instance->ordersResponse['Orders'] = $instance->getOrderResults($orderResults->getOrders());
//        $instance->ordersResponse['Errors'] = $instance->getErrorResults($orderResults->getErrors());
//        $instance->ordersResponse['ReturnStatus'] = $orderResults->ReturnStatus;
//
//        return $instance;
//    }

    /**
     * @param RialtoOrderDetailsResponse $orderResults
     * @return GetOrdersResult
     */
    public static function fromResponse(RialtoOrderDetailsResponse $orderResults): self
    {
        $instance = new self($orderResults->getReturnStatus());

        /** @var RialtoOrderDetailsResponseOrder $orderResult */
        foreach ($orderResults->getOrders() as $orderResult) {
            $instance->orders[$orderResult->getOrderNo()] = new GetOrderResult($orderResult);
        }

        /** @var RialtoOrdersResponseError $orderError */
        foreach ($orderResults->getErrors() as $orderError) {
            $order = $instance->orders[$orderError->getOrderNo()];
            \assert($order instanceof GetOrderResult);
            $instance->orders[$orderError->getOrderNo()] = $order->withErrors($orderError);
        }

        $instance->returnStatus = $orderResults->getReturnStatus();
        return $instance;
    }

    public function getReturnStatus(): string
    {
        return $this->returnStatus;
    }

    /**
     * @param string $orderId
     * @return GetOrderResult|null
     */
    public function getOrderResultById(string $orderId)
    {
        return $this->orders[$orderId] ?? null;
    }

//    /**
//     * @param RialtoOrderDetailsResponseOrderList $orderDetailsList
//     * @return array
//     */
//    public function getOrderResults(RialtoOrderDetailsResponseOrderList $orderDetailsList)
//    {
//        if (!isset($orderDetailsList->order)) {
//            return;
//        }
//
//        foreach ($orderDetailsList->order as $orderDetail) {
//            $order['orderNo'] = $orderDetail->OrderNo;
//            $order['fpOrderNo'] = $orderDetail->FPOrderNo;
//            $order['statusCode'] = $orderDetail->StatusCode;
//            $order['despatchDate'] = $orderDetail->DespatchDate;
//            $order['consignmentNo'] = $orderDetail->ConsignmentNo;
//            $order['carrierRef'] = $orderDetail->CarrierRef;
//            $order['carrierName'] = $orderDetail->CarrierName;
//            $order['updated'] = $orderDetail->Updated;
//            $orders[] = $order;
//        }
//
//        return isset($orders) ? $orders : null;
//    }

//    /**
//     * @param RialtoOrdersResponseErrorList $orderErrorsList
//     * @return array
//     */
//    public function getErrorResults(RialtoOrdersResponseErrorList $orderErrorsList)
//    {
//        if (!isset($orderErrorsList->error)) {
//            return;
//        }
//
//        foreach ($orderErrorsList->error as $orderError) {
//            $error['errorCode'] = $orderError->ErrorCode;
//            $error['errorMessage'] = $orderError->ErrorMessage;
//            $errors[] = $error;
//        }
//
//        return isset($errors) ? $errors : null;
//    }

    public function getIterator()
    {
        return new \ArrayIterator($this->ordersResponse);
    }
}
