<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class GetSingleTrackResponseUsingGET extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $inquiryNumber;
    /**
     * gets single track API details
     *
     * @param string $inquiryNumber Tracking Number
     * @param array $queryParameters {
     *     @var string $locale locale
     *     @var string $returnSignature returnSignature
     * }
     * @param array $headerParameters {
     *     @var string $transId transId
     *     @var string $transactionSrc transactionSrc
     * }
     */
    public function __construct(string $inquiryNumber, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->inquiryNumber = $inquiryNumber;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{inquiryNumber}'), array($this->inquiryNumber), '/track/v1/details/{inquiryNumber}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('locale', 'returnSignature'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('locale' => 'en_US', 'returnSignature' => 'false'));
        $optionsResolver->addAllowedTypes('locale', array('string'));
        $optionsResolver->addAllowedTypes('returnSignature', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('transId', 'transactionSrc'));
        $optionsResolver->setRequired(array('transId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETNotFoundException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\TrackApiResponse|\BesmartandPro\UpsApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\TrackApiResponse', 'json');
        }
        if (is_null($contentType) === false && (207 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETNotFoundException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}