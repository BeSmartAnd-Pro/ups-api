<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class Shipment extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    /**
    * The Shipping API makes UPS shipping services available to client applications that communicate with UPS 
    using the Internet
    *
    * @param string $version Indicates Ship API to display the new release features in 
    Rate API response based on Ship release. See the New 
    section for the latest Ship release. Supported values: v1, v1601, v1607, v1701, v1707, v1801, v1807, v2108, v2205 . Length 5
    * @param \BesmartandPro\UpsApi\Generated\Model\SHIPRequestWrapper $requestBody
    * @param array $queryParameters {
    *     @var string $additionaladdressvalidation Valid Values: 
    city = validation will include city.Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $version = 'v1', \BesmartandPro\UpsApi\Generated\Model\SHIPRequestWrapper $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->version = $version;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}'), array($this->version), '/shipments/{version}/ship');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\SHIPRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('additionaladdressvalidation'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('additionaladdressvalidation', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('transId', 'transactionSrc'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('transactionSrc' => 'testing'));
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ShipmentBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ShipmentUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\SHIPResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\SHIPResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ShipmentBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ShipmentUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}