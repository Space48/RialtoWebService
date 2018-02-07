<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoPaymentSchedule StructType
 * @subpackage Structs
 */
class RialtoPaymentSchedule extends AbstractStructBase
{
    /**
     * The DownPayment
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $DownPayment;
    /**
     * The instalments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RialtoWebService\StructType\RialtoPaymentInstalments
     */
    public $instalments;
    /**
     * The ProfileId
     * @var string
     */
    public $ProfileId;
    /**
     * Constructor method for RialtoPaymentSchedule
     * @uses RialtoPaymentSchedule::setDownPayment()
     * @uses RialtoPaymentSchedule::setInstalments()
     * @uses RialtoPaymentSchedule::setProfileId()
     * @param float $downPayment
     * @param \RialtoWebService\StructType\RialtoPaymentInstalments $instalments
     * @param string $profileId
     */
    public function __construct($downPayment = null, \RialtoWebService\StructType\RialtoPaymentInstalments $instalments = null, $profileId = null)
    {
        $this
            ->setDownPayment($downPayment)
            ->setInstalments($instalments)
            ->setProfileId($profileId);
    }
    /**
     * Get DownPayment value
     * @return float
     */
    public function getDownPayment()
    {
        return $this->DownPayment;
    }
    /**
     * Set DownPayment value
     * @param float $downPayment
     * @return \RialtoWebService\StructType\RialtoPaymentSchedule
     */
    public function setDownPayment($downPayment = null)
    {
        $this->DownPayment = $downPayment;
        return $this;
    }
    /**
     * Get instalments value
     * @return \RialtoWebService\StructType\RialtoPaymentInstalments|null
     */
    public function getInstalments()
    {
        return $this->instalments;
    }
    /**
     * Set instalments value
     * @param \RialtoWebService\StructType\RialtoPaymentInstalments $instalments
     * @return \RialtoWebService\StructType\RialtoPaymentSchedule
     */
    public function setInstalments(\RialtoWebService\StructType\RialtoPaymentInstalments $instalments = null)
    {
        $this->instalments = $instalments;
        return $this;
    }
    /**
     * Get ProfileId value
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->ProfileId;
    }
    /**
     * Set ProfileId value
     * @param string $profileId
     * @return \RialtoWebService\StructType\RialtoPaymentSchedule
     */
    public function setProfileId($profileId = null)
    {
        // validation for constraint: string
        if (!is_null($profileId) && !is_string($profileId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileId)), __LINE__);
        }
        $this->ProfileId = $profileId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoPaymentSchedule
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
