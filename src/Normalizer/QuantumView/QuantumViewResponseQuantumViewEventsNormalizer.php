<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\QuantumViewResponseQuantumViewEventsNormalizer as BaseNormalizer;

class QuantumViewResponseQuantumViewEventsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force SubscriptionFile to always be an array even when the API returns a single value
        if (isset($data['SubscriptionEvents']) && ! array_is_list($data['SubscriptionEvents'])) {
            $data['SubscriptionEvents'] = [$data['SubscriptionEvents']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
