<?php

namespace BesmartandPro\Ups\Api\Model;

class DropLocationOperatingHours extends \ArrayObject
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
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var OperatingHoursStandardHours[]
     */
    protected $standardHours;
    /**
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return OperatingHoursStandardHours[]
     */
    public function getStandardHours() : array
    {
        return $this->standardHours;
    }
    /**
     * StandardHours Container.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param OperatingHoursStandardHours[] $standardHours
     *
     * @return self
     */
    public function setStandardHours(array $standardHours) : self
    {
        $this->initialized['standardHours'] = true;
        $this->standardHours = $standardHours;
        return $this;
    }
}