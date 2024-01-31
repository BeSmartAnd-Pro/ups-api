<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Rating;

use BesmartandPro\UpsApi\Generated\Normalizer\RateResponseResponseNormalizer as BaseNormalizer;

class RateResponseResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        
        if (isset($data['AlertDetail']) && ! array_is_list($data['AlertDetail'])) {
            $data['AlertDetail'] = [$data['AlertDetail']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
