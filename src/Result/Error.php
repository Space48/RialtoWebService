<?php

namespace RialtoWebService\Result;

class Error
{
    /** @var string */
    private $code;

    /** @var string */
    private $message;

    public function __construct(string $code, string $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function equals($other): bool
    {
        return $other instanceof $this
            && $other->getCode() === $this->getCode();
    }

    public function __toString()
    {
        return "code: {$this->getCode()} message: {$this->getMessage()}";
    }
}
