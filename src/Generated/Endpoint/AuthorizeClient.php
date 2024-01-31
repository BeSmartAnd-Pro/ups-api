<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class AuthorizeClient extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    /**
     * The Authorize Client endpoint initiates the OAuth flow by redirecting the user to UPS to log in and authorize the client application. It accepts the parameters listed below to facilitate the user authorization flow. A successful response redirects back to the client with an authorization code that can be exchanged for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Client id for the requesting application.
     *     @var string $redirect_uri Callback URL for the requesting application.
     *     @var string $response_type Valid Values: code
     *     @var string $state Optional value supplied by the client, will be returned during the redirection back to the client. Can be utilized to maintain state between Auth-Code request and callback event.
     *     @var string $scope Optional value supplied by the client, will be returned during the redirection back to the client.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/security/v1/oauth/authorize';
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
        $optionsResolver->setDefined(array('client_id', 'redirect_uri', 'response_type', 'state', 'scope'));
        $optionsResolver->setRequired(array('client_id', 'redirect_uri', 'response_type'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('client_id', array('string'));
        $optionsResolver->addAllowedTypes('redirect_uri', array('string'));
        $optionsResolver->addAllowedTypes('response_type', array('string'));
        $optionsResolver->addAllowedTypes('state', array('string'));
        $optionsResolver->addAllowedTypes('scope', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\AuthorizeClientBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\AuthorizeClientUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (302 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\AuthorizeClientBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\AuthorizeClientUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}