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
class PackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\Package';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\Package';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\Package();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accessPointInformation', $data)) {
            $object->setAccessPointInformation($this->denormalizer->denormalize($data['accessPointInformation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\AccessPointInformation', 'json', $context));
            unset($data['accessPointInformation']);
        }
        if (\array_key_exists('activity', $data)) {
            $values = array();
            foreach ($data['activity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\Activity', 'json', $context);
            }
            $object->setActivity($values);
            unset($data['activity']);
        }
        if (\array_key_exists('additionalAttributes', $data)) {
            $values_1 = array();
            foreach ($data['additionalAttributes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAdditionalAttributes($values_1);
            unset($data['additionalAttributes']);
        }
        if (\array_key_exists('additionalServices', $data)) {
            $values_2 = array();
            foreach ($data['additionalServices'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAdditionalServices($values_2);
            unset($data['additionalServices']);
        }
        if (\array_key_exists('alternateTrackingNumber', $data)) {
            $values_3 = array();
            foreach ($data['alternateTrackingNumber'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'BesmartandPro\\UpsApi\\Generated\\Model\\AlternateTrackingNumber', 'json', $context);
            }
            $object->setAlternateTrackingNumber($values_3);
            unset($data['alternateTrackingNumber']);
        }
        if (\array_key_exists('currentStatus', $data)) {
            $object->setCurrentStatus($this->denormalizer->denormalize($data['currentStatus'], 'BesmartandPro\\UpsApi\\Generated\\Model\\Status', 'json', $context));
            unset($data['currentStatus']);
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $values_4 = array();
            foreach ($data['deliveryDate'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'BesmartandPro\\UpsApi\\Generated\\Model\\DeliveryDate', 'json', $context);
            }
            $object->setDeliveryDate($values_4);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('deliveryInformation', $data)) {
            $object->setDeliveryInformation($this->denormalizer->denormalize($data['deliveryInformation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\DeliveryInformation', 'json', $context));
            unset($data['deliveryInformation']);
        }
        if (\array_key_exists('deliveryTime', $data)) {
            $object->setDeliveryTime($this->denormalizer->denormalize($data['deliveryTime'], 'BesmartandPro\\UpsApi\\Generated\\Model\\DeliveryTime', 'json', $context));
            unset($data['deliveryTime']);
        }
        if (\array_key_exists('milestones', $data)) {
            $values_5 = array();
            foreach ($data['milestones'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'BesmartandPro\\UpsApi\\Generated\\Model\\Milestones', 'json', $context);
            }
            $object->setMilestones($values_5);
            unset($data['milestones']);
        }
        if (\array_key_exists('packageAddress', $data)) {
            $values_6 = array();
            foreach ($data['packageAddress'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageAddress', 'json', $context);
            }
            $object->setPackageAddress($values_6);
            unset($data['packageAddress']);
        }
        if (\array_key_exists('packageCount', $data)) {
            $object->setPackageCount($data['packageCount']);
            unset($data['packageCount']);
        }
        if (\array_key_exists('paymentInformation', $data)) {
            $values_7 = array();
            foreach ($data['paymentInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'BesmartandPro\\UpsApi\\Generated\\Model\\PaymentInformation', 'json', $context);
            }
            $object->setPaymentInformation($values_7);
            unset($data['paymentInformation']);
        }
        if (\array_key_exists('referenceNumber', $data)) {
            $values_8 = array();
            foreach ($data['referenceNumber'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'BesmartandPro\\UpsApi\\Generated\\Model\\ReferenceNumber', 'json', $context);
            }
            $object->setReferenceNumber($values_8);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['service'], 'BesmartandPro\\UpsApi\\Generated\\Model\\Service', 'json', $context));
            unset($data['service']);
        }
        if (\array_key_exists('statusCode', $data)) {
            $object->setStatusCode($data['statusCode']);
            unset($data['statusCode']);
        }
        if (\array_key_exists('statusDescription', $data)) {
            $object->setStatusDescription($data['statusDescription']);
            unset($data['statusDescription']);
        }
        if (\array_key_exists('suppressionIndicators', $data)) {
            $values_9 = array();
            foreach ($data['suppressionIndicators'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setSuppressionIndicators($values_9);
            unset($data['suppressionIndicators']);
        }
        if (\array_key_exists('trackingNumber', $data)) {
            $object->setTrackingNumber($data['trackingNumber']);
            unset($data['trackingNumber']);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\Weight', 'json', $context));
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
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
        if ($object->isInitialized('accessPointInformation') && null !== $object->getAccessPointInformation()) {
            $data['accessPointInformation'] = $this->normalizer->normalize($object->getAccessPointInformation(), 'json', $context);
        }
        if ($object->isInitialized('activity') && null !== $object->getActivity()) {
            $values = array();
            foreach ($object->getActivity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['activity'] = $values;
        }
        if ($object->isInitialized('additionalAttributes') && null !== $object->getAdditionalAttributes()) {
            $values_1 = array();
            foreach ($object->getAdditionalAttributes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['additionalAttributes'] = $values_1;
        }
        if ($object->isInitialized('additionalServices') && null !== $object->getAdditionalServices()) {
            $values_2 = array();
            foreach ($object->getAdditionalServices() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['additionalServices'] = $values_2;
        }
        if ($object->isInitialized('alternateTrackingNumber') && null !== $object->getAlternateTrackingNumber()) {
            $values_3 = array();
            foreach ($object->getAlternateTrackingNumber() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['alternateTrackingNumber'] = $values_3;
        }
        if ($object->isInitialized('currentStatus') && null !== $object->getCurrentStatus()) {
            $data['currentStatus'] = $this->normalizer->normalize($object->getCurrentStatus(), 'json', $context);
        }
        if ($object->isInitialized('deliveryDate') && null !== $object->getDeliveryDate()) {
            $values_4 = array();
            foreach ($object->getDeliveryDate() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['deliveryDate'] = $values_4;
        }
        if ($object->isInitialized('deliveryInformation') && null !== $object->getDeliveryInformation()) {
            $data['deliveryInformation'] = $this->normalizer->normalize($object->getDeliveryInformation(), 'json', $context);
        }
        if ($object->isInitialized('deliveryTime') && null !== $object->getDeliveryTime()) {
            $data['deliveryTime'] = $this->normalizer->normalize($object->getDeliveryTime(), 'json', $context);
        }
        if ($object->isInitialized('milestones') && null !== $object->getMilestones()) {
            $values_5 = array();
            foreach ($object->getMilestones() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['milestones'] = $values_5;
        }
        if ($object->isInitialized('packageAddress') && null !== $object->getPackageAddress()) {
            $values_6 = array();
            foreach ($object->getPackageAddress() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['packageAddress'] = $values_6;
        }
        if ($object->isInitialized('packageCount') && null !== $object->getPackageCount()) {
            $data['packageCount'] = $object->getPackageCount();
        }
        if ($object->isInitialized('paymentInformation') && null !== $object->getPaymentInformation()) {
            $values_7 = array();
            foreach ($object->getPaymentInformation() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['paymentInformation'] = $values_7;
        }
        if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
            $values_8 = array();
            foreach ($object->getReferenceNumber() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['referenceNumber'] = $values_8;
        }
        if ($object->isInitialized('service') && null !== $object->getService()) {
            $data['service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
        }
        if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
            $data['statusCode'] = $object->getStatusCode();
        }
        if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
            $data['statusDescription'] = $object->getStatusDescription();
        }
        if ($object->isInitialized('suppressionIndicators') && null !== $object->getSuppressionIndicators()) {
            $values_9 = array();
            foreach ($object->getSuppressionIndicators() as $value_9) {
                $values_9[] = $value_9;
            }
            $data['suppressionIndicators'] = $values_9;
        }
        if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
            $data['trackingNumber'] = $object->getTrackingNumber();
        }
        if ($object->isInitialized('weight') && null !== $object->getWeight()) {
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
        }
        foreach ($object as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_10;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\Package' => false);
    }
}