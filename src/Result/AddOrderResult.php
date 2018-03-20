<?php

namespace RialtoWebService\Result;

class AddOrderResult
{
    /** @var string */
    private $orderIdentifier;

    /** @var array */
    private $errors;

    public function __construct(string $orderIdentifier, array $errors = [])
    {
        $this->orderIdentifier = $orderIdentifier;
        $this->errors = $errors;
    }

    public function getOrderIdentifier(): string
    {
        return $this->orderIdentifier;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function withError(Error $error): self
    {
        $clone = clone $this;
        $clone->errors[] = $error;
        return $clone;
    }

    public function isSuccess(): bool
    {
        return empty($this->errors);
    }

    public function equals($other)
    {
        if (!($other instanceof $this && $other->orderIdentifier === $this->orderIdentifier)) {
            return false;
        }

        $errorChecker = function (Error $a, $b) { return $a->equals($b); };
        $errorsMatchA = empty(array_udiff($this->errors, $other->errors, $errorChecker));
        $errorsMatchB = empty(array_udiff($other->errors, $this->errors, $errorChecker));

        return $errorsMatchA && $errorsMatchB;
    }
}
