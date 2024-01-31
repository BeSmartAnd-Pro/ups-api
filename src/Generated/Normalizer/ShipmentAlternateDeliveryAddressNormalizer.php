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
class ShipmentAlternateDeliveryAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentAlternateDeliveryAddress';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentAlternateDeliveryAddress';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ShipmentAlternateDeliveryAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('AttentionName', $data)) {
            $object->setAttentionName($data['AttentionName']);
            unset($data['AttentionName']);
        }
        if (\array_key_exists('UPSAccessPointID', $data)) {
            $object->setUPSAccessPointID($data['UPSAccessPointID']);
            unset($data['UPSAccessPointID']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateDeliveryAddressAddress', 'json', $context));
            unset($data['Address']);
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
        $data['Name'] = $object->getName();
        $data['AttentionName'] = $object->getAttentionName();
        if ($object->isInitialized('uPSAccessPointID') && null !== $object->getUPSAccessPointID()) {
            $data['UPSAccessPointID'] = $object->getUPSAccessPointID();
        }
        $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentAlternateDeliveryAddress' => false);
    }
}