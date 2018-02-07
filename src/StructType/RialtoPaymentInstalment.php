<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoPaymentInstalment StructType
 * @subpackage Structs
 */
class RialtoPaymentInstalment extends AbstractStructBase
{
    /**
     * The InstalmentDueDate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InstalmentDueDate;
    /**
     * The InstalmentAmount
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $InstalmentAmount;
    /**
     * Constructor method for RialtoPaymentInstalment
     * @uses RialtoPaymentInstalment::setInstalmentDueDate()
     * @uses RialtoPaymentInstalment::setInstalmentAmount()
     * @param string $instalmentDueDate
     * @param float $instalmentAmount
     */
    public function __construct($instalmentDueDate = null, $instalmentAmount = null)
    {
        $this
            ->setInstalmentDueDate($instalmentDueDate)
            ->setInstalmentAmount($instalmentAmount);
    }
    /**
     * Get InstalmentDueDate value
     * @return string
     */
    public function getInstalmentDueDate()
    {
        return $this->InstalmentDueDate;
    }
    /**
     * Set InstalmentDueDate value
     * @param string $instalmentDueDate
     * @return \RialtoWebService\StructType\RialtoPaymentInstalment
     */
    public function setInstalmentDueDate($instalmentDueDate = null)
    {
        // validation for constraint: string
        if (!is_null($instalmentDueDate) && !is_string($instalmentDueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($instalmentDueDate)), __LINE__);
        }
        $this->InstalmentDueDate = $instalmentDueDate;
        return $this;
    }
    /**
     * Get InstalmentAmount value
     * @return float
     */
    public function getInstalmentAmount()
    {
        return $this->InstalmentAmount;
    }
    /**
     * Set InstalmentAmount value
     * @param float $instalmentAmount
     * @return \RialtoWebService\StructType\RialtoPaymentInstalment
     */
    public function setInstalmentAmount($instalmentAmount = null)
    {
        $this->InstalmentAmount = $instalmentAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoPaymentInstalment
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
