<?php

namespace BesmartandPro\Ups\Api\Endpoint;

class PushToImageRepository extends \BesmartandPro\Ups\Api\Runtime\Client\BaseEndpoint implements \BesmartandPro\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
    * The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History. 
    *
    * @param string $version Version of API
    
    Valid values:
    - v2
    
    * @param \BesmartandPro\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Shipper Number
    * }
    */
    public function __construct(string $version, \BesmartandPro\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody, array $headerParameters = [])
    {
        $this->version = $version;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{version}'], [$this->version], '/paperlessdocuments/{version}/image');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc', 'ShipperNumber']);
        $optionsResolver->setRequired(['ShipperNumber']);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        $optionsResolver->addAllowedTypes('ShipperNumber', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryBadRequestException
     * @throws \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryUnauthorizedException
     * @throws \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryForbiddenException
     * @throws \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryTooManyRequestsException
     * @throws \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\PAPERLESSDOCUMENTResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryBadRequestException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryForbiddenException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\PushToImageRepositoryTooManyRequestsException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}