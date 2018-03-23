<?php

namespace RialtoWebService\Result;

use RialtoWebService\StructType\RialtoOrderDetailsResponseOrder;

class GetOrderResult
{
    /** @var RialtoOrderDetailsResponseOrder */
    private $order;

    /** @var array */
    private $errors = [];

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
}
