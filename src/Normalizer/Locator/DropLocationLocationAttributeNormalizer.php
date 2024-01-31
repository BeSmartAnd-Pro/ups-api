<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\DropLocationLocationAttributeNormalizer as BaseNormalizer;

class DropLocationLocationAttributeNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force OptionCode to always be an array even when the API returns a single value
        if (isset($data['OptionCode']) && ! array_is_list($data['OptionCode'])) {
            $data['OptionCode'] = [$data['OptionCode']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
