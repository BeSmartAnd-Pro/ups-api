<?php

namespace BesmartandPro\Ups\Api\Endpoint;

class TimeInTransit extends \BesmartandPro\Ups\Api\Runtime\Client\BaseEndpoint implements \BesmartandPro\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
    * The Time In Transit API provides estimated delivery times for various UPS shipping services, between specified locations.
    
    Key Business Values:
    - **Enhanced Customer Experience**: Allows businesses provide accurate delivery estimates to their customers, enhancing customer service.
    - **Operational Efficiency**: Helps in logistics planning by providing transit times for different UPS services.
    *
    * @param string $version API Version
    * @param \BesmartandPro\Ups\Api\Model\TimeInTransitRequest $requestBody
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc Identifies the clients/source application that is calling.  Length 512
    * }
    */
    public function __construct(string $version, \BesmartandPro\Ups\Api\Model\TimeInTransitRequest $requestBody, array $headerParameters = [])
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
        return str_replace(['{version}'], [$this->version], '/shipments/{version}/transittimes');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\Ups\Api\Model\TimeInTransitRequest) {
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
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired(['transId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\Ups\Api\Exception\TimeInTransitBadRequestException
     * @throws \BesmartandPro\Ups\Api\Exception\TimeInTransitUnauthorizedException
     * @throws \BesmartandPro\Ups\Api\Exception\TimeInTransitForbiddenException
     * @throws \BesmartandPro\Ups\Api\Exception\TimeInTransitTooManyRequestsException
     * @throws \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\Ups\Api\Model\TimeInTransitResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\TimeInTransitResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\TimeInTransitBadRequestException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\TimeInTransitUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\TimeInTransitForbiddenException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\TimeInTransitTooManyRequestsException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}