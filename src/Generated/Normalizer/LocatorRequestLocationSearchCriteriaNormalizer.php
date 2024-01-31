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
class LocatorRequestLocationSearchCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestLocationSearchCriteria';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestLocationSearchCriteria';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\LocatorRequestLocationSearchCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SearchOption', $data)) {
            $values = array();
            foreach ($data['SearchOption'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaSearchOption', 'json', $context);
            }
            $object->setSearchOption($values);
            unset($data['SearchOption']);
        }
        if (\array_key_exists('MaximumListSize', $data)) {
            $object->setMaximumListSize($data['MaximumListSize']);
            unset($data['MaximumListSize']);
        }
        if (\array_key_exists('SearchRadius', $data)) {
            $object->setSearchRadius($data['SearchRadius']);
            unset($data['SearchRadius']);
        }
        if (\array_key_exists('ServiceSearch', $data)) {
            $object->setServiceSearch($this->denormalizer->denormalize($data['ServiceSearch'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaServiceSearch', 'json', $context));
            unset($data['ServiceSearch']);
        }
        if (\array_key_exists('FreightWillCallSearch', $data)) {
            $object->setFreightWillCallSearch($this->denormalizer->denormalize($data['FreightWillCallSearch'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaFreightWillCallSearch', 'json', $context));
            unset($data['FreightWillCallSearch']);
        }
        if (\array_key_exists('AccessPointSearch', $data)) {
            $object->setAccessPointSearch($this->denormalizer->denormalize($data['AccessPointSearch'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaAccessPointSearch', 'json', $context));
            unset($data['AccessPointSearch']);
        }
        if (\array_key_exists('OpenTimeCriteria', $data)) {
            $object->setOpenTimeCriteria($this->denormalizer->denormalize($data['OpenTimeCriteria'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LocationSearchCriteriaOpenTimeCriteria', 'json', $context));
            unset($data['OpenTimeCriteria']);
        }
        if (\array_key_exists('BrexitFilter', $data)) {
            $object->setBrexitFilter($data['BrexitFilter']);
            unset($data['BrexitFilter']);
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
        if ($object->isInitialized('searchOption') && null !== $object->getSearchOption()) {
            $values = array();
            foreach ($object->getSearchOption() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['SearchOption'] = $values;
        }
        if ($object->isInitialized('maximumListSize') && null !== $object->getMaximumListSize()) {
            $data['MaximumListSize'] = $object->getMaximumListSize();
        }
        if ($object->isInitialized('searchRadius') && null !== $object->getSearchRadius()) {
            $data['SearchRadius'] = $object->getSearchRadius();
        }
        if ($object->isInitialized('serviceSearch') && null !== $object->getServiceSearch()) {
            $data['ServiceSearch'] = $this->normalizer->normalize($object->getServiceSearch(), 'json', $context);
        }
        if ($object->isInitialized('freightWillCallSearch') && null !== $object->getFreightWillCallSearch()) {
            $data['FreightWillCallSearch'] = $this->normalizer->normalize($object->getFreightWillCallSearch(), 'json', $context);
        }
        if ($object->isInitialized('accessPointSearch') && null !== $object->getAccessPointSearch()) {
            $data['AccessPointSearch'] = $this->normalizer->normalize($object->getAccessPointSearch(), 'json', $context);
        }
        if ($object->isInitialized('openTimeCriteria') && null !== $object->getOpenTimeCriteria()) {
            $data['OpenTimeCriteria'] = $this->normalizer->normalize($object->getOpenTimeCriteria(), 'json', $context);
        }
        if ($object->isInitialized('brexitFilter') && null !== $object->getBrexitFilter()) {
            $data['BrexitFilter'] = $object->getBrexitFilter();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LocatorRequestLocationSearchCriteria' => false);
    }
}