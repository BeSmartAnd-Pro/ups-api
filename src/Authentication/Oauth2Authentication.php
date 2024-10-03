<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;
use BesmartandPro\Ups\Exception\AuthenticationException;

class Oauth2Authentication implements AuthenticationPlugin
{
    public function __construct(protected AuthenticationManager $authManager)
    {
    }

    /**
     * @throws AuthenticationException
     */
    public function authentication(RequestInterface $request): RequestInterface
    {
        $accessToken = $this->authManager->requestAccessToken();
        
        return $request->withHeader('Authorization', 'Bearer ' . $accessToken->getAccessToken());
    }

    public function getScope(): string
    {
        return 'oauth2';
    }
}
