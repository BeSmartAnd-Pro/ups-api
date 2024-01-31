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
class XAVRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\XAVRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\XAVRequest';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\XAVRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], 'BesmartandPro\\UpsApi\\Generated\\Model\\XAVRequestRequest', 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('RegionalRequestIndicator', $data)) {
            $object->setRegionalRequestIndicator($data['RegionalRequestIndicator']);
            unset($data['RegionalRequestIndicator']);
        }
        if (\array_key_exists('MaximumCandidateListSize', $data)) {
            $object->setMaximumCandidateListSize($data['MaximumCandidateListSize']);
            unset($data['MaximumCandidateListSize']);
        }
        if (\array_key_exists('AddressKeyFormat', $data)) {
            $values = array();
            foreach ($data['AddressKeyFormat'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\XAVRequestAddressKeyFormat', 'json', $context);
            }
            $object->setAddressKeyFormat($values);
            unset($data['AddressKeyFormat']);
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
        $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
        if ($object->isInitialized('regionalRequestIndicator') && null !== $object->getRegionalRequestIndicator()) {
            $data['RegionalRequestIndicator'] = $object->getRegionalRequestIndicator();
        }
        if ($object->isInitialized('maximumCandidateListSize') && null !== $object->getMaximumCandidateListSize()) {
            $data['MaximumCandidateListSize'] = $object->getMaximumCandidateListSize();
        }
        $values = array();
        foreach ($object->getAddressKeyFormat() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['AddressKeyFormat'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\XAVRequest' => false);
    }
}