<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Rating;

use BesmartandPro\UpsApi\Generated\Normalizer\RateResponseNormalizer as BaseNormalizer;

class RateResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force RatedShipment to always be an array even when the API returns a single value
        if (isset($data['RatedShipment']) && ! array_is_list($data['RatedShipment'])) {
            $data['RatedShipment'] = [$data['RatedShipment']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
