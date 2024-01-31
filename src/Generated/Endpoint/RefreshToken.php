<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class RefreshToken extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    /**
     * The RefreshToken endpoint is used to refresh an expired access token in order to continue accessing the UPS API on behalf of a user. The endpoint generates a new access/refresh token pair by exchanging a valid refresh token. A successful response returns new access and refresh tokens for ongoing API access without reprompting the user.
     *
     * @param null|\BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthRefreshPostBody $requestBody
     */
    public function __construct(?\BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthRefreshPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/security/v1/oauth/refresh';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\SecurityV1OauthRefreshPostBody) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
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
     * @throws \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenTooManyRequestsException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\RefreshTokenSuccessResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\RefreshTokenSuccessResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\RefreshTokenTooManyRequestsException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}