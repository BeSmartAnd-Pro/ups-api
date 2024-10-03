<?php

declare(strict_types=1);

namespace BesmartandPro\Ups;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use BesmartandPro\Ups\Api\Authentication\BasicAuthAuthentication;
use BesmartandPro\Ups\Authentication\AccessTokenCache;
use BesmartandPro\Ups\Authentication\AuthenticationManager;
use BesmartandPro\Ups\Authentication\Oauth2Authentication;
use BesmartandPro\Ups\Plugin\AddBaseUrlPlugin;

class ClientFactory
{
    public static function create(Config $config, ?AccessTokenCache $accessTokenCache = null, ?ClientInterface $httpClient = null): Client
    {
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
        $apiClient->setConfig($config);
        $authManager->setClient($apiClient);
        
        return $apiClient;
    }
}
