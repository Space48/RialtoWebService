<?php

namespace RialtoWebService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RialtoMembership StructType
 * @subpackage Structs
 */
class RialtoMembership extends AbstractStructBase
{
    /**
     * The IsMember
     * @var string
     */
    public $IsMember;
    /**
     * The MemberNumber
     * @var string
     */
    public $MemberNumber;
    /**
     * The MemberType
     * @var string
     */
    public $MemberType;
    /**
     * Constructor method for RialtoMembership
     * @uses RialtoMembership::setIsMember()
     * @uses RialtoMembership::setMemberNumber()
     * @uses RialtoMembership::setMemberType()
     * @param string $isMember
     * @param string $memberNumber
     * @param string $memberType
     */
    public function __construct($isMember = null, $memberNumber = null, $memberType = null)
    {
        $this
            ->setIsMember($isMember)
            ->setMemberNumber($memberNumber)
            ->setMemberType($memberType);
    }
    /**
     * Get IsMember value
     * @return string|null
     */
    public function getIsMember()
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param string $isMember
     * @return \RialtoWebService\StructType\RialtoMembership
     */
    public function setIsMember($isMember = null)
    {
        // validation for constraint: string
        if (!is_null($isMember) && !is_string($isMember)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isMember)), __LINE__);
        }
        $this->IsMember = $isMember;
        return $this;
    }
    /**
     * Get MemberNumber value
     * @return string|null
     */
    public function getMemberNumber()
    {
        return $this->MemberNumber;
    }
    /**
     * Set MemberNumber value
     * @param string $memberNumber
     * @return \RialtoWebService\StructType\RialtoMembership
     */
    public function setMemberNumber($memberNumber = null)
    {
        // validation for constraint: string
        if (!is_null($memberNumber) && !is_string($memberNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberNumber)), __LINE__);
        }
        $this->MemberNumber = $memberNumber;
        return $this;
    }
    /**
     * Get MemberType value
     * @return string|null
     */
    public function getMemberType()
    {
        return $this->MemberType;
    }
    /**
     * Set MemberType value
     * @param string $memberType
     * @return \RialtoWebService\StructType\RialtoMembership
     */
    public function setMemberType($memberType = null)
    {
        // validation for constraint: string
        if (!is_null($memberType) && !is_string($memberType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberType)), __LINE__);
        }
        $this->MemberType = $memberType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \RialtoWebService\StructType\RialtoMembership
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
