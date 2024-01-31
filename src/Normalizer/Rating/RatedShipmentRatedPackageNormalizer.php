<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Rating;

use BesmartandPro\UpsApi\Generated\Normalizer\RatedShipmentRatedPackageNormalizer as BaseNormalizer;

class RatedShipmentRatedPackageNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['Accessorial']) && ! array_is_list($data['Accessorial'])) {
            $data['Accessorial'] = [$data['Accessorial']];
        }
        
        if (isset($data['ItemizedCharges']) && ! array_is_list($data['ItemizedCharges'])) {
            $data['ItemizedCharges'] = [$data['ItemizedCharges']];
        }
        
        if (isset($data['RateModifier']) && ! array_is_list($data['RateModifier'])) {
            $data['RateModifier'] = [$data['RateModifier']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
