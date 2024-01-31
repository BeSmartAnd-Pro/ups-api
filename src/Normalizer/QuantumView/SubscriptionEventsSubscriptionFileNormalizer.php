<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\SubscriptionEventsSubscriptionFileNormalizer as BaseNormalizer;

class SubscriptionEventsSubscriptionFileNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Manifest to always be an array even when the API returns a single value
        if (isset($data['Manifest']) && ! array_is_list($data['Manifest'])) {
            $data['Manifest'] = [$data['Manifest']];
        }
        
        if (isset($data['Origin']) && ! array_is_list($data['Origin'])) {
            $data['Origin'] = [$data['Origin']];
        }
        
        if (isset($data['Exception']) && ! array_is_list($data['Exception'])) {
            $data['Exception'] = [$data['Exception']];
        }
        
        if (isset($data['Delivery']) && ! array_is_list($data['Delivery'])) {
            $data['Delivery'] = [$data['Delivery']];
        }
        
        if (isset($data['Generic']) && ! array_is_list($data['Generic'])) {
            $data['Generic'] = [$data['Generic']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
