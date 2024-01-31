<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class GenerateToken extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    /**
     * The Generate Token endpoint exchanges the authorization code received from Authorize Client for an access token and a refresh token. The client uses the access token to make API requests on behalf of the user by including it in the Authorization header. The access token will expire after a certain period and can be refreshed by using the RefreshToken endpoint.
     *
     * @param null|\BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthTokenPostBody $requestBody
     * @param array $headerParameters {
     *     @var string $x-merchant-id Client merchant ID
     * }
     */
    public function __construct(?\BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthTokenPostBody $requestBody = null, array $headerParameters = array())
    {
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
        return '/security/v1/oauth/token';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthTokenPostBody) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
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
        $optionsResolver->setDefined(array('x-merchant-id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('x-merchant-id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenForbiddenException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenTooManyRequestsException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\GenerateTokenSuccessResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\GenerateTokenSuccessResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenForbiddenException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\GenerateTokenTooManyRequestsException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}