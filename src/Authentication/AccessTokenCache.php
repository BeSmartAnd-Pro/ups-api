<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Authentication;

interface AccessTokenCache
{
    /**
     * Save access token in the cache.
     */
    public function save(AccessToken $accessToken);

    /**
     * Retrieve access token from the cache, or NULL to request a new one.
     */
    public function retrieve(string $clientId): ?AccessToken;
}
