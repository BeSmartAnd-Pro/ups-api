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
class RateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequest';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\RateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequestRequest', 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('PickupType', $data)) {
            $object->setPickupType($this->denormalizer->denormalize($data['PickupType'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequestPickupType', 'json', $context));
            unset($data['PickupType']);
        }
        if (\array_key_exists('CustomerClassification', $data)) {
            $object->setCustomerClassification($this->denormalizer->denormalize($data['CustomerClassification'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequestCustomerClassification', 'json', $context));
            unset($data['CustomerClassification']);
        }
        if (\array_key_exists('Shipment', $data)) {
            $object->setShipment($this->denormalizer->denormalize($data['Shipment'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RateRequestShipment', 'json', $context));
            unset($data['Shipment']);
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
        $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
        if ($object->isInitialized('pickupType') && null !== $object->getPickupType()) {
            $data['PickupType'] = $this->normalizer->normalize($object->getPickupType(), 'json', $context);
        }
        if ($object->isInitialized('customerClassification') && null !== $object->getCustomerClassification()) {
            $data['CustomerClassification'] = $this->normalizer->normalize($object->getCustomerClassification(), 'json', $context);
        }
        $data['Shipment'] = $this->normalizer->normalize($object->getShipment(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\RateRequest' => false);
    }
}