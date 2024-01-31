<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class LandedCost extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * Landed Cost provides an all-inclusive cost estimate of international shipments.
     *
     * @param string $version Version of API
     * @param \BesmartandPro\UpsApi\Generated\Model\LandedCostRequest $requestBody
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $AccountNumber 
     * }
     */
    public function __construct(string $version = 'v1', \BesmartandPro\UpsApi\Generated\Model\LandedCostRequest $requestBody, array $headerParameters = array())
    {
        $this->version = $version;
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
        return str_replace(array('{version}'), array($this->version), '/landedcost/{version}/quotes');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\LandedCostRequest) {
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
        $optionsResolver->setDefined(array('transId', 'transactionSrc', 'AccountNumber'));
        $optionsResolver->setRequired(array('transId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        $optionsResolver->addAllowedTypes('AccountNumber', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\LandedCostUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\LandedCostResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\LandedCostResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\LandedCostUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\Errors', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}