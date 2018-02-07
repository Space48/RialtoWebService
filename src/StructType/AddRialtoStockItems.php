<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoStockItems StructType
 * @subpackage Structs
 */
class AddRialtoStockItems extends AbstractStructBase
{
    /**
     * The Overwrite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Overwrite;
    /**
     * The rialtostockitems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:rialtostockitems
     * @var \RialtoWebService\StructType\RialtoStockItems
     */
    public $rialtostockitems;
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
     * Constructor method for AddRialtoStockItems
     * @uses AddRialtoStockItems::setOverwrite()
     * @uses AddRialtoStockItems::setRialtostockitems()
     * @uses AddRialtoStockItems::setUserName()
     * @uses AddRialtoStockItems::setPassword()
     * @param bool $overwrite
     * @param \RialtoWebService\StructType\RialtoStockItems $rialtostockitems
     * @param string $userName
     * @param string $password
     */
    public function __construct($overwrite = null, \RialtoWebService\StructType\RialtoStockItems $rialtostockitems = null, $userName = null, $password = null)
    {
        $this
            ->setOverwrite($overwrite)
            ->setRialtostockitems($rialtostockitems)
            ->setUserName($userName)
            ->setPassword($password);
    }
    /**
     * Get Overwrite value
     * @return bool
     */
    public function getOverwrite()
    {
        return $this->Overwrite;
    }
    /**
     * Set Overwrite value
     * @param bool $overwrite
     * @return \RialtoWebService\StructType\AddRialtoStockItems
     */
    public function setOverwrite($overwrite = null)
    {
        // validation for constraint: boolean
        if (!is_null($overwrite) && !is_bool($overwrite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overwrite)), __LINE__);
        }
        $this->Overwrite = $overwrite;
        return $this;
    }
    /**
     * Get rialtostockitems value
     * @return \RialtoWebService\StructType\RialtoStockItems|null
     */
    public function getRialtostockitems()
    {
        return $this->rialtostockitems;
    }
    /**
     * Set rialtostockitems value
     * @param \RialtoWebService\StructType\RialtoStockItems $rialtostockitems
     * @return \RialtoWebService\StructType\AddRialtoStockItems
     */
    public function setRialtostockitems(\RialtoWebService\StructType\RialtoStockItems $rialtostockitems = null)
    {
        $this->rialtostockitems = $rialtostockitems;
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
     * @return \RialtoWebService\StructType\AddRialtoStockItems
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
     * @return \RialtoWebService\StructType\AddRialtoStockItems
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
     * @return \RialtoWebService\StructType\AddRialtoStockItems
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
