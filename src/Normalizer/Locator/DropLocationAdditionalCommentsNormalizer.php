<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\DropLocationAdditionalCommentsNormalizer as BaseNormalizer;

class DropLocationAdditionalCommentsNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force CommentType to always be an array even when the API returns a single value
        if (isset($data['CommentType']) && ! array_is_list($data['CommentType'])) {
            $data['CommentType'] = [$data['CommentType']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
