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
class FreightShipmentInformationFreightDensityInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightShipmentInformationFreightDensityInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightShipmentInformationFreightDensityInfo';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\FreightShipmentInformationFreightDensityInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AdjustedHeightIndicator', $data)) {
            $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
            unset($data['AdjustedHeightIndicator']);
        }
        if (\array_key_exists('AdjustedHeight', $data)) {
            $object->setAdjustedHeight($this->denormalizer->denormalize($data['AdjustedHeight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightDensityInfoAdjustedHeight', 'json', $context));
            unset($data['AdjustedHeight']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $values = array();
            foreach ($data['HandlingUnits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightDensityInfoHandlingUnits', 'json', $context);
            }
            $object->setHandlingUnits($values);
            unset($data['HandlingUnits']);
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
        if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
            $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
        }
        if ($object->isInitialized('adjustedHeight') && null !== $object->getAdjustedHeight()) {
            $data['AdjustedHeight'] = $this->normalizer->normalize($object->getAdjustedHeight(), 'json', $context);
        }
        if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
            $values = array();
            foreach ($object->getHandlingUnits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['HandlingUnits'] = $values;
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\FreightShipmentInformationFreightDensityInfo' => false);
    }
}