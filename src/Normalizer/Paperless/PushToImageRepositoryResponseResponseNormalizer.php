<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Paperless;

use BesmartandPro\UpsApi\Generated\Normalizer\PushToImageRepositoryResponseResponseNormalizer as BaseNormalizer;

class PushToImageRepositoryResponseResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert to always be an array even when the API returns a single value
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
