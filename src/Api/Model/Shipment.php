<?php

namespace BesmartandPro\Ups\Api\Model;

class Shipment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * inquiryNumber
     *
     * @var string
     */
    protected $inquiryNumber;
    /**
     * 
     *
     * @var Package[]
     */
    protected $package;
    /**
     * The relationship of the user to the package(s) in the shipment. No value means that the user has no relationship to the package. Note that this check is only done when the request contains the 'Username' and package rights checking is performed. Valid values:<br />'MYC_HOME' - My Choice for Home<br />'MYC_BUS_OUTBOUND' - My Choice for Business Outbound<br />'MYC_BUS_INBOUND' - My Choice for Business Inbound<br />'SHIPPER' - Shipper
     *
     * @var string[]
     */
    protected $userRelation;
    /**
     * 
     *
     * @var Warning[]|null
     */
    protected $warnings;
    /**
     * inquiryNumber
     *
     * @return string
     */
    public function getInquiryNumber() : string
    {
        return $this->inquiryNumber;
    }
    /**
     * inquiryNumber
     *
     * @param string $inquiryNumber
     *
     * @return self
     */
    public function setInquiryNumber(string $inquiryNumber) : self
    {
        $this->initialized['inquiryNumber'] = true;
        $this->inquiryNumber = $inquiryNumber;
        return $this;
    }
    /**
     * 
     *
     * @return Package[]
     */
    public function getPackage() : array
    {
        return $this->package;
    }
    /**
     * 
     *
     * @param Package[] $package
     *
     * @return self
     */
    public function setPackage(array $package) : self
    {
        $this->initialized['package'] = true;
        $this->package = $package;
        return $this;
    }
    /**
     * The relationship of the user to the package(s) in the shipment. No value means that the user has no relationship to the package. Note that this check is only done when the request contains the 'Username' and package rights checking is performed. Valid values:<br />'MYC_HOME' - My Choice for Home<br />'MYC_BUS_OUTBOUND' - My Choice for Business Outbound<br />'MYC_BUS_INBOUND' - My Choice for Business Inbound<br />'SHIPPER' - Shipper
     *
     * @return string[]
     */
    public function getUserRelation() : array
    {
        return $this->userRelation;
    }
    /**
     * The relationship of the user to the package(s) in the shipment. No value means that the user has no relationship to the package. Note that this check is only done when the request contains the 'Username' and package rights checking is performed. Valid values:<br />'MYC_HOME' - My Choice for Home<br />'MYC_BUS_OUTBOUND' - My Choice for Business Outbound<br />'MYC_BUS_INBOUND' - My Choice for Business Inbound<br />'SHIPPER' - Shipper
     *
     * @param string[] $userRelation
     *
     * @return self
     */
    public function setUserRelation(array $userRelation) : self
    {
        $this->initialized['userRelation'] = true;
        $this->userRelation = $userRelation;
        return $this;
    }
    /**
     * 
     *
     * @return Warning[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param Warning[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}