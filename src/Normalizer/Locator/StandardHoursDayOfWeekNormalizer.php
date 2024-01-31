<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\StandardHoursDayOfWeekNormalizer as BaseNormalizer;

class StandardHoursDayOfWeekNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force DayOfWeek to always be an array even when the API returns a single value
        if (isset($data['DayOfWeek']) && ! array_is_list($data['DayOfWeek'])) {
            $data['DayOfWeek'] = [$data['DayOfWeek']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
