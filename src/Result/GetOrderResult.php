<?php

namespace RialtoWebService\Result;

use RialtoWebService\StructType\RialtoOrderDetailsResponseOrder;

class GetOrderResult
{
    private $orderNo;

    /** @var RialtoOrderDetailsResponseOrder */
    private $order;

    /** @var array */
    private $errors = [];

    public function __construct(string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    public function withOrder(RialtoOrderDetailsResponseOrder $order): self
    {
        $instance = clone $this;
        $instance->order = $order;
        return $instance;
    }

    /**
     * @return RialtoOrderDetailsResponseOrder|null
     */
    public function getOrderReponse()
    {
        return $this->order;
    }

    public function withError(Error $error): self
    {
        $instance = clone $this;
        $instance->errors[] = $error;
        return $instance;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function equals($other)
    {
        if (!($other instanceof $this && $other->order->getOrderNo() === $this->order->getOrderNo())) {
            return false;
        }

        $errorChecker = function (Error $a, $b) { return $a->equals($b); };
        $errorsMatchA = empty(array_udiff($this->errors, $other->errors, $errorChecker));
        $errorsMatchB = empty(array_udiff($other->errors, $this->errors, $errorChecker));

        return $errorsMatchA && $errorsMatchB;
    }
}
