<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Authentication;

interface AccessTokenCacheInterface
{
    /**
     * Save access token in the cache.
     */
    public function save(AccessToken $accessToken): void;

    /**
     * Retrieve access token from the cache, or NULL to request a new one.
     */
    public function retrieve(string $clientId): ?AccessToken;
}
