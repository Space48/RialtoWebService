<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoPaymentInstalments StructType
 * @subpackage Structs
 */
class RialtoPaymentInstalments extends AbstractStructBase
{
    /**
     * The instalment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RialtoWebService\StructType\RialtoPaymentInstalment[]
     */
    public $instalment;
    /**
     * Constructor method for RialtoPaymentInstalments
     * @uses RialtoPaymentInstalments::setInstalment()
     * @param \RialtoWebService\StructType\RialtoPaymentInstalment[] $instalment
     */
    public function __construct(array $instalment = array())
    {
        $this
            ->setInstalment($instalment);
    }
    /**
     * Get instalment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RialtoWebService\StructType\RialtoPaymentInstalment[]|null
     */
    public function getInstalment()
    {
        return isset($this->instalment) ? $this->instalment : null;
    }
    /**
     * Set instalment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoPaymentInstalment[] $instalment
     * @return \RialtoWebService\StructType\RialtoPaymentInstalments
     */
    public function setInstalment(array $instalment = array())
    {
        foreach ($instalment as $rialtoPaymentInstalmentsInstalmentItem) {
            // validation for constraint: itemType
            if (!$rialtoPaymentInstalmentsInstalmentItem instanceof \RialtoWebService\StructType\RialtoPaymentInstalment) {
                throw new \InvalidArgumentException(sprintf('The instalment property can only contain items of \RialtoWebService\StructType\RialtoPaymentInstalment, "%s" given', is_object($rialtoPaymentInstalmentsInstalmentItem) ? get_class($rialtoPaymentInstalmentsInstalmentItem) : gettype($rialtoPaymentInstalmentsInstalmentItem)), __LINE__);
            }
        }
        if (is_null($instalment) || (is_array($instalment) && empty($instalment))) {
            unset($this->instalment);
        } else {
            $this->instalment = $instalment;
        }
        return $this;
    }
    /**
     * Add item to instalment value
     * @throws \InvalidArgumentException
     * @param \RialtoWebService\StructType\RialtoPaymentInstalment $item
     * @return \RialtoWebService\StructType\RialtoPaymentInstalments
     */
    public function addToInstalment(\RialtoWebService\StructType\RialtoPaymentInstalment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RialtoWebService\StructType\RialtoPaymentInstalment) {
            throw new \InvalidArgumentException(sprintf('The instalment property can only contain items of \RialtoWebService\StructType\RialtoPaymentInstalment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->instalment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoPaymentInstalments
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
