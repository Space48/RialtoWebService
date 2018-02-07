<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDetails StructType
 * @subpackage Structs
 */
class GetOrderDetails extends AbstractStructBase
{
    /**
     * The emeryorderdetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:emeryorderdetails
     * @var \RialtoWebService\StructType\OrderDetailList
     */
    public $emeryorderdetails;
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
     * Constructor method for GetOrderDetails
     * @uses GetOrderDetails::setEmeryorderdetails()
     * @uses GetOrderDetails::setUserName()
     * @uses GetOrderDetails::setPassword()
     * @param \RialtoWebService\StructType\OrderDetailList $emeryorderdetails
     * @param string $userName
     * @param string $password
     */
    public function __construct(\RialtoWebService\StructType\OrderDetailList $emeryorderdetails = null, $userName = null, $password = null)
    {
        $this
            ->setEmeryorderdetails($emeryorderdetails)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get emeryorderdetails value
     * @return \RialtoWebService\StructType\OrderDetailList|null
     */
    public function getEmeryorderdetails()
    {
        return $this->emeryorderdetails;
    }
    /**
     * Set emeryorderdetails value
     * @param \RialtoWebService\StructType\OrderDetailList $emeryorderdetails
     * @return \RialtoWebService\StructType\GetOrderDetails
     */
    public function setEmeryorderdetails(\RialtoWebService\StructType\OrderDetailList $emeryorderdetails = null)
    {
        $this->emeryorderdetails = $emeryorderdetails;
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
     * @return \RialtoWebService\StructType\GetOrderDetails
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
     * @return \RialtoWebService\StructType\GetOrderDetails
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
     * @return \RialtoWebService\StructType\GetOrderDetails
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
