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
class PalletInformationDimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\PalletInformationDimensions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\PalletInformationDimensions';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\PalletInformationDimensions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UnitOfMeasurement', $data)) {
            $object->setUnitOfMeasurement($this->denormalizer->denormalize($data['UnitOfMeasurement'], 'BesmartandPro\\UpsApi\\Generated\\Model\\DimensionsUnitOfMeasurement', 'json', $context));
            unset($data['UnitOfMeasurement']);
        }
        if (\array_key_exists('Length', $data)) {
            $object->setLength($data['Length']);
            unset($data['Length']);
        }
        if (\array_key_exists('Width', $data)) {
            $object->setWidth($data['Width']);
            unset($data['Width']);
        }
        if (\array_key_exists('Height', $data)) {
            $object->setHeight($data['Height']);
            unset($data['Height']);
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
        $data['UnitOfMeasurement'] = $this->normalizer->normalize($object->getUnitOfMeasurement(), 'json', $context);
        $data['Length'] = $object->getLength();
        $data['Width'] = $object->getWidth();
        $data['Height'] = $object->getHeight();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\PalletInformationDimensions' => false);
    }
}