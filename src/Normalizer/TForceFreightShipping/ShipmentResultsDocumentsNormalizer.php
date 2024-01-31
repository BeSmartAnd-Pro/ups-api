<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\TForceFreightShipping;

use BesmartandPro\UpsApi\Generated\Normalizer\ShipmentResultsDocumentsNormalizer as BaseNormalizer;

class ShipmentResultsDocumentsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force fields to always be an array even when the API returns a single value
        if (isset($data['Image']) && ! array_is_list($data['Image'])) {
            $data['Image'] = [$data['Image']];
        }
        
        if (isset($data['Forms']) && ! array_is_list($data['Forms'])) {
            $data['Forms'] = [$data['Forms']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
