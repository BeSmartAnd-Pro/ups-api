<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\DangerousGoods;

use BesmartandPro\UpsApi\Generated\Normalizer\ChemicalReferenceDataResponseNormalizer as BaseNormalizer;

class ChemicalReferenceDataResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ChemicalData to always be an array even when the API returns a single value
        if (isset($data['ChemicalData']) && ! array_is_list($data['ChemicalData'])) {
            $data['ChemicalData'] = [$data['ChemicalData']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
