<?php

namespace RialtoWebService\Result;

class ErrorSet implements \IteratorAggregate, \JsonSerializable
{
    private $errors = [];

    public static function create()
    {
        return new self;
    }

    public function withError(Error $error): self
    {
        $instance = clone $this;
        $instance->errors[$error->getCode()] = $error;
        return $instance;
    }

    public function hasErrorCode(string $errorCode): bool
    {
        return isset($this->errors[$errorCode]);
    }

    public function equals($other): bool
    {
        if (!$other instanceof $this) {
            return false;
        }

        $theseCodes = array_keys($this->errors);
        $thoseCodes = array_keys($other->errors);

        return count(\array_intersect($theseCodes, $thoseCodes)) === 0
            && count(\array_intersect($thoseCodes, $theseCodes)) === 0;
    }

    public function isEmpty(): bool
    {
        return empty($this->errors);
    }

    public function jsonSerialize()
    {
        return \json_encode($this->errors);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->errors);
    }

    private function __construct()
    {
    }
}