<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftAid StructType
 * @subpackage Structs
 */
class GiftAid extends AbstractStructBase
{
    /**
     * The IsGiftAid
     * @var string
     */
    public $IsGiftAid;
    /**
     * The TaxPayer
     * @var string
     */
    public $TaxPayer;
    /**
     * The StartDate_x003D_
     * @var string
     */
    public $StartDate_x003D_;
    /**
     * The DeclarationDate
     * @var string
     */
    public $DeclarationDate;
    /**
     * The ConfirmationDate
     * @var string
     */
    public $ConfirmationDate;
    /**
     * The Indicator
     * @var string
     */
    public $Indicator;
    /**
     * Constructor method for GiftAid
     * @uses GiftAid::setIsGiftAid()
     * @uses GiftAid::setTaxPayer()
     * @uses GiftAid::setStartDate_x003D_()
     * @uses GiftAid::setDeclarationDate()
     * @uses GiftAid::setConfirmationDate()
     * @uses GiftAid::setIndicator()
     * @param string $isGiftAid
     * @param string $taxPayer
     * @param string $startDate_x003D_
     * @param string $declarationDate
     * @param string $confirmationDate
     * @param string $indicator
     */
    public function __construct($isGiftAid = null, $taxPayer = null, $startDate_x003D_ = null, $declarationDate = null, $confirmationDate = null, $indicator = null)
    {
        $this
            ->setIsGiftAid($isGiftAid)
            ->setTaxPayer($taxPayer)
            ->setStartDate_x003D_($startDate_x003D_)
            ->setDeclarationDate($declarationDate)
            ->setConfirmationDate($confirmationDate)
            ->setIndicator($indicator);
    }
    /**
     * Get IsGiftAid value
     * @return string|null
     */
    public function getIsGiftAid()
    {
        return $this->IsGiftAid;
    }
    /**
     * Set IsGiftAid value
     * @param string $isGiftAid
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setIsGiftAid($isGiftAid = null)
    {
        // validation for constraint: string
        if (!is_null($isGiftAid) && !is_string($isGiftAid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isGiftAid)), __LINE__);
        }
        $this->IsGiftAid = $isGiftAid;
        return $this;
    }
    /**
     * Get TaxPayer value
     * @return string|null
     */
    public function getTaxPayer()
    {
        return $this->TaxPayer;
    }
    /**
     * Set TaxPayer value
     * @param string $taxPayer
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setTaxPayer($taxPayer = null)
    {
        // validation for constraint: string
        if (!is_null($taxPayer) && !is_string($taxPayer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxPayer)), __LINE__);
        }
        $this->TaxPayer = $taxPayer;
        return $this;
    }
    /**
     * Get StartDate_x003D_ value
     * @return string|null
     */
    public function getStartDate_x003D_()
    {
        return $this->StartDate_x003D_;
    }
    /**
     * Set StartDate_x003D_ value
     * @param string $startDate_x003D_
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setStartDate_x003D_($startDate_x003D_ = null)
    {
        // validation for constraint: string
        if (!is_null($startDate_x003D_) && !is_string($startDate_x003D_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate_x003D_)), __LINE__);
        }
        $this->StartDate_x003D_ = $startDate_x003D_;
        return $this;
    }
    /**
     * Get DeclarationDate value
     * @return string|null
     */
    public function getDeclarationDate()
    {
        return $this->DeclarationDate;
    }
    /**
     * Set DeclarationDate value
     * @param string $declarationDate
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setDeclarationDate($declarationDate = null)
    {
        // validation for constraint: string
        if (!is_null($declarationDate) && !is_string($declarationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($declarationDate)), __LINE__);
        }
        $this->DeclarationDate = $declarationDate;
        return $this;
    }
    /**
     * Get ConfirmationDate value
     * @return string|null
     */
    public function getConfirmationDate()
    {
        return $this->ConfirmationDate;
    }
    /**
     * Set ConfirmationDate value
     * @param string $confirmationDate
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setConfirmationDate($confirmationDate = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationDate) && !is_string($confirmationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationDate)), __LINE__);
        }
        $this->ConfirmationDate = $confirmationDate;
        return $this;
    }
    /**
     * Get Indicator value
     * @return string|null
     */
    public function getIndicator()
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param string $indicator
     * @return \RialtoWebService\StructType\GiftAid
     */
    public function setIndicator($indicator = null)
    {
        // validation for constraint: string
        if (!is_null($indicator) && !is_string($indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicator)), __LINE__);
        }
        $this->Indicator = $indicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\GiftAid
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
