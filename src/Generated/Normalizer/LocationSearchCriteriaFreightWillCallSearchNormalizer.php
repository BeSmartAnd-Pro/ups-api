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
class LocationSearchCriteriaFreightWillCallSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaFreightWillCallSearch';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaFreightWillCallSearch';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\LocationSearchCriteriaFreightWillCallSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FreightWillCallRequestType', $data)) {
            $object->setFreightWillCallRequestType($data['FreightWillCallRequestType']);
            unset($data['FreightWillCallRequestType']);
        }
        if (\array_key_exists('FacilityAddress', $data)) {
            $values = array();
            foreach ($data['FacilityAddress'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightWillCallSearchFacilityAddress', 'json', $context);
            }
            $object->setFacilityAddress($values);
            unset($data['FacilityAddress']);
        }
        if (\array_key_exists('OriginOrDestination', $data)) {
            $object->setOriginOrDestination($data['OriginOrDestination']);
            unset($data['OriginOrDestination']);
        }
        if (\array_key_exists('FormatPostalCode', $data)) {
            $object->setFormatPostalCode($data['FormatPostalCode']);
            unset($data['FormatPostalCode']);
        }
        if (\array_key_exists('DayOfWeekCode', $data)) {
            $object->setDayOfWeekCode($data['DayOfWeekCode']);
            unset($data['DayOfWeekCode']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['FreightWillCallRequestType'] = $object->getFreightWillCallRequestType();
        $values = array();
        foreach ($object->getFacilityAddress() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['FacilityAddress'] = $values;
        $data['OriginOrDestination'] = $object->getOriginOrDestination();
        $data['FormatPostalCode'] = $object->getFormatPostalCode();
        if ($object->isInitialized('dayOfWeekCode') && null !== $object->getDayOfWeekCode()) {
            $data['DayOfWeekCode'] = $object->getDayOfWeekCode();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaFreightWillCallSearch' => false);
    }
}