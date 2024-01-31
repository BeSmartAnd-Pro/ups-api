<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer;

use BesmartandPro\UpsApi\Generated\Normalizer\ResponseErrorNormalizer as BaseNormalizer;

class ResponseErrorNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['ErrorLocation']) && ! array_is_list($data['ErrorLocation'])) {
            $data['ErrorLocation'] = [$data['ErrorLocation']];
        }
        
        if (isset($data['ErrorDigest']) && ! is_array($data['ErrorDigest'])) {
            $data['ErrorDigest'] = [$data['ErrorDigest']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
