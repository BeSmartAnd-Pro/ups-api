<?php

namespace BesmartandPro\UpsApi\Generated\Model;

class QUANTUMVIEWRequestWrapper extends \ArrayObject
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
     * Container for QuantumView request information.
     *
     * @var QuantumViewRequest
     */
    protected $quantumViewRequest;
    /**
     * Container for QuantumView request information.
     *
     * @return QuantumViewRequest
     */
    public function getQuantumViewRequest() : QuantumViewRequest
    {
        return $this->quantumViewRequest;
    }
    /**
     * Container for QuantumView request information.
     *
     * @param QuantumViewRequest $quantumViewRequest
     *
     * @return self
     */
    public function setQuantumViewRequest(QuantumViewRequest $quantumViewRequest) : self
    {
        $this->initialized['quantumViewRequest'] = true;
        $this->quantumViewRequest = $quantumViewRequest;
        return $this;
    }
}