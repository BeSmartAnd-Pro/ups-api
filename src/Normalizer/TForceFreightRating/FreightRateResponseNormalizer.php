<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Normalizer\TForceFreightRating;

use BesmartandPro\Ups\Api\Normalizer\FreightRateResponseNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class FreightRateResponseNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }
            
            // Force fields to always be an array even when the API returns a single value
            if (isset($data['Rate']) && !array_is_list($data['Rate'])) {
                $data['Rate'] = [$data['Rate']];
            }
            if (isset($data['Commodity']) && !array_is_list($data['Commodity'])) {
                $data['Commodity'] = [$data['Commodity']];
            }
            if (isset($data['AlternateRatesResponse']) && !array_is_list($data['AlternateRatesResponse'])) {
                $data['AlternateRatesResponse'] = [$data['AlternateRatesResponse']];
            }
            
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class FreightRateResponseNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }
            
            // Force fields to always be an array even when the API returns a single value
            if (isset($data['Rate']) && !array_is_list($data['Rate'])) {
                $data['Rate'] = [$data['Rate']];
            }
            if (isset($data['Commodity']) && !array_is_list($data['Commodity'])) {
                $data['Commodity'] = [$data['Commodity']];
            }
            if (isset($data['AlternateRatesResponse']) && !array_is_list($data['AlternateRatesResponse'])) {
                $data['AlternateRatesResponse'] = [$data['AlternateRatesResponse']];
            }
            
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}