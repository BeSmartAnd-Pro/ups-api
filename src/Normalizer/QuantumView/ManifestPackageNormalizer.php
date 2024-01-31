<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\ManifestPackageNormalizer as BaseNormalizer;

class ManifestPackageNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Activity to always be an array even when the API returns a single value
        if (isset($data['Activity']) && ! array_is_list($data['Activity'])) {
            $data['Activity'] = [$data['Activity']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
