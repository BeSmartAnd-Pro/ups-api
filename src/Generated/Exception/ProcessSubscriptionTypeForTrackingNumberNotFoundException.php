<?php

namespace BesmartandPro\UpsApi\Generated\Exception;

class ProcessSubscriptionTypeForTrackingNumberNotFoundException extends NotFoundException
{
    /**
     * @var \BesmartandPro\UpsApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\BesmartandPro\UpsApi\Generated\Model\ErrorResponse $errorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('URL does not exist or resource not found.');
        $this->errorResponse = $errorResponse;
        $this->response = $response;
    }
    public function getErrorResponse() : \BesmartandPro\UpsApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}