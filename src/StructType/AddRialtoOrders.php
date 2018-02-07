<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoOrders StructType
 * @subpackage Structs
 */
class AddRialtoOrders extends AbstractStructBase
{
    /**
     * The rialtoweborders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtoweborders
     * @var \RialtoWebService\StructType\RialtoWebOrderList
     */
    public $rialtoweborders;
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
     * Constructor method for AddRialtoOrders
     * @uses AddRialtoOrders::setRialtoweborders()
     * @uses AddRialtoOrders::setUserName()
     * @uses AddRialtoOrders::setPassword()
     * @param \RialtoWebService\StructType\RialtoWebOrderList $rialtoweborders
     * @param string $userName
     * @param string $password
     */
    public function __construct(\RialtoWebService\StructType\RialtoWebOrderList $rialtoweborders = null, $userName = null, $password = null)
    {
        $this
            ->setRialtoweborders($rialtoweborders)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get rialtoweborders value
     * @return \RialtoWebService\StructType\RialtoWebOrderList|null
     */
    public function getRialtoweborders()
    {
        return $this->rialtoweborders;
    }
    /**
     * Set rialtoweborders value
     * @param \RialtoWebService\StructType\RialtoWebOrderList $rialtoweborders
     * @return \RialtoWebService\StructType\AddRialtoOrders
     */
    public function setRialtoweborders(\RialtoWebService\StructType\RialtoWebOrderList $rialtoweborders = null)
    {
        $this->rialtoweborders = $rialtoweborders;
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
     * @return \RialtoWebService\StructType\AddRialtoOrders
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
     * @return \RialtoWebService\StructType\AddRialtoOrders
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
     * @return \RialtoWebService\StructType\AddRialtoOrders
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
