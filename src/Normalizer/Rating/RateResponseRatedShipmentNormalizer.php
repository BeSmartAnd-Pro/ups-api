<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Rating;

use BesmartandPro\UpsApi\Generated\Normalizer\RateResponseRatedShipmentNormalizer as BaseNormalizer;

class RateResponseRatedShipmentNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['Disclaimer']) && ! array_is_list($data['Disclaimer'])) {
            $data['Disclaimer'] = [$data['Disclaimer']];
        }
        
        if (isset($data['RatedShipmentAlert']) && ! array_is_list($data['RatedShipmentAlert'])) {
            $data['RatedShipmentAlert'] = [$data['RatedShipmentAlert']];
        }
        
        if (isset($data['ItemizedCharges']) && ! array_is_list($data['ItemizedCharges'])) {
            $data['ItemizedCharges'] = [$data['ItemizedCharges']];
        }
        
        if (isset($data['TaxCharges']) && ! array_is_list($data['TaxCharges'])) {
            $data['TaxCharges'] = [$data['TaxCharges']];
        }
        
        if (isset($data['RatedPackage']) && ! array_is_list($data['RatedPackage'])) {
            $data['RatedPackage'] = [$data['RatedPackage']];
        }
        
        if (isset($data['HandlingUnits']) && ! array_is_list($data['HandlingUnits'])) {
            $data['HandlingUnits'] = [$data['HandlingUnits']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
