<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebOrderCustomer StructType
 * @subpackage Structs
 */
class WebOrderCustomer extends AbstractStructBase
{
    /**
     * The MPSPost
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $MPSPost;
    /**
     * The MPSEmail
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $MPSEmail;
    /**
     * The MPSPostString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MPSPostString;
    /**
     * The MPSEmailString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MPSEmailString;
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
     * The Email
     * @var string
     */
    public $Email;
    /**
     * The Telephone
     * @var string
     */
    public $Telephone;
    /**
     * The Mobile
     * @var string
     */
    public $Mobile;
    /**
     * Constructor method for WebOrderCustomer
     * @uses WebOrderCustomer::setMPSPost()
     * @uses WebOrderCustomer::setMPSEmail()
     * @uses WebOrderCustomer::setMPSPostString()
     * @uses WebOrderCustomer::setMPSEmailString()
     * @uses WebOrderCustomer::setTitle()
     * @uses WebOrderCustomer::setFirstName()
     * @uses WebOrderCustomer::setSurname()
     * @uses WebOrderCustomer::setAd1()
     * @uses WebOrderCustomer::setAd2()
     * @uses WebOrderCustomer::setAd3()
     * @uses WebOrderCustomer::setAd4()
     * @uses WebOrderCustomer::setPcode()
     * @uses WebOrderCustomer::setCountry()
     * @uses WebOrderCustomer::setEmail()
     * @uses WebOrderCustomer::setTelephone()
     * @uses WebOrderCustomer::setMobile()
     * @param string $mPSPost
     * @param string $mPSEmail
     * @param string $mPSPostString
     * @param string $mPSEmailString
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $ad1
     * @param string $ad2
     * @param string $ad3
     * @param string $ad4
     * @param string $pcode
     * @param string $country
     * @param string $email
     * @param string $telephone
     * @param string $mobile
     */
    public function __construct($mPSPost = null, $mPSEmail = null, $mPSPostString = null, $mPSEmailString = null, $title = null, $firstName = null, $surname = null, $ad1 = null, $ad2 = null, $ad3 = null, $ad4 = null, $pcode = null, $country = null, $email = null, $telephone = null, $mobile = null)
    {
        $this
            ->setMPSPost($mPSPost)
            ->setMPSEmail($mPSEmail)
            ->setMPSPostString($mPSPostString)
            ->setMPSEmailString($mPSEmailString)
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setSurname($surname)
            ->setAd1($ad1)
            ->setAd2($ad2)
            ->setAd3($ad3)
            ->setAd4($ad4)
            ->setPcode($pcode)
            ->setCountry($country)
            ->setEmail($email)
            ->setTelephone($telephone)
            ->setMobile($mobile);
    }
    /**
     * Get MPSPost value
     * @return string
     */
    public function getMPSPost()
    {
        return $this->MPSPost;
    }
    /**
     * Set MPSPost value
     * @uses \RialtoWebService\EnumType\MailSuppressionFlag::valueIsValid()
     * @uses \RialtoWebService\EnumType\MailSuppressionFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mPSPost
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setMPSPost($mPSPost = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\MailSuppressionFlag::valueIsValid($mPSPost)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mPSPost, implode(', ', \RialtoWebService\EnumType\MailSuppressionFlag::getValidValues())), __LINE__);
        }
        $this->MPSPost = $mPSPost;
        return $this;
    }
    /**
     * Get MPSEmail value
     * @return string
     */
    public function getMPSEmail()
    {
        return $this->MPSEmail;
    }
    /**
     * Set MPSEmail value
     * @uses \RialtoWebService\EnumType\MailSuppressionFlag::valueIsValid()
     * @uses \RialtoWebService\EnumType\MailSuppressionFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mPSEmail
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setMPSEmail($mPSEmail = null)
    {
        // validation for constraint: enumeration
        if (!\RialtoWebService\EnumType\MailSuppressionFlag::valueIsValid($mPSEmail)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mPSEmail, implode(', ', \RialtoWebService\EnumType\MailSuppressionFlag::getValidValues())), __LINE__);
        }
        $this->MPSEmail = $mPSEmail;
        return $this;
    }
    /**
     * Get MPSPostString value
     * @return string|null
     */
    public function getMPSPostString()
    {
        return $this->MPSPostString;
    }
    /**
     * Set MPSPostString value
     * @param string $mPSPostString
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setMPSPostString($mPSPostString = null)
    {
        // validation for constraint: string
        if (!is_null($mPSPostString) && !is_string($mPSPostString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mPSPostString)), __LINE__);
        }
        $this->MPSPostString = $mPSPostString;
        return $this;
    }
    /**
     * Get MPSEmailString value
     * @return string|null
     */
    public function getMPSEmailString()
    {
        return $this->MPSEmailString;
    }
    /**
     * Set MPSEmailString value
     * @param string $mPSEmailString
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setMPSEmailString($mPSEmailString = null)
    {
        // validation for constraint: string
        if (!is_null($mPSEmailString) && !is_string($mPSEmailString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mPSEmailString)), __LINE__);
        }
        $this->MPSEmailString = $mPSEmailString;
        return $this;
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param string $telephone
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setTelephone($telephone = null)
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone)), __LINE__);
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \RialtoWebService\StructType\WebOrderCustomer
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\WebOrderCustomer
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
