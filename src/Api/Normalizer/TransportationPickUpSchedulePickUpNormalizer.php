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
    class TransportationPickUpSchedulePickUpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\TransportationPickUpSchedulePickUp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DayOfWeek', $data)) {
                $object->setDayOfWeek($data['DayOfWeek']);
                unset($data['DayOfWeek']);
            }
            if (\array_key_exists('PickUpDetails', $data)) {
                $object->setPickUpDetails($this->denormalizer->denormalize($data['PickUpDetails'], 'BesmartandPro\\Ups\\Api\\Model\\PickUpPickUpDetails', 'json', $context));
                unset($data['PickUpDetails']);
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
            $data['DayOfWeek'] = $object->getDayOfWeek();
            $data['PickUpDetails'] = $this->normalizer->normalize($object->getPickUpDetails(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp' => false];
        }
    }
} else {
    class TransportationPickUpSchedulePickUpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp';
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
            $object = new \BesmartandPro\Ups\Api\Model\TransportationPickUpSchedulePickUp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('DayOfWeek', $data)) {
                $object->setDayOfWeek($data['DayOfWeek']);
                unset($data['DayOfWeek']);
            }
            if (\array_key_exists('PickUpDetails', $data)) {
                $object->setPickUpDetails($this->denormalizer->denormalize($data['PickUpDetails'], 'BesmartandPro\\Ups\\Api\\Model\\PickUpPickUpDetails', 'json', $context));
                unset($data['PickUpDetails']);
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
            $data['DayOfWeek'] = $object->getDayOfWeek();
            $data['PickUpDetails'] = $this->normalizer->normalize($object->getPickUpDetails(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\TransportationPickUpSchedulePickUp' => false];
        }
    }
}