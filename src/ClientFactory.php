<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use BesmartandPro\UpsApi\Generated\Authentication\BasicAuthAuthentication;
use BesmartandPro\UpsApi\Authentication\AccessTokenCacheInterface;
use BesmartandPro\UpsApi\Authentication\AuthenticationManager;
use BesmartandPro\UpsApi\Authentication\Oauth2Authentication;
use BesmartandPro\UpsApi\Plugin\AddBaseUrlPlugin;

class ClientFactory
{
    public static function create(Config $config, ?AccessTokenCacheInterface $accessTokenCache = null, ?ClientInterface $httpClient = null): Client
    {
        //todo another wrong call?
        $baseUri = Psr17FactoryDiscovery::findUriFactory()
            ->createUri($config->getEnvironmentBaseUrl())
            ->withPath(Config::BASE_PATH);

        $authManager = new AuthenticationManager($config, $accessTokenCache);
        $plugins = [
            new AddBaseUrlPlugin($baseUri),
            new AuthenticationRegistry([
                new BasicAuthAuthentication($config->getClientId(), $config->getClientSecret()),
                new Oauth2Authentication($authManager),
            ])
        ];

        if ($httpClient !== null) {
            $httpClient = new PluginClient($httpClient, $plugins);
        }

        $apiClient = Client::create($httpClient, $plugins);
        $apiClient->setAuthManager($authManager);
        $authManager->setClient($apiClient);
        
        return $apiClient;
    }
}
