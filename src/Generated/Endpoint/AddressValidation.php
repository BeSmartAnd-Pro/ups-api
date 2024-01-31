<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class AddressValidation extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $requestoption;
    protected $version;
    protected $accept;
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the type of request. Valid 
    values: 
    1 - Address Validation
    2 - Address Classification 
    3 - Address Validation and Address 
    Classification.
    * @param string $version Identifies the version of the API. Valid 
    values: 
    v1
    * @param \BesmartandPro\UpsApi\Generated\Model\XAVRequestWrapper $requestBody
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False. 
    If True, either the region element or any 
    combination of Political Division 1, 
    Political Division 2, PostcodePrimaryLow 
    and the PostcodeExtendedLow fields will 
    be recognized for validation in addition to 
    the urbanization element. If False or no 
    indicator, street level address validation 
    is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50
    The maximum number of Candidates to 
    return for this request. If not provided, 
    the default size of 15 is returned.
    * }
    * @param array $accept Accept content header application/json|application/xml
    */
    public function __construct(int $requestoption, string $version = 'v1', \BesmartandPro\UpsApi\Generated\Model\XAVRequestWrapper $requestBody, array $queryParameters = array(), array $accept = array())
    {
        $this->requestoption = $requestoption;
        $this->version = $version;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{requestoption}', '{version}'), array($this->requestoption, $this->version), '/addressvalidation/{version}/{requestoption}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\XAVRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/xml'));
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('regionalrequestindicator', 'maximumcandidatelistsize'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('regionalrequestindicator', array('string'));
        $optionsResolver->addAllowedTypes('maximumcandidatelistsize', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\AddressValidationBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\AddressValidationUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\AddressValidationNotFoundException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\XAVResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\XAVResponseWrapper', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\AddressValidationBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\AddressValidationUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\AddressValidationNotFoundException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}