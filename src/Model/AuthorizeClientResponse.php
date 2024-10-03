<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Model;

class AuthorizeClientResponse
{
    protected string $location;

    protected string $appname;

    protected string $displayname;

    /**
     * Returns the UPS login redirection URI.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;
        
        return $this;
    }

    /**
     * Returns the name of the application requesting the authorization code.
     */
    public function getAppName(): string
    {
        return $this->appname;
    }

    public function setAppName(string $appname): static
    {
        $this->appname = $appname;
        
        return $this;
    }

    /**
     * Returns the display name of the application requesting the Authorization code.
     */
    public function getDisplayName(): string
    {
        return $this->displayname;
    }

    public function setDisplayName(string $displayname): static
    {
        $this->displayname = $displayname;
        
        return $this;
    }
}
