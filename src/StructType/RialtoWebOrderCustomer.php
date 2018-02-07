<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoWebOrderCustomer StructType
 * @subpackage Structs
 */
class RialtoWebOrderCustomer extends AbstractStructBase
{
    /**
     * The crmflags
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\CRMFlags
     */
    public $crmflags;
    /**
     * The giftaid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \RialtoWebService\StructType\GiftAid
     */
    public $giftaid;
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
     * The Company
     * @var string
     */
    public $Company;
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
     * Constructor method for RialtoWebOrderCustomer
     * @uses RialtoWebOrderCustomer::setCrmflags()
     * @uses RialtoWebOrderCustomer::setGiftaid()
     * @uses RialtoWebOrderCustomer::setTitle()
     * @uses RialtoWebOrderCustomer::setFirstName()
     * @uses RialtoWebOrderCustomer::setSurname()
     * @uses RialtoWebOrderCustomer::setCompany()
     * @uses RialtoWebOrderCustomer::setAd1()
     * @uses RialtoWebOrderCustomer::setAd2()
     * @uses RialtoWebOrderCustomer::setAd3()
     * @uses RialtoWebOrderCustomer::setAd4()
     * @uses RialtoWebOrderCustomer::setPcode()
     * @uses RialtoWebOrderCustomer::setCountry()
     * @uses RialtoWebOrderCustomer::setEmail()
     * @uses RialtoWebOrderCustomer::setTelephone()
     * @uses RialtoWebOrderCustomer::setMobile()
     * @param \RialtoWebService\StructType\CRMFlags $crmflags
     * @param \RialtoWebService\StructType\GiftAid $giftaid
     * @param string $title
     * @param string $firstName
     * @param string $surname
     * @param string $company
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
    public function __construct(\RialtoWebService\StructType\CRMFlags $crmflags = null, \RialtoWebService\StructType\GiftAid $giftaid = null, $title = null, $firstName = null, $surname = null, $company = null, $ad1 = null, $ad2 = null, $ad3 = null, $ad4 = null, $pcode = null, $country = null, $email = null, $telephone = null, $mobile = null)
    {
        $this
            ->setCrmflags($crmflags)
            ->setGiftaid($giftaid)
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setSurname($surname)
            ->setCompany($company)
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
     * Get crmflags value
     * @return \RialtoWebService\StructType\CRMFlags
     */
    public function getCrmflags()
    {
        return $this->crmflags;
    }
    /**
     * Set crmflags value
     * @param \RialtoWebService\StructType\CRMFlags $crmflags
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
     */
    public function setCrmflags(\RialtoWebService\StructType\CRMFlags $crmflags = null)
    {
        $this->crmflags = $crmflags;
        return $this;
    }
    /**
     * Get giftaid value
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function getGiftaid()
    {
        return $this->giftaid;
    }
    /**
     * Set giftaid value
     * @param \RialtoWebService\StructType\GiftAid $giftaid
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
     */
    public function setGiftaid(\RialtoWebService\StructType\GiftAid $giftaid = null)
    {
        $this->giftaid = $giftaid;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
     * @return \RialtoWebService\StructType\RialtoWebOrderCustomer
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
