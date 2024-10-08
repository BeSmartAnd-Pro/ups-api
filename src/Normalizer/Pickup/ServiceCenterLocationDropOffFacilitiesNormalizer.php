<?php

namespace BesmartandPro\Ups\Normalizer\Pickup;

use BesmartandPro\Ups\Api\Normalizer\ServiceCenterLocationDropOffFacilitiesNormalizer as BaseNormalizer;
use Symfony\Component\HttpKernel\Kernel;
use function array_is_list;
use function is_array;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ServiceCenterLocationDropOffFacilitiesNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force LocalizedInstruction to always be an array even when the API returns a single value
            if (isset($data['LocalizedInstruction']) && !array_is_list($data['LocalizedInstruction'])) {
                $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
} else {
    class ServiceCenterLocationDropOffFacilitiesNormalizer extends BaseNormalizer
    {
        /**
         * @inheritDoc
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if ($data === null || is_array($data) === false) {
                return parent::denormalize($data, $type, $format, $context);
            }

            // Force LocalizedInstruction to always be an array even when the API returns a single value
            if (isset($data['LocalizedInstruction']) && !array_is_list($data['LocalizedInstruction'])) {
                $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
            }
            return parent::denormalize($data, $type, $format, $context);
        }
    }
}