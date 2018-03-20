<?php

namespace RialtoWebService\Client;

class ClientConfiguration
{
    const LIVE_WSDL_URL = 'https://rws.redarrow.co.uk/service.asmx?wsdl';
    const TEST_WSDL_URL = 'http://test.rws.redarrow.co.uk/service.asmx?wsdl';

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $wsdlUrl = self::LIVE_WSDL_URL;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getWsdlUrl(): string
    {
        return $this->wsdlUrl;
    }

    public function withWsdlUrl(string $wsdlUrl): self
    {
        $instance = clone $this;
        $instance->wsdlUrl = $wsdlUrl;
        return $instance;
    }
}
