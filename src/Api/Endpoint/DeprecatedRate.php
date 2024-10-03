<?php

namespace BesmartandPro\Ups\Api\Endpoint;

class DeprecatedRate extends \BesmartandPro\Ups\Api\Runtime\Client\BaseEndpoint implements \BesmartandPro\Ups\Api\Runtime\Client\Endpoint
{
    protected $deprecatedVersion;
    protected $requestoption;
    /**
    * The Rating API is used when rating or shopping a shipment.
    *
    * @param string $deprecatedVersion Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release.
    
    Valid values:
    - v1
    - v1601
    - v1607
    - 1701
    - 1707
    - v2108
    - v2205
    
    * @param string $requestoption Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    * @param \BesmartandPro\Ups\Api\Model\RATERequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionalinfo Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $deprecatedVersion, string $requestoption, \BesmartandPro\Ups\Api\Model\RATERequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->deprecatedVersion = $deprecatedVersion;
        $this->requestoption = $requestoption;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\Ups\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{deprecatedVersion}', '{requestoption}'], [$this->deprecatedVersion, $this->requestoption], '/rating/{deprecatedVersion}/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\Ups\Api\Model\RATERequestWrapper) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['additionalinfo']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('additionalinfo', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['transId', 'transactionSrc']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['transactionSrc' => 'testing']);
        $optionsResolver->addAllowedTypes('transId', ['string']);
        $optionsResolver->addAllowedTypes('transactionSrc', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\Ups\Api\Exception\DeprecatedRateBadRequestException
     * @throws \BesmartandPro\Ups\Api\Exception\DeprecatedRateUnauthorizedException
     * @throws \BesmartandPro\Ups\Api\Exception\DeprecatedRateForbiddenException
     * @throws \BesmartandPro\Ups\Api\Exception\DeprecatedRateTooManyRequestsException
     * @throws \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\Ups\Api\Model\RATEResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\RATEResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\DeprecatedRateBadRequestException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\DeprecatedRateUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\DeprecatedRateForbiddenException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\Ups\Api\Exception\DeprecatedRateTooManyRequestsException($serializer->deserialize($body, 'BesmartandPro\\Ups\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\Ups\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['oauth2'];
    }
}