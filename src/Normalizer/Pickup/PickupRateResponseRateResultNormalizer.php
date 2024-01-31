<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\PickupRateResponseRateResultNormalizer as BaseNormalizer;

class PickupRateResponseRateResultNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['ChargeDetail']) && ! array_is_list($data['ChargeDetail'])) {
            $data['ChargeDetail'] = [$data['ChargeDetail']];
        }
        
        if (isset($data['TaxCharges']) && ! array_is_list($data['TaxCharges'])) {
            $data['TaxCharges'] = [$data['TaxCharges']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
