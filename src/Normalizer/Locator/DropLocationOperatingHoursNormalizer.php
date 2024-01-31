<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\DropLocationOperatingHoursNormalizer as BaseNormalizer;

class DropLocationOperatingHoursNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force StandardHours to always be an array even when the API returns a single value
        if (isset($data['StandardHours']) && ! array_is_list($data['StandardHours'])) {
            $data['StandardHours'] = [$data['StandardHours']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
