<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\QuantumViewEventsSubscriptionEventsNormalizer as BaseNormalizer;

class QuantumViewEventsSubscriptionEventsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force SubscriptionFile to always be an array even when the API returns a single value
        if (isset($data['SubscriptionFile']) && ! array_is_list($data['SubscriptionFile'])) {
            $data['SubscriptionFile'] = [$data['SubscriptionFile']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
