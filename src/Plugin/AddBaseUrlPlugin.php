<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * Add API base URL to the request.
 */
class AddBaseUrlPlugin implements Plugin
{
    protected UriInterface $baseUri;

    public function __construct(UriInterface $uri)
    {
        $this->baseUri = $uri;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $basePath = $this->baseUri->getPath();
        $path = $request->getUri()->getPath();

        // Don't append base path for OAuth requests
        if (!preg_match("/^\/security/", $path) && !str_starts_with($path, $basePath)) {
            $path = $basePath . $path;
        }

        $uri = $request->getUri()
            ->withScheme($this->baseUri->getScheme())
            ->withHost($this->baseUri->getHost())
            ->withPort($this->baseUri->getPort())
            ->withPath($path);
        
        return $next($request->withUri($uri));
    }
}
