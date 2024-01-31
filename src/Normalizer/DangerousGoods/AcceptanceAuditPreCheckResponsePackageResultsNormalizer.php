<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\DangerousGoods;

use BesmartandPro\UpsApi\Generated\Normalizer\AcceptanceAuditPreCheckResponsePackageResultsNormalizer as BaseNormalizer;

class AcceptanceAuditPreCheckResponsePackageResultsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ChemicalRecordResults to always be an array even when the API returns a single value
        if (isset($data['ChemicalRecordResults']) && ! array_is_list($data['ChemicalRecordResults'])) {
            $data['ChemicalRecordResults'] = [$data['ChemicalRecordResults']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
