<?php

namespace BesmartandPro\UpsApi\Generated\Model;

class ProductPackingListInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var PackingListInfoPackageAssociated[]
     */
    protected $packageAssociated;
    /**
     * 
     *
     * @return PackingListInfoPackageAssociated[]
     */
    public function getPackageAssociated() : array
    {
        return $this->packageAssociated;
    }
    /**
     * 
     *
     * @param PackingListInfoPackageAssociated[] $packageAssociated
     *
     * @return self
     */
    public function setPackageAssociated(array $packageAssociated) : self
    {
        $this->initialized['packageAssociated'] = true;
        $this->packageAssociated = $packageAssociated;
        return $this;
    }
}