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
class AccessPointSearchIncludeCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\AccessPointSearchIncludeCriteria';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\AccessPointSearchIncludeCriteria';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\AccessPointSearchIncludeCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('MerchantAccountNumberList', $data)) {
            $object->setMerchantAccountNumberList($this->denormalizer->denormalize($data['MerchantAccountNumberList'], 'BesmartandPro\\UpsApi\\Generated\\Model\\IncludeCriteriaMerchantAccountNumberList', 'json', $context));
            unset($data['MerchantAccountNumberList']);
        }
        if (\array_key_exists('SearchFilter', $data)) {
            $object->setSearchFilter($this->denormalizer->denormalize($data['SearchFilter'], 'BesmartandPro\\UpsApi\\Generated\\Model\\IncludeCriteriaSearchFilter', 'json', $context));
            unset($data['SearchFilter']);
        }
        if (\array_key_exists('ServiceOfferingList', $data)) {
            $object->setServiceOfferingList($this->denormalizer->denormalize($data['ServiceOfferingList'], 'BesmartandPro\\UpsApi\\Generated\\Model\\IncludeCriteriaServiceOfferingList', 'json', $context));
            unset($data['ServiceOfferingList']);
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
        if ($object->isInitialized('merchantAccountNumberList') && null !== $object->getMerchantAccountNumberList()) {
            $data['MerchantAccountNumberList'] = $this->normalizer->normalize($object->getMerchantAccountNumberList(), 'json', $context);
        }
        if ($object->isInitialized('searchFilter') && null !== $object->getSearchFilter()) {
            $data['SearchFilter'] = $this->normalizer->normalize($object->getSearchFilter(), 'json', $context);
        }
        if ($object->isInitialized('serviceOfferingList') && null !== $object->getServiceOfferingList()) {
            $data['ServiceOfferingList'] = $this->normalizer->normalize($object->getServiceOfferingList(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\AccessPointSearchIncludeCriteria' => false);
    }
}