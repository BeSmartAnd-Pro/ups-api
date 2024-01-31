<?php

namespace BesmartandPro\UpsApi\Generated\Exception;

class ProcessSubscriptionTypeForTrackingNumberBadRequestException extends BadRequestException
{
    /**
     * @var \BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceErrorResponse
     */
    private $trackSubsServiceErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceErrorResponse $trackSubsServiceErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid Request');
        $this->trackSubsServiceErrorResponse = $trackSubsServiceErrorResponse;
        $this->response = $response;
    }
    public function getTrackSubsServiceErrorResponse() : \BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceErrorResponse
    {
        return $this->trackSubsServiceErrorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}