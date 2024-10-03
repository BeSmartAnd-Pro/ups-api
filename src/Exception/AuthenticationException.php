<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Exception;

use RuntimeException;
use BesmartandPro\Ups\Api\Exception\ClientException;

class AuthenticationException extends RuntimeException implements ClientException
{
}
