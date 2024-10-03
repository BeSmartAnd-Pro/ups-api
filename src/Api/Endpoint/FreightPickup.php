<?php

namespace BesmartandPro\Ups\Api\Endpoint;

class FreightPickup extends \BesmartandPro\Ups\Api\Runtime\Client\BaseEndpoint implements \BesmartandPro\Ups\Api\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param string $version Version of the API e.g v1
     * @param \BesmartandPro\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     */
    public function __construct(string $version, \BesmartandPro\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody, array $headerParameters = [])
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
        return str_replace(['{version}'], [$this->version], '/freight/{version}/pickups');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\Ups\Api\Model\FREIGHTPICKUPRequestWrapper) {
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
     * @throws \BesmartandPro\Ups\Api\Exception\FreightPickupUnauthorizedException
     * @throws \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\Ups\Api\Model\FREIGHTPICKUPResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\FREIGHTPICKUPResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\Ups\Api\Exception\FreightPickupUnauthorizedException($response);
        }
        throw new \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}