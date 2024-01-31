<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\TForceFreightShipping;

use BesmartandPro\UpsApi\Generated\Normalizer\FreightShipResponseShipmentResultsNormalizer as BaseNormalizer;

class FreightShipResponseShipmentResultsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Rate to always be an array even when the API returns a single value
        if (isset($data['Rate']) && ! array_is_list($data['Rate'])) {
            $data['Rate'] = [$data['Rate']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
