<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\AccessPointInformationBusinessClassificationListNormalizer as BaseNormalizer;

class AccessPointInformationBusinessClassificationListNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force BusinessClassification to always be an array even when the API returns a single value
        if (isset($data['BusinessClassification']) && ! array_is_list($data['BusinessClassification'])) {
            $data['BusinessClassification'] = [$data['BusinessClassification']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
