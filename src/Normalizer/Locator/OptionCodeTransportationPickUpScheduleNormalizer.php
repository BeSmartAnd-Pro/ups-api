<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\OptionCodeTransportationPickUpScheduleNormalizer as BaseNormalizer;

class OptionCodeTransportationPickUpScheduleNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PickUp to always be an array even when the API returns a single value
        if (isset($data['PickUp']) && ! array_is_list($data['PickUp'])) {
            $data['PickUp'] = [$data['PickUp']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
