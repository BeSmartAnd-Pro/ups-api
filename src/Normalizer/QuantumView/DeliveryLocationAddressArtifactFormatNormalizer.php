<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\QuantumView;

use BesmartandPro\UpsApi\Generated\Normalizer\DeliveryLocationAddressArtifactFormatNormalizer as BaseNormalizer;

class DeliveryLocationAddressArtifactFormatNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force AddressExtendedInformation to always be an array even when the API returns a single value
        if (isset($data['AddressExtendedInformation']) && ! array_is_list($data['AddressExtendedInformation'])) {
            $data['AddressExtendedInformation'] = [$data['AddressExtendedInformation']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
