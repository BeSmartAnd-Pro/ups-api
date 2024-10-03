<?php

namespace BesmartandPro\Ups\Api\Model;

class RateResponseResponse extends \ArrayObject
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
     * Response Status Container.
     *
     * @var ResponseResponseStatus
     */
    protected $responseStatus;
    /**
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var ResponseAlert[]
     */
    protected $alert;
    /**
     * Alert Detail Container. Currently applies to and returned only for request containing HazMat and SubVersion greater than or equal to 1701.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @var ResponseAlertDetail[]
     */
    protected $alertDetail;
    /**
     * Transaction Reference Container.
     *
     * @var ResponseTransactionReference
     */
    protected $transactionReference;
    /**
     * Response Status Container.
     *
     * @return ResponseResponseStatus
     */
    public function getResponseStatus() : ResponseResponseStatus
    {
        return $this->responseStatus;
    }
    /**
     * Response Status Container.
     *
     * @param ResponseResponseStatus $responseStatus
     *
     * @return self
     */
    public function setResponseStatus(ResponseResponseStatus $responseStatus) : self
    {
        $this->initialized['responseStatus'] = true;
        $this->responseStatus = $responseStatus;
        return $this;
    }
    /**
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return ResponseAlert[]
     */
    public function getAlert() : array
    {
        return $this->alert;
    }
    /**
     * Alert Container.  There can be zero to many alert containers with code and description.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param ResponseAlert[] $alert
     *
     * @return self
     */
    public function setAlert(array $alert) : self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
    /**
     * Alert Detail Container. Currently applies to and returned only for request containing HazMat and SubVersion greater than or equal to 1701.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @return ResponseAlertDetail[]
     */
    public function getAlertDetail() : array
    {
        return $this->alertDetail;
    }
    /**
     * Alert Detail Container. Currently applies to and returned only for request containing HazMat and SubVersion greater than or equal to 1701.
     **NOTE:** For versions >= v2403, this element will always be returned as an array. For requests using versions < v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1.
     *
     * @param ResponseAlertDetail[] $alertDetail
     *
     * @return self
     */
    public function setAlertDetail(array $alertDetail) : self
    {
        $this->initialized['alertDetail'] = true;
        $this->alertDetail = $alertDetail;
        return $this;
    }
    /**
     * Transaction Reference Container.
     *
     * @return ResponseTransactionReference
     */
    public function getTransactionReference() : ResponseTransactionReference
    {
        return $this->transactionReference;
    }
    /**
     * Transaction Reference Container.
     *
     * @param ResponseTransactionReference $transactionReference
     *
     * @return self
     */
    public function setTransactionReference(ResponseTransactionReference $transactionReference) : self
    {
        $this->initialized['transactionReference'] = true;
        $this->transactionReference = $transactionReference;
        return $this;
    }
}