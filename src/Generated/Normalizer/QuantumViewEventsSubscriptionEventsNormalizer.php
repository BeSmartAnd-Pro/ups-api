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
class QuantumViewEventsSubscriptionEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\QuantumViewEventsSubscriptionEvents';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\QuantumViewEventsSubscriptionEvents';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\QuantumViewEventsSubscriptionEvents();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
            unset($data['Name']);
        }
        if (\array_key_exists('Number', $data)) {
            $object->setNumber($data['Number']);
            unset($data['Number']);
        }
        if (\array_key_exists('SubscriptionStatus', $data)) {
            $object->setSubscriptionStatus($this->denormalizer->denormalize($data['SubscriptionStatus'], 'BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionEventsSubscriptionStatus', 'json', $context));
            unset($data['SubscriptionStatus']);
        }
        if (\array_key_exists('DateRange', $data)) {
            $object->setDateRange($this->denormalizer->denormalize($data['DateRange'], 'BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionEventsDateRange', 'json', $context));
            unset($data['DateRange']);
        }
        if (\array_key_exists('SubscriptionFile', $data)) {
            $values = array();
            foreach ($data['SubscriptionFile'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionEventsSubscriptionFile', 'json', $context);
            }
            $object->setSubscriptionFile($values);
            unset($data['SubscriptionFile']);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        $data['SubscriptionStatus'] = $this->normalizer->normalize($object->getSubscriptionStatus(), 'json', $context);
        if ($object->isInitialized('dateRange') && null !== $object->getDateRange()) {
            $data['DateRange'] = $this->normalizer->normalize($object->getDateRange(), 'json', $context);
        }
        if ($object->isInitialized('subscriptionFile') && null !== $object->getSubscriptionFile()) {
            $values = array();
            foreach ($object->getSubscriptionFile() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['SubscriptionFile'] = $values;
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\QuantumViewEventsSubscriptionEvents' => false);
    }
}