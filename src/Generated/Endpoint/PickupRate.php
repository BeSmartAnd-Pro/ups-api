<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class PickupRate extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    protected $pickuptype;
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of the API. Valid values v1
    * @param string $pickuptype Type of pickup. Valid values:
    oncall
    smart
    both. Length 6
    * @param \BesmartandPro\UpsApi\Generated\Model\PICKUPRequestWrapper $requestBody
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $version = 'v1', string $pickuptype, \BesmartandPro\UpsApi\Generated\Model\PICKUPRequestWrapper $requestBody, array $headerParameters = array())
    {
        $this->version = $version;
        $this->pickuptype = $pickuptype;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}', '{pickuptype}'), array($this->version, $this->pickuptype), '/shipments/{version}/pickup/{pickuptype}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\PICKUPRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @throws \BesmartandPro\UpsApi\Generated\Exception\PickupRateUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\PICKUPResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\PICKUPResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\PickupRateUnauthorizedException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}