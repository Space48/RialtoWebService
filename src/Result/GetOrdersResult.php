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
    public $orders = [];

    /** @var string */
    public $returnStatus;

    /**
     * @param RialtoOrderDetailsResponse $orderResults
     * @return GetOrdersResult
     */
    public static function fromResponse(RialtoOrderDetailsResponse $orderResults): self
    {
        $instance = new self($orderResults->getReturnStatus());

        if ($orderResults->getOrders() === null) {
            return $instance;
        }

        /** @var RialtoOrderDetailsResponseOrder $orderResult */
        foreach ($orderResults->getOrders()->order as $orderResult) {
            $instance->orders[$orderResult->getOrderNo()] = new GetOrderResult($orderResult);
        }

        // set results object return status and errors
        $instance->returnStatus = $orderResults->getReturnStatus();
        $instance = $instance->setErrors($instance, $orderResults);

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

    public function equals($other): bool
    {
        if (!$other instanceof $this) {
            return false;
        }

        $returnStatusMatches = $this->getReturnStatus() === $other->getReturnStatus();
        $thoseContainThese = $this->matchOrders($this, $other);
        $theseContainThose = $this->matchOrders($other, $this);

        return $returnStatusMatches && $thoseContainThese && $theseContainThose;
    }

    private function matchOrders(GetOrdersResult $a, GetOrdersResult $b): bool
    {
        foreach ($a->orders as $orderId => $item) {
            $addOrderResult = $b->getOrderResultById($orderId);
            if (!$addOrderResult || $addOrderResult->equals($item)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $instance
     * @param $orderResults
     * @return mixed
     */
    private function setErrors($instance, $orderResults)
    {
        if ($orderResults->getErrors() === null || $orderResults->getErrors()->error === null) {
            return $instance;
        }

        /** @var RialtoOrdersResponseError $orderError */
        foreach ($orderResults->getErrors()->error as $orderError) {
            $order = $instance->orders[$orderError->getOrderNo()];
            \assert($order instanceof GetOrderResult);
            $instance->orders[$orderError->getOrderNo()] = $order->withErrors([$orderError]);
        }

        return $instance;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orders);
    }
}
