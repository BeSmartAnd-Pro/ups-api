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
class SubscriptionFileOriginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionFileOrigin';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionFileOrigin';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\SubscriptionFileOrigin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackageReferenceNumber', $data)) {
            $values = array();
            foreach ($data['PackageReferenceNumber'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginPackageReferenceNumber', 'json', $context);
            }
            $object->setPackageReferenceNumber($values);
            unset($data['PackageReferenceNumber']);
        }
        if (\array_key_exists('ShipmentReferenceNumber', $data)) {
            $values_1 = array();
            foreach ($data['ShipmentReferenceNumber'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginShipmentReferenceNumber', 'json', $context);
            }
            $object->setShipmentReferenceNumber($values_1);
            unset($data['ShipmentReferenceNumber']);
        }
        if (\array_key_exists('ShipperNumber', $data)) {
            $object->setShipperNumber($data['ShipperNumber']);
            unset($data['ShipperNumber']);
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('Date', $data)) {
            $object->setDate($data['Date']);
            unset($data['Date']);
        }
        if (\array_key_exists('Time', $data)) {
            $object->setTime($data['Time']);
            unset($data['Time']);
        }
        if (\array_key_exists('ActivityLocation', $data)) {
            $object->setActivityLocation($this->denormalizer->denormalize($data['ActivityLocation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginActivityLocation', 'json', $context));
            unset($data['ActivityLocation']);
        }
        if (\array_key_exists('BillToAccount', $data)) {
            $object->setBillToAccount($this->denormalizer->denormalize($data['BillToAccount'], 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginBillToAccount', 'json', $context));
            unset($data['BillToAccount']);
        }
        if (\array_key_exists('ScheduledDeliveryDate', $data)) {
            $object->setScheduledDeliveryDate($data['ScheduledDeliveryDate']);
            unset($data['ScheduledDeliveryDate']);
        }
        if (\array_key_exists('ScheduledDeliveryTime', $data)) {
            $object->setScheduledDeliveryTime($data['ScheduledDeliveryTime']);
            unset($data['ScheduledDeliveryTime']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
            $values = array();
            foreach ($object->getPackageReferenceNumber() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PackageReferenceNumber'] = $values;
        }
        if ($object->isInitialized('shipmentReferenceNumber') && null !== $object->getShipmentReferenceNumber()) {
            $values_1 = array();
            foreach ($object->getShipmentReferenceNumber() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ShipmentReferenceNumber'] = $values_1;
        }
        $data['ShipperNumber'] = $object->getShipperNumber();
        $data['TrackingNumber'] = $object->getTrackingNumber();
        $data['Date'] = $object->getDate();
        $data['Time'] = $object->getTime();
        if ($object->isInitialized('activityLocation') && null !== $object->getActivityLocation()) {
            $data['ActivityLocation'] = $this->normalizer->normalize($object->getActivityLocation(), 'json', $context);
        }
        if ($object->isInitialized('billToAccount') && null !== $object->getBillToAccount()) {
            $data['BillToAccount'] = $this->normalizer->normalize($object->getBillToAccount(), 'json', $context);
        }
        if ($object->isInitialized('scheduledDeliveryDate') && null !== $object->getScheduledDeliveryDate()) {
            $data['ScheduledDeliveryDate'] = $object->getScheduledDeliveryDate();
        }
        if ($object->isInitialized('scheduledDeliveryTime') && null !== $object->getScheduledDeliveryTime()) {
            $data['ScheduledDeliveryTime'] = $object->getScheduledDeliveryTime();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\SubscriptionFileOrigin' => false);
    }
}