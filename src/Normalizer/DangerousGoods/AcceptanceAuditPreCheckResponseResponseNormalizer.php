<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\DangerousGoods;

use BesmartandPro\UpsApi\Generated\Normalizer\AcceptanceAuditPreCheckResponseResponseNormalizer as BaseNormalizer;

class AcceptanceAuditPreCheckResponseResponseNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force Alert & AlertDetail to always be an array even when the API returns a single value
        if (isset($data['Alert']) && ! array_is_list($data['Alert'])) {
            $data['Alert'] = [$data['Alert']];
        }
        
        if (isset($data['AlertDetail']) && ! array_is_list($data['AlertDetail'])) {
            $data['AlertDetail'] = [$data['AlertDetail']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
