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
    class QuantumViewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\QuantumViewRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('SubscriptionRequest', $data)) {
                $values = [];
                foreach ($data['SubscriptionRequest'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequestSubscriptionRequest', 'json', $context);
                }
                $object->setSubscriptionRequest($values);
                unset($data['SubscriptionRequest']);
            }
            if (\array_key_exists('Bookmark', $data)) {
                $object->setBookmark($data['Bookmark']);
                unset($data['Bookmark']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('subscriptionRequest') && null !== $object->getSubscriptionRequest()) {
                $values = [];
                foreach ($object->getSubscriptionRequest() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SubscriptionRequest'] = $values;
            }
            if ($object->isInitialized('bookmark') && null !== $object->getBookmark()) {
                $data['Bookmark'] = $object->getBookmark();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest' => false];
        }
    }
} else {
    class QuantumViewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest';
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
            $object = new \BesmartandPro\Ups\Api\Model\QuantumViewRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data)) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            if (\array_key_exists('SubscriptionRequest', $data)) {
                $values = [];
                foreach ($data['SubscriptionRequest'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequestSubscriptionRequest', 'json', $context);
                }
                $object->setSubscriptionRequest($values);
                unset($data['SubscriptionRequest']);
            }
            if (\array_key_exists('Bookmark', $data)) {
                $object->setBookmark($data['Bookmark']);
                unset($data['Bookmark']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            if ($object->isInitialized('subscriptionRequest') && null !== $object->getSubscriptionRequest()) {
                $values = [];
                foreach ($object->getSubscriptionRequest() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['SubscriptionRequest'] = $values;
            }
            if ($object->isInitialized('bookmark') && null !== $object->getBookmark()) {
                $data['Bookmark'] = $object->getBookmark();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['BesmartandPro\\Ups\\Api\\Model\\QuantumViewRequest' => false];
        }
    }
}