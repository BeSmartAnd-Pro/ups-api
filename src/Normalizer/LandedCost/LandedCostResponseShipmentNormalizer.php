<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\LandedCost;

use BesmartandPro\UpsApi\Generated\Normalizer\LandedCostResponseShipmentNormalizer as BaseNormalizer;

class LandedCostResponseShipmentNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force shipmentItems to always be an array even when the API returns a single value
        if (isset($data['shipmentItems']) && ! array_is_list($data['shipmentItems'])) {
            $data['shipmentItems'] = [$data['shipmentItems']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
