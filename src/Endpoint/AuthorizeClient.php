<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Endpoint;

use Psr\Http\Message\ResponseInterface;
use BesmartandPro\Ups\Api\Endpoint\AuthorizeClient as BaseEndpoint;
use BesmartandPro\Ups\Model\AuthorizeClientResponse;
use Symfony\Component\Serializer\SerializerInterface;

class AuthorizeClient extends BaseEndpoint
{
    /**
     * @inheritDoc
     */
    protected function transformResponseBody(
        ResponseInterface $response,
        SerializerInterface $serializer,
        ?string $contentType = null
    ): ?AuthorizeClientResponse {
        if ($response->getStatusCode() === 302) {
            $headers = $response->getHeaders();
            $responseModel = new AuthorizeClientResponse();
            $responseModel->setLocation($headers['Location'][0] ?? '');
            $responseModel->setAppName($headers['appname'][0] ?? '');
            $responseModel->setDisplayName($headers['displayname'][0] ?? '');
            
            return $responseModel;
        }
        
        return parent::transformResponseBody($response, $serializer, $contentType);
    }
}
