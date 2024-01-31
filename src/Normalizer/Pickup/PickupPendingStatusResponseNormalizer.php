<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Pickup;

use BesmartandPro\UpsApi\Generated\Normalizer\PickupPendingStatusResponseNormalizer as BaseNormalizer;

class PickupPendingStatusResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PendingStatus to always be an array even when the API returns a single value
        if (isset($data['PendingStatus']) && ! array_is_list($data['PendingStatus'])) {
            $data['PendingStatus'] = [$data['PendingStatus']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
