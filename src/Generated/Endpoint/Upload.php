<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class Upload extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * 
     *
     * @param string $version Version of API
     * @param \BesmartandPro\UpsApi\Generated\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $ShipperNumber Shipper Number
     * }
     */
    public function __construct(string $version = 'v1', \BesmartandPro\UpsApi\Generated\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody, array $headerParameters = array())
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
        return str_replace(array('{version}'), array($this->version), '/paperlessdocuments/{version}/upload');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\PAPERLESSDOCUMENTUploadRequestWrapper) {
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
        $optionsResolver->setDefined(array('transId', 'transactionSrc', 'ShipperNumber'));
        $optionsResolver->setRequired(array('ShipperNumber'));
        $optionsResolver->setDefaults(array('transactionSrc' => 'testing'));
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        $optionsResolver->addAllowedTypes('ShipperNumber', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UploadUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\PAPERLESSDOCUMENTUploadResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\PAPERLESSDOCUMENTUploadResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\UploadUnauthorizedException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}