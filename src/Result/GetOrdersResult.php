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
        $rialtoOrderDetailsResponseOrders = $orderResults->getOrders()->getOrder() ?? [];
        foreach ($rialtoOrderDetailsResponseOrders as $orderResult) {
            $instance->orders[$orderResult->getOrderNo()] = (new GetOrderResult($orderResult->getOrderNo()))->withOrder($orderResult);
        }

        $errors = $orderResults->getErrors()->getError() ?? [];
        foreach ($errors as $error) {
            if (!isset($instance->orders[$error->getOrderNo()])) {
                $instance->orders[$error->getOrderNo()] = new GetOrderResult($error->getOrderNo());
            }

            /** @var GetOrderResult $order */
            $order = $instance->orders[$error->getOrderNo()];
            $instance->orders[$error->getOrderNo()] = $order->withError(new Error($error->getErrorCode(), $error->getErrorMessage()));
        }

        return $instance;
    }

    public function getReturnStatus(): string
    {
        return $this->returnStatus;
    }

    /**
     * @param string $orderNo
     * @return GetOrderResult|null
     */
    public function getOrderResult(string $orderNo)
    {
        return $this->orders[$orderNo] ?? null;
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

    public function getIterator()
    {
        return new \ArrayIterator($this->orders);
    }
}
