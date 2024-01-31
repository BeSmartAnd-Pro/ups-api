<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi;

final class Config
{
    public const BASE_URL_PRODUCTION = 'https://onlinetools.ups.com/';
    public const BASE_URL_TESTING = 'https://wwwcie.ups.com/';
    public const BASE_PATH = '/api';

    private bool $useTestingEnvironment;

    private string $clientId;

    private string $clientSecret;

    private ?string $redirectUri;

    private ?string $merchantId;

    public function __construct(
        string $clientId,
        string $clientSecret,
        bool $useTestingEnvironment = true,
        ?string $merchantId = null,
        ?string $redirectUri = null
    ) {
        $this->clientId              = $clientId;
        $this->clientSecret          = $clientSecret;
        $this->useTestingEnvironment = $useTestingEnvironment;
        $this->merchantId            = $merchantId;
        $this->redirectUri           = $redirectUri;
    }

    public function getEnvironmentBaseUrl(): string
    {
        return $this->getUseTestingEnvironment() ? self::BASE_URL_TESTING : self::BASE_URL_PRODUCTION;
    }

    public function getUseTestingEnvironment(): bool
    {
        return $this->useTestingEnvironment;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getRedirectUri(): string
    {
        return (string)$this->redirectUri;
    }

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
}
