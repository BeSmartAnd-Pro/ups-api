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
class PickupCreationRequestPickupPieceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\PickupCreationRequestPickupPiece';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\PickupCreationRequestPickupPiece';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\PickupCreationRequestPickupPiece();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ServiceCode', $data)) {
            $object->setServiceCode($data['ServiceCode']);
            unset($data['ServiceCode']);
        }
        if (\array_key_exists('Quantity', $data)) {
            $object->setQuantity($data['Quantity']);
            unset($data['Quantity']);
        }
        if (\array_key_exists('DestinationCountryCode', $data)) {
            $object->setDestinationCountryCode($data['DestinationCountryCode']);
            unset($data['DestinationCountryCode']);
        }
        if (\array_key_exists('ContainerCode', $data)) {
            $object->setContainerCode($data['ContainerCode']);
            unset($data['ContainerCode']);
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
        $data['ServiceCode'] = $object->getServiceCode();
        $data['Quantity'] = $object->getQuantity();
        $data['DestinationCountryCode'] = $object->getDestinationCountryCode();
        $data['ContainerCode'] = $object->getContainerCode();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\PickupCreationRequestPickupPiece' => false);
    }
}