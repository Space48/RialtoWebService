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
        $instance->errors = $this->errors->withError($error);
        return $instance;
    }

    public function isSuccess(): bool
    {
        return $this->errors->isEmpty();
    }

    public function equals($other): bool
    {
        return $other instanceof $this
            && $other->getOrderIdentifier() === $this->getOrderIdentifier()
            && $other->getErrors()->equals($this->errors);
    }
}
