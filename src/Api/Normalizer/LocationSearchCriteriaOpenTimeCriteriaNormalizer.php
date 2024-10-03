<?php

namespace BesmartandPro\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use BesmartandPro\Ups\Api\Runtime\Normalizer\CheckArray;
use BesmartandPro\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LocationSearchCriteriaOpenTimeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DayOfWeekCode', $data)) {
                $object->setDayOfWeekCode($data['DayOfWeekCode']);
                unset($data['DayOfWeekCode']);
            }
            if (\array_key_exists('FromTime', $data)) {
                $object->setFromTime($data['FromTime']);
                unset($data['FromTime']);
            }
            if (\array_key_exists('ToTime', $data)) {
                $object->setToTime($data['ToTime']);
                unset($data['ToTime']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dayOfWeekCode') && null !== $object->getDayOfWeekCode()) {
                $data['DayOfWeekCode'] = $object->getDayOfWeekCode();
            }
            if ($object->isInitialized('fromTime') && null !== $object->getFromTime()) {
                $data['FromTime'] = $object->getFromTime();
            }
            if ($object->isInitialized('toTime') && null !== $object->getToTime()) {
                $data['ToTime'] = $object->getToTime();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria' => false];
        }
    }
} else {
    class LocationSearchCriteriaOpenTimeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\LocationSearchCriteriaOpenTimeCriteria();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DayOfWeekCode', $data)) {
                $object->setDayOfWeekCode($data['DayOfWeekCode']);
                unset($data['DayOfWeekCode']);
            }
            if (\array_key_exists('FromTime', $data)) {
                $object->setFromTime($data['FromTime']);
                unset($data['FromTime']);
            }
            if (\array_key_exists('ToTime', $data)) {
                $object->setToTime($data['ToTime']);
                unset($data['ToTime']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dayOfWeekCode') && null !== $object->getDayOfWeekCode()) {
                $data['DayOfWeekCode'] = $object->getDayOfWeekCode();
            }
            if ($object->isInitialized('fromTime') && null !== $object->getFromTime()) {
                $data['FromTime'] = $object->getFromTime();
            }
            if ($object->isInitialized('toTime') && null !== $object->getToTime()) {
                $data['ToTime'] = $object->getToTime();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\LocationSearchCriteriaOpenTimeCriteria' => false];
        }
    }
}