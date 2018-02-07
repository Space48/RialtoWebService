<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUpdatedOrdersStr StructType
 * @subpackage Structs
 */
class GetUpdatedOrdersStr extends AbstractStructBase
{
    /**
     * The Since
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Since;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * Constructor method for GetUpdatedOrdersStr
     * @uses GetUpdatedOrdersStr::setSince()
     * @uses GetUpdatedOrdersStr::setUserName()
     * @uses GetUpdatedOrdersStr::setPassword()
     * @param string $since
     * @param string $userName
     * @param string $password
     */
    public function __construct($since = null, $userName = null, $password = null)
    {
        $this
            ->setSince($since)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get Since value
     * @return string|null
     */
    public function getSince()
    {
        return $this->Since;
    }
    /**
     * Set Since value
     * @param string $since
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStr
     */
    public function setSince($since = null)
    {
        // validation for constraint: string
        if (!is_null($since) && !is_string($since)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($since)), __LINE__);
        }
        $this->Since = $since;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStr
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStr
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GetUpdatedOrdersStr
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
