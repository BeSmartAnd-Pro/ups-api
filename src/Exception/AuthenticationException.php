<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Exception;

use RuntimeException;
use BesmartandPro\UpsApi\Generated\Exception\ClientException;

class AuthenticationException extends RuntimeException implements ClientException
{
}
