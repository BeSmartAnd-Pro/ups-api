<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\ServiceCenterLocationDropOffFacilitiesNormalizer as BaseNormalizer;

class ServiceCenterLocationDropOffFacilitiesNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force LocalizedInstruction to always be an array even when the API returns a single value
        if (isset($data['LocalizedInstruction']) && ! array_is_list($data['LocalizedInstruction'])) {
            $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
