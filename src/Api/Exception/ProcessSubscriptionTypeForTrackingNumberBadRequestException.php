<?php

namespace BesmartandPro\Ups\Api\Exception;

class ProcessSubscriptionTypeForTrackingNumberBadRequestException extends BadRequestException
{
    /**
     * @var \BesmartandPro\Ups\Api\Model\TrackSubsServiceErrorResponse
     */
    private $trackSubsServiceErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\BesmartandPro\Ups\Api\Model\TrackSubsServiceErrorResponse $trackSubsServiceErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid Request');
        $this->trackSubsServiceErrorResponse = $trackSubsServiceErrorResponse;
        $this->response = $response;
    }
    public function getTrackSubsServiceErrorResponse() : \BesmartandPro\Ups\Api\Model\TrackSubsServiceErrorResponse
    {
        return $this->trackSubsServiceErrorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}