<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\SubscriptionFileGenericNormalizer as BaseNormalizer;

class SubscriptionFileGenericNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['ShipmentReferenceNumber']) && ! array_is_list($data['ShipmentReferenceNumber'])) {
            $data['ShipmentReferenceNumber'] = [$data['ShipmentReferenceNumber']];
        }
        
        if (isset($data['PackageReferenceNumber']) && ! array_is_list($data['PackageReferenceNumber'])) {
            $data['PackageReferenceNumber'] = [$data['PackageReferenceNumber']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
