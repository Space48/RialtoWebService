<?php

namespace RialtoWebService\Result;

class AddOrderResult
{
    /** @var string */
    private $orderIdentifier;

    /** @var ErrorSet */
    private $errors;

    public function __construct(string $orderIdentifier)
    {
        $this->orderIdentifier = $orderIdentifier;
        $this->errors = ErrorSet::create();
    }

    public function getOrderIdentifier(): string
    {
        return $this->orderIdentifier;
    }

    public function getErrors(): ErrorSet
    {
        return $this->errors;
    }

    public function withError(Error $error): self
    {
        $instance = clone $this;
        $instance->error = $this->errors->withError($error);
        return $instance;
    }

    public function isSuccess(): bool
    {
        return $this->errors->isEmpty();
    }
}
