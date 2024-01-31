<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Shipping;

use BesmartandPro\UpsApi\Generated\Normalizer\ShipmentResponseResponseNormalizer as BaseNormalizer;

class ShipmentResponseResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert to always be an array even when the API returns a single value
        // @see https://github.com/UPS-API/api-documentation/issues/3
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
