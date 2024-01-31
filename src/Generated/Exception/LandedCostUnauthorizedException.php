<?php

namespace BesmartandPro\UpsApi\Generated\Exception;

class LandedCostUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \BesmartandPro\UpsApi\Generated\Model\Errors
     */
    private $errors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\BesmartandPro\UpsApi\Generated\Model\Errors $errors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized Request');
        $this->errors = $errors;
        $this->response = $response;
    }
    public function getErrors() : \BesmartandPro\UpsApi\Generated\Model\Errors
    {
        return $this->errors;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}