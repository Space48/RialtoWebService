<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDetailsStr StructType
 * @subpackage Structs
 */
class GetOrderDetailsStr extends AbstractStructBase
{
    /**
     * The ordersXML
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ordersXML;
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
     * Constructor method for GetOrderDetailsStr
     * @uses GetOrderDetailsStr::setOrdersXML()
     * @uses GetOrderDetailsStr::setUserName()
     * @uses GetOrderDetailsStr::setPassword()
     * @param string $ordersXML
     * @param string $userName
     * @param string $password
     */
    public function __construct($ordersXML = null, $userName = null, $password = null)
    {
        $this
            ->setOrdersXML($ordersXML)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get ordersXML value
     * @return string|null
     */
    public function getOrdersXML()
    {
        return $this->ordersXML;
    }
    /**
     * Set ordersXML value
     * @param string $ordersXML
     * @return \RialtoWebService\StructType\GetOrderDetailsStr
     */
    public function setOrdersXML($ordersXML = null)
    {
        // validation for constraint: string
        if (!is_null($ordersXML) && !is_string($ordersXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ordersXML)), __LINE__);
        }
        $this->ordersXML = $ordersXML;
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
     * @return \RialtoWebService\StructType\GetOrderDetailsStr
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
     * @return \RialtoWebService\StructType\GetOrderDetailsStr
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
     * @return \RialtoWebService\StructType\GetOrderDetailsStr
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
