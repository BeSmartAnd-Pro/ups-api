<?php

namespace BesmartandPro\Ups\Api\Model;

class AccessPointInformationPrivateNetworkList extends \ArrayObject
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
     * Container to hold the private network details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var PrivateNetworkListPrivateNetwork[]
     */
    protected $privateNetwork;
    /**
     * Container to hold the private network details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return PrivateNetworkListPrivateNetwork[]
     */
    public function getPrivateNetwork() : array
    {
        return $this->privateNetwork;
    }
    /**
     * Container to hold the private network details.
     **NOTE:** For versions >= v2, this element will always be returned as an array. For requests using version = v1, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param PrivateNetworkListPrivateNetwork[] $privateNetwork
     *
     * @return self
     */
    public function setPrivateNetwork(array $privateNetwork) : self
    {
        $this->initialized['privateNetwork'] = true;
        $this->privateNetwork = $privateNetwork;
        return $this;
    }
}