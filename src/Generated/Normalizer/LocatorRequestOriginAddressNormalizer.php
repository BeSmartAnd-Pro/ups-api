<?php

namespace BesmartandPro\UpsApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use BesmartandPro\UpsApi\Generated\Runtime\Normalizer\CheckArray;
use BesmartandPro\UpsApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LocatorRequestOriginAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestOriginAddress';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestOriginAddress';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \BesmartandPro\UpsApi\Generated\Model\LocatorRequestOriginAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Geocode', $data)) {
            $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginAddressGeocode', 'json', $context));
            unset($data['Geocode']);
        }
        if (\array_key_exists('AddressKeyFormat', $data)) {
            $object->setAddressKeyFormat($this->denormalizer->denormalize($data['AddressKeyFormat'], 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginAddressAddressKeyFormat', 'json', $context));
            unset($data['AddressKeyFormat']);
        }
        if (\array_key_exists('MaximumListSize', $data)) {
            $object->setMaximumListSize($data['MaximumListSize']);
            unset($data['MaximumListSize']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('geocode') && null !== $object->getGeocode()) {
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
        }
        $data['AddressKeyFormat'] = $this->normalizer->normalize($object->getAddressKeyFormat(), 'json', $context);
        if ($object->isInitialized('maximumListSize') && null !== $object->getMaximumListSize()) {
            $data['MaximumListSize'] = $object->getMaximumListSize();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestOriginAddress' => false);
    }
}