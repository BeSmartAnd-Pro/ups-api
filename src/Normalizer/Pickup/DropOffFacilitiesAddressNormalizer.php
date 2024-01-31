<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\DropOffFacilitiesAddressNormalizer as BaseNormalizer;
use function is_array;

class DropOffFacilitiesAddressNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force AddressLine to always be an array even when the API returns a single value
        if (isset($data['AddressLine']) && ! is_array($data['AddressLine'])) {
            $data['AddressLine'] = [$data['AddressLine']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
