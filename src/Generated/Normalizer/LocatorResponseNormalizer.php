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
class LocatorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponse';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\LocatorResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseResponse', 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('Geocode', $data)) {
            $object->setGeocode($this->denormalizer->denormalize($data['Geocode'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseGeocode', 'json', $context));
            unset($data['Geocode']);
        }
        if (\array_key_exists('SearchResults', $data)) {
            $object->setSearchResults($this->denormalizer->denormalize($data['SearchResults'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseSearchResults', 'json', $context));
            unset($data['SearchResults']);
        }
        if (\array_key_exists('AllowAllConfidenceLevels', $data)) {
            $object->setAllowAllConfidenceLevels($data['AllowAllConfidenceLevels']);
            unset($data['AllowAllConfidenceLevels']);
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
        $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        if ($object->isInitialized('geocode') && null !== $object->getGeocode()) {
            $data['Geocode'] = $this->normalizer->normalize($object->getGeocode(), 'json', $context);
        }
        $data['SearchResults'] = $this->normalizer->normalize($object->getSearchResults(), 'json', $context);
        $data['AllowAllConfidenceLevels'] = $object->getAllowAllConfidenceLevels();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponse' => false);
    }
}