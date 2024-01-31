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
class LocatorResponseSearchResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseSearchResults';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseSearchResults';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\LocatorResponseSearchResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('GeocodeCandidate', $data)) {
            $values = array();
            foreach ($data['GeocodeCandidate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\SearchResultsGeocodeCandidate', 'json', $context);
            }
            $object->setGeocodeCandidate($values);
            unset($data['GeocodeCandidate']);
        }
        if (\array_key_exists('Disclaimer', $data)) {
            $values_1 = array();
            foreach ($data['Disclaimer'] as $value_1) {
                $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setDisclaimer($values_1);
            unset($data['Disclaimer']);
        }
        if (\array_key_exists('DropLocation', $data)) {
            $object->setDropLocation($this->denormalizer->denormalize($data['DropLocation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\SearchResultsDropLocation', 'json', $context));
            unset($data['DropLocation']);
        }
        if (\array_key_exists('AvailableLocationAttributes', $data)) {
            $values_3 = array();
            foreach ($data['AvailableLocationAttributes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'BesmartandPro\\UpsApi\\Generated\\Model\\SearchResultsAvailableLocationAttributes', 'json', $context);
            }
            $object->setAvailableLocationAttributes($values_3);
            unset($data['AvailableLocationAttributes']);
        }
        if (\array_key_exists('ActiveAvailableAccessPointIndicator', $data)) {
            $object->setActiveAvailableAccessPointIndicator($data['ActiveAvailableAccessPointIndicator']);
            unset($data['ActiveAvailableAccessPointIndicator']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
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
        if ($object->isInitialized('geocodeCandidate') && null !== $object->getGeocodeCandidate()) {
            $values = array();
            foreach ($object->getGeocodeCandidate() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['GeocodeCandidate'] = $values;
        }
        if ($object->isInitialized('disclaimer') && null !== $object->getDisclaimer()) {
            $values_1 = array();
            foreach ($object->getDisclaimer() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['Disclaimer'] = $values_1;
        }
        if ($object->isInitialized('dropLocation') && null !== $object->getDropLocation()) {
            $data['DropLocation'] = $this->normalizer->normalize($object->getDropLocation(), 'json', $context);
        }
        if ($object->isInitialized('availableLocationAttributes') && null !== $object->getAvailableLocationAttributes()) {
            $values_3 = array();
            foreach ($object->getAvailableLocationAttributes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['AvailableLocationAttributes'] = $values_3;
        }
        if ($object->isInitialized('activeAvailableAccessPointIndicator') && null !== $object->getActiveAvailableAccessPointIndicator()) {
            $data['ActiveAvailableAccessPointIndicator'] = $object->getActiveAvailableAccessPointIndicator();
        }
        foreach ($object as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_4;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LocatorResponseSearchResults' => false);
    }
}