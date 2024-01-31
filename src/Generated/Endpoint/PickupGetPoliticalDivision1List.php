<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class PickupGetPoliticalDivision1List extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    protected $countrycode;
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of API e.g. v1
    * @param string $countrycode Country or terrirtory for which the list will 
    represent.Length 2
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    */
    public function __construct(string $version = 'v1', string $countrycode, array $headerParameters = array())
    {
        $this->version = $version;
        $this->countrycode = $countrycode;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}', '{countrycode}'), array($this->version, $this->countrycode), '/pickup/{version}/countries/{countrycode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
        $optionsResolver->setRequired(array('transId'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\PickupGetPoliticalDivision1ListUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\PICKUPPolDivResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\PICKUPPolDivResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\PickupGetPoliticalDivision1ListUnauthorizedException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}