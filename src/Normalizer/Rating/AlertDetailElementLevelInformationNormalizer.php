<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Rating;

use BesmartandPro\UpsApi\Generated\Normalizer\AlertDetailElementLevelInformationNormalizer as BaseNormalizer;

class AlertDetailElementLevelInformationNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ElementLevelInformation to always be an array even when the API returns a single value
        if (isset($data['ElementLevelInformation']) && ! array_is_list($data['ElementLevelInformation'])) {
            $data['ElementLevelInformation'] = [$data['ElementLevelInformation']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
