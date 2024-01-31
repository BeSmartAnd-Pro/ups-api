<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\PickupGetPoliticalDivision1ListResponseNormalizer as BaseNormalizer;

class PickupGetPoliticalDivision1ListResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PoliticalDivision1 to always be an array even when the API returns a single value
        if (isset($data['PoliticalDivision1']) && ! is_array($data['PoliticalDivision1'])) {
            $data['PoliticalDivision1'] = [$data['PoliticalDivision1']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
