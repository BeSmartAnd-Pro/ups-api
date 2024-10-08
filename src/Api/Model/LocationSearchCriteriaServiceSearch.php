<?php

namespace BesmartandPro\Ups\Api\Model;

class LocationSearchCriteriaServiceSearch extends \ArrayObject
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
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @var string
     */
    protected $time;
    /**
     * 
     *
     * @var ServiceSearchServiceCode[]
     */
    protected $serviceCode;
    /**
     * 
     *
     * @var ServiceSearchServiceOptionCode[]
     */
    protected $serviceOptionCode;
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
     * Scheduled Local Drop-off Time. Format: HHMM
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceSearchServiceCode[]
     */
    public function getServiceCode() : array
    {
        return $this->serviceCode;
    }
    /**
     * 
     *
     * @param ServiceSearchServiceCode[] $serviceCode
     *
     * @return self
     */
    public function setServiceCode(array $serviceCode) : self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceSearchServiceOptionCode[]
     */
    public function getServiceOptionCode() : array
    {
        return $this->serviceOptionCode;
    }
    /**
     * 
     *
     * @param ServiceSearchServiceOptionCode[] $serviceOptionCode
     *
     * @return self
     */
    public function setServiceOptionCode(array $serviceOptionCode) : self
    {
        $this->initialized['serviceOptionCode'] = true;
        $this->serviceOptionCode = $serviceOptionCode;
        return $this;
    }
}