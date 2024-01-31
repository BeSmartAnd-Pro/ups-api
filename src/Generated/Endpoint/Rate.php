<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class Rate extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    protected $requestoption;
    /**
     * The Rating API is used when rating or shopping a shipment.
     *
     * @param string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5
     * @param string $requestoption Valid Values: Rate = The server rates (The default Request option is Rate if a Request Option is not provided). Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10
     * @param \BesmartandPro\UpsApi\Generated\Model\RATERequestWrapper $requestBody
     * @param array $queryParameters {
     *     @var string $additionalinfo Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15
     * }
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     */
    public function __construct(string $version = 'v1', string $requestoption, \BesmartandPro\UpsApi\Generated\Model\RATERequestWrapper $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->version = $version;
        $this->requestoption = $requestoption;
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
        return str_replace(array('{version}', '{requestoption}'), array($this->version, $this->requestoption), '/rating/{version}/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\RATERequestWrapper) {
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
        $optionsResolver->setDefined(array('additionalinfo'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('additionalinfo', array('string'));
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
     * @throws \BesmartandPro\UpsApi\Generated\Exception\RateUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\RATEResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\RATEResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\RateUnauthorizedException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}