<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderAddress StructType
 * @subpackage Structs
 */
class WebOrderAddress extends AbstractStructBase
{
    /**
     * The Title
     * @var string
     */
    public $Title;
    /**
     * The FirstName
     * @var string
     */
    public $FirstName;
    /**
     * The Surname
     * @var string
     */
    public $Surname;
    /**
     * The Ad1
     * @var string
     */
    public $Ad1;
    /**
     * The Ad2
     * @var string
     */
    public $Ad2;
    /**
     * The Ad3
     * @var string
     */
    public $Ad3;
    /**
     * The Ad4
     * @var string
     */
    public $Ad4;
    /**
     * The Pcode
     * @var string
     */
    public $Pcode;
    /**
     * The Country
     * @var string
     */
    public $Country;
    /**
     * Constructor method for WebOrderAddress
     * @uses WebOrderAddress::setTitle()
     * @uses WebOrderAddress::setFirstName()
     * @uses WebOrderAddress::setSurname()
     * @uses WebOrderAddress::setAd1()
     * @uses WebOrderAddress::setAd2()
     * @uses WebOrderAddress::setAd3()
     * @uses WebOrderAddress::setAd4()
     * @uses WebOrderAddress::setPcode()
     * @uses WebOrderAddress::setCountry()
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $ad1
     * @param string $ad2
     * @param string $ad3
     * @param string $ad4
     * @param string $pcode
     * @param string $country
     */
    public function __construct($title = null, $firstName = null, $surname = null, $ad1 = null, $ad2 = null, $ad3 = null, $ad4 = null, $pcode = null, $country = null)
    {
        $this
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setSurname($surname)
            ->setAd1($ad1)
            ->setAd2($ad2)
            ->setAd3($ad3)
            ->setAd4($ad4)
            ->setPcode($pcode)
            ->setCountry($country);
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get Ad1 value
     * @return string|null
     */
    public function getAd1()
    {
        return $this->Ad1;
    }
    /**
     * Set Ad1 value
     * @param string $ad1
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setAd1($ad1 = null)
    {
        // validation for constraint: string
        if (!is_null($ad1) && !is_string($ad1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ad1)), __LINE__);
        }
        $this->Ad1 = $ad1;
        return $this;
    }
    /**
     * Get Ad2 value
     * @return string|null
     */
    public function getAd2()
    {
        return $this->Ad2;
    }
    /**
     * Set Ad2 value
     * @param string $ad2
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setAd2($ad2 = null)
    {
        // validation for constraint: string
        if (!is_null($ad2) && !is_string($ad2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ad2)), __LINE__);
        }
        $this->Ad2 = $ad2;
        return $this;
    }
    /**
     * Get Ad3 value
     * @return string|null
     */
    public function getAd3()
    {
        return $this->Ad3;
    }
    /**
     * Set Ad3 value
     * @param string $ad3
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setAd3($ad3 = null)
    {
        // validation for constraint: string
        if (!is_null($ad3) && !is_string($ad3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ad3)), __LINE__);
        }
        $this->Ad3 = $ad3;
        return $this;
    }
    /**
     * Get Ad4 value
     * @return string|null
     */
    public function getAd4()
    {
        return $this->Ad4;
    }
    /**
     * Set Ad4 value
     * @param string $ad4
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setAd4($ad4 = null)
    {
        // validation for constraint: string
        if (!is_null($ad4) && !is_string($ad4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ad4)), __LINE__);
        }
        $this->Ad4 = $ad4;
        return $this;
    }
    /**
     * Get Pcode value
     * @return string|null
     */
    public function getPcode()
    {
        return $this->Pcode;
    }
    /**
     * Set Pcode value
     * @param string $pcode
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setPcode($pcode = null)
    {
        // validation for constraint: string
        if (!is_null($pcode) && !is_string($pcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pcode)), __LINE__);
        }
        $this->Pcode = $pcode;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \RialtoWebService\StructType\WebOrderAddress
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrderAddress
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
