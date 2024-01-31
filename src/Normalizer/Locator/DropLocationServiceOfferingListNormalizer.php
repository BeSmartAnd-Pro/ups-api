<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\DropLocationServiceOfferingListNormalizer as BaseNormalizer;

class DropLocationServiceOfferingListNormalizer extends BaseNormalizer
{
    /**
     * @inheritDoc
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force ServiceOffering to always be an array even when the API returns a single value
        if (isset($data['ServiceOffering']) && ! array_is_list($data['ServiceOffering'])) {
            $data['ServiceOffering'] = [$data['ServiceOffering']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
