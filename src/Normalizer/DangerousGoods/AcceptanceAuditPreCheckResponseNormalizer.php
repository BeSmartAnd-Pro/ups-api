<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\DangerousGoods;

use BesmartandPro\UpsApi\Generated\Normalizer\AcceptanceAuditPreCheckResponseNormalizer as BaseNormalizer;

class AcceptanceAuditPreCheckResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PackageResults to always be an array even when the API returns a single value
        if (isset($data['PackageResults']) && ! array_is_list($data['PackageResults'])) {
            $data['PackageResults'] = [$data['PackageResults']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
