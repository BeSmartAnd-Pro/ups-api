<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\AccessPointInformationPrivateNetworkListNormalizer as BaseNormalizer;

class AccessPointInformationPrivateNetworkListNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PrivateNetwork to always be an array even when the API returns a single value
        if (isset($data['PrivateNetwork']) && ! array_is_list($data['PrivateNetwork'])) {
            $data['PrivateNetwork'] = [$data['PrivateNetwork']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
