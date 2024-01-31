<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer as BaseNormalizer;

class PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force DropOffFacilities to always be an array even when the API returns a single value
        if (isset($data['DropOffFacilities']) && ! array_is_list($data['DropOffFacilities'])) {
            $data['DropOffFacilities'] = [$data['DropOffFacilities']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
