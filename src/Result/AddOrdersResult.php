<?php

namespace RialtoWebService\Result;

use RialtoWebService\StructType\RialtoOrdersResponseError;

class AddOrdersResult implements \IteratorAggregate
{
    private $orders = [];

    /**
     * @param array $orderResults
     * @return AddOrdersResult
     */
    public static function of(array $orderResults = []): self
    {
        $instance = new self();
        foreach ($orderResults as $error) {
            \assert($error instanceof RialtoOrdersResponseError);
            \assert($error->getOrderNo() !== null);

            if (!isset($instance->orders[$error->getOrderNo()])) {
                $instance->orders[$error->getOrderNo()] = new AddOrderResult($error->getOrderNo(), []);
            }

            /** @var AddOrderResult $orderResult */
            $orderResult = $instance->orders[$error->getOrderNo()];

            if ($error->getErrorCode() !== null) {
                $instance->orders[$error->getOrderNo()] = $orderResult->withError(
                    new Error($error->getErrorCode(), $error->getErrorMessage())
                );
            }
        }

        return $instance;
    }

    /**
     * @param string $orderIdentifier
     * @return AddOrderResult|null
     */
    public function getOrderResultByOrderIdentifier(string $orderIdentifier)
    {
        return $this->orders[$orderIdentifier] ?? new AddOrderResult($orderIdentifier);
    }

    public function equals($other): bool
    {
        if (!$other instanceof $this) {
            return false;
        }

        $thoseContainThese = $this->matchOrders($this, $other);
        $theseContainThose = $this->matchOrders($other, $this);

        return $thoseContainThese && $theseContainThose;
    }

    private function matchOrders(AddOrdersResult $a, AddOrdersResult $b): bool
    {
        foreach ($a->orders as $orderId => $item) {
            $addOrderResult = $b->getOrderResultByOrderIdentifier($orderId);
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

    private function __construct()
    {
    }
}
