<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrders StructType
 * @subpackage Structs
 */
class AddOrders extends AbstractStructBase
{
    /**
     * The emeryweborders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:emeryweborders
     * @var \RialtoWebService\StructType\WebOrderList
     */
    public $emeryweborders;
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
     * Constructor method for AddOrders
     * @uses AddOrders::setEmeryweborders()
     * @uses AddOrders::setUserName()
     * @uses AddOrders::setPassword()
     * @param \RialtoWebService\StructType\WebOrderList $emeryweborders
     * @param string $userName
     * @param string $password
     */
    public function __construct(\RialtoWebService\StructType\WebOrderList $emeryweborders = null, $userName = null, $password = null)
    {
        $this
            ->setEmeryweborders($emeryweborders)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get emeryweborders value
     * @return \RialtoWebService\StructType\WebOrderList|null
     */
    public function getEmeryweborders()
    {
        return $this->emeryweborders;
    }
    /**
     * Set emeryweborders value
     * @param \RialtoWebService\StructType\WebOrderList $emeryweborders
     * @return \RialtoWebService\StructType\AddOrders
     */
    public function setEmeryweborders(\RialtoWebService\StructType\WebOrderList $emeryweborders = null)
    {
        $this->emeryweborders = $emeryweborders;
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
     * @return \RialtoWebService\StructType\AddOrders
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
     * @return \RialtoWebService\StructType\AddOrders
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
     * @return \RialtoWebService\StructType\AddOrders
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
