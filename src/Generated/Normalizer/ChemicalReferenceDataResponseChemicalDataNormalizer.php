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
class ChemicalReferenceDataResponseChemicalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalReferenceDataResponseChemicalData';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalReferenceDataResponseChemicalData';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ChemicalReferenceDataResponseChemicalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ChemicalDetail', $data)) {
            $object->setChemicalDetail($this->denormalizer->denormalize($data['ChemicalDetail'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalDataChemicalDetail', 'json', $context));
            unset($data['ChemicalDetail']);
        }
        if (\array_key_exists('ProperShippingNameDetail', $data)) {
            $object->setProperShippingNameDetail($this->denormalizer->denormalize($data['ProperShippingNameDetail'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalDataProperShippingNameDetail', 'json', $context));
            unset($data['ProperShippingNameDetail']);
        }
        if (\array_key_exists('PackageQuantityLimitDetail', $data)) {
            $values = array();
            foreach ($data['PackageQuantityLimitDetail'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalDataPackageQuantityLimitDetail', 'json', $context);
            }
            $object->setPackageQuantityLimitDetail($values);
            unset($data['PackageQuantityLimitDetail']);
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
        if ($object->isInitialized('chemicalDetail') && null !== $object->getChemicalDetail()) {
            $data['ChemicalDetail'] = $this->normalizer->normalize($object->getChemicalDetail(), 'json', $context);
        }
        if ($object->isInitialized('properShippingNameDetail') && null !== $object->getProperShippingNameDetail()) {
            $data['ProperShippingNameDetail'] = $this->normalizer->normalize($object->getProperShippingNameDetail(), 'json', $context);
        }
        if ($object->isInitialized('packageQuantityLimitDetail') && null !== $object->getPackageQuantityLimitDetail()) {
            $values = array();
            foreach ($object->getPackageQuantityLimitDetail() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PackageQuantityLimitDetail'] = $values;
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ChemicalReferenceDataResponseChemicalData' => false);
    }
}