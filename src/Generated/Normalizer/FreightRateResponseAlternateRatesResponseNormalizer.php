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
class FreightRateResponseAlternateRatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateResponseAlternateRatesResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateResponseAlternateRatesResponse';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\FreightRateResponseAlternateRatesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AlternateRateType', $data)) {
            $object->setAlternateRateType($this->denormalizer->denormalize($data['AlternateRateType'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateRatesResponseAlternateRateType', 'json', $context));
            unset($data['AlternateRateType']);
        }
        if (\array_key_exists('Rate', $data)) {
            $values = array();
            foreach ($data['Rate'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateRatesResponseRate', 'json', $context);
            }
            $object->setRate($values);
            unset($data['Rate']);
        }
        if (\array_key_exists('FreightDensityRate', $data)) {
            $object->setFreightDensityRate($this->denormalizer->denormalize($data['FreightDensityRate'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateRatesResponseFreightDensityRate', 'json', $context));
            unset($data['FreightDensityRate']);
        }
        if (\array_key_exists('BillableShipmentWeight', $data)) {
            $object->setBillableShipmentWeight($this->denormalizer->denormalize($data['BillableShipmentWeight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateRatesResponseBillableShipmentWeight', 'json', $context));
            unset($data['BillableShipmentWeight']);
        }
        if (\array_key_exists('TimeInTransit', $data)) {
            $object->setTimeInTransit($this->denormalizer->denormalize($data['TimeInTransit'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateRatesResponseTimeInTransit', 'json', $context));
            unset($data['TimeInTransit']);
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
        $data['AlternateRateType'] = $this->normalizer->normalize($object->getAlternateRateType(), 'json', $context);
        $values = array();
        foreach ($object->getRate() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['Rate'] = $values;
        if ($object->isInitialized('freightDensityRate') && null !== $object->getFreightDensityRate()) {
            $data['FreightDensityRate'] = $this->normalizer->normalize($object->getFreightDensityRate(), 'json', $context);
        }
        if ($object->isInitialized('billableShipmentWeight') && null !== $object->getBillableShipmentWeight()) {
            $data['BillableShipmentWeight'] = $this->normalizer->normalize($object->getBillableShipmentWeight(), 'json', $context);
        }
        if ($object->isInitialized('timeInTransit') && null !== $object->getTimeInTransit()) {
            $data['TimeInTransit'] = $this->normalizer->normalize($object->getTimeInTransit(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateResponseAlternateRatesResponse' => false);
    }
}