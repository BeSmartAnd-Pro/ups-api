<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Authentication;

/**
 * Stores access tokens in-memory, useful for tests.
 */
class InMemoryAccessTokenCache implements AccessTokenCache
{
    protected ?AccessToken $accessToken = null;

    public function save(AccessToken $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    public function retrieve(string $clientId): ?AccessToken
    {
        if (
            $this->accessToken !== null &&
            $this->accessToken->hasAccessTokenExpired() &&
            ! $this->accessToken->isRefreshable()
        ) {
            $this->accessToken = null;
        }
        return $this->accessToken;
    }
}
