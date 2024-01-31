<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\SubscriptionFileManifestNormalizer as BaseNormalizer;

class SubscriptionFileManifestNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['ReferenceNumber']) && ! array_is_list($data['ReferenceNumber'])) {
            $data['ReferenceNumber'] = [$data['ReferenceNumber']];
        }
        
        if (isset($data['Package']) && ! array_is_list($data['Package'])) {
            $data['Package'] = [$data['Package']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
