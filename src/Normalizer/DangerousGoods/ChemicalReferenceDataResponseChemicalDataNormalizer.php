<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\DangerousGoods;

use BesmartandPro\UpsApi\Generated\Normalizer\ChemicalReferenceDataResponseChemicalDataNormalizer as BaseNormalizer;

class ChemicalReferenceDataResponseChemicalDataNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force PackageQuantityLimitDetail to always be an array even when the API returns a single value
        if (isset($data['PackageQuantityLimitDetail']) && ! array_is_list($data['PackageQuantityLimitDetail'])) {
            $data['PackageQuantityLimitDetail'] = [$data['PackageQuantityLimitDetail']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
