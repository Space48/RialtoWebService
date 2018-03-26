<?php

namespace RialtoWebService\Result;

use RialtoWebService\StructType\RialtoOrderDetailsResponseOrder;

class GetOrderResult
{
    /** @var RialtoOrderDetailsResponseOrder */
    public $order;

    /** @var array */
    public $errors = [];

    public function __construct(RialtoOrderDetailsResponseOrder $order)
    {
        $this->order = $order;
    }

    public function withErrors(array $errors): self
    {
        $instance = clone $this;
        $instance->errors = $errors;
        return $instance;
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
