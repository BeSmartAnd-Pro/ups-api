<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\QuantumViewResponseResponseNormalizer as BaseNormalizer;

class QuantumViewResponseResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Error to always be an array even when the API returns a single value
        if (isset($data['Error']) && ! array_is_list($data['Error'])) {
            $data['Error'] = [$data['Error']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
