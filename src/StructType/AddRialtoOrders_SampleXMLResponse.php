<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoOrders_SampleXMLResponse StructType
 * @subpackage Structs
 */
class AddRialtoOrders_SampleXMLResponse extends AbstractStructBase
{
    /**
     * The AddRialtoOrders_SampleXMLResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddRialtoOrders_SampleXMLResult;
    /**
     * Constructor method for AddRialtoOrders_SampleXMLResponse
     * @uses AddRialtoOrders_SampleXMLResponse::setAddRialtoOrders_SampleXMLResult()
     * @param string $addRialtoOrders_SampleXMLResult
     */
    public function __construct($addRialtoOrders_SampleXMLResult = null)
    {
        $this
            ->setAddRialtoOrders_SampleXMLResult($addRialtoOrders_SampleXMLResult);
    }
    /**
     * Get AddRialtoOrders_SampleXMLResult value
     * @return string|null
     */
    public function getAddRialtoOrders_SampleXMLResult()
    {
        return $this->AddRialtoOrders_SampleXMLResult;
    }
    /**
     * Set AddRialtoOrders_SampleXMLResult value
     * @param string $addRialtoOrders_SampleXMLResult
     * @return \RialtoWebService\StructType\AddRialtoOrders_SampleXMLResponse
     */
    public function setAddRialtoOrders_SampleXMLResult($addRialtoOrders_SampleXMLResult = null)
    {
        // validation for constraint: string
        if (!is_null($addRialtoOrders_SampleXMLResult) && !is_string($addRialtoOrders_SampleXMLResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addRialtoOrders_SampleXMLResult)), __LINE__);
        }
        $this->AddRialtoOrders_SampleXMLResult = $addRialtoOrders_SampleXMLResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddRialtoOrders_SampleXMLResponse
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
