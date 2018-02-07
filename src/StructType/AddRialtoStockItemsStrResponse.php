<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRialtoStockItemsStrResponse StructType
 * @subpackage Structs
 */
class AddRialtoStockItemsStrResponse extends AbstractStructBase
{
    /**
     * The AddRialtoStockItemsStrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AddRialtoStockItemsStrResult;
    /**
     * Constructor method for AddRialtoStockItemsStrResponse
     * @uses AddRialtoStockItemsStrResponse::setAddRialtoStockItemsStrResult()
     * @param string $addRialtoStockItemsStrResult
     */
    public function __construct($addRialtoStockItemsStrResult = null)
    {
        $this
            ->setAddRialtoStockItemsStrResult($addRialtoStockItemsStrResult);
    }
    /**
     * Get AddRialtoStockItemsStrResult value
     * @return string|null
     */
    public function getAddRialtoStockItemsStrResult()
    {
        return $this->AddRialtoStockItemsStrResult;
    }
    /**
     * Set AddRialtoStockItemsStrResult value
     * @param string $addRialtoStockItemsStrResult
     * @return \RialtoWebService\StructType\AddRialtoStockItemsStrResponse
     */
    public function setAddRialtoStockItemsStrResult($addRialtoStockItemsStrResult = null)
    {
        // validation for constraint: string
        if (!is_null($addRialtoStockItemsStrResult) && !is_string($addRialtoStockItemsStrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addRialtoStockItemsStrResult)), __LINE__);
        }
        $this->AddRialtoStockItemsStrResult = $addRialtoStockItemsStrResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\AddRialtoStockItemsStrResponse
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
