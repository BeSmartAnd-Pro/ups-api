<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class QuantumView extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    /**
     * Get Quantum View Response
     *
     * @param string $version Version of API
     * @param \BesmartandPro\UpsApi\Generated\Model\QUANTUMVIEWRequestWrapper $requestBody
     */
    public function __construct(string $version = 'v1', \BesmartandPro\UpsApi\Generated\Model\QUANTUMVIEWRequestWrapper $requestBody)
    {
        $this->version = $version;
        $this->body = $requestBody;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}'), array($this->version), '/quantumview/{version}/events');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\QUANTUMVIEWRequestWrapper) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\QuantumViewUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\QUANTUMVIEWResponseWrapper
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\QUANTUMVIEWResponseWrapper', 'json');
        }
        if (401 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\QuantumViewUnauthorizedException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}