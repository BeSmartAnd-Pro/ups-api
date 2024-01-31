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
class ShipmentResultsPackageResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentResultsPackageResults';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentResultsPackageResults';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ShipmentResultsPackageResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('TrackingNumber', $data)) {
            $object->setTrackingNumber($data['TrackingNumber']);
            unset($data['TrackingNumber']);
        }
        if (\array_key_exists('RateModifier', $data)) {
            $object->setRateModifier($this->denormalizer->denormalize($data['RateModifier'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsRateModifier', 'json', $context));
            unset($data['RateModifier']);
        }
        if (\array_key_exists('BaseServiceCharge', $data)) {
            $object->setBaseServiceCharge($this->denormalizer->denormalize($data['BaseServiceCharge'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsBaseServiceCharge', 'json', $context));
            unset($data['BaseServiceCharge']);
        }
        if (\array_key_exists('ServiceOptionsCharges', $data)) {
            $object->setServiceOptionsCharges($this->denormalizer->denormalize($data['ServiceOptionsCharges'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsServiceOptionsCharges', 'json', $context));
            unset($data['ServiceOptionsCharges']);
        }
        if (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] !== null) {
            $object->setShippingLabel($this->denormalizer->denormalize($data['ShippingLabel'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsShippingLabel', 'json', $context));
            unset($data['ShippingLabel']);
        }
        elseif (\array_key_exists('ShippingLabel', $data) && $data['ShippingLabel'] === null) {
            $object->setShippingLabel(null);
        }
        if (\array_key_exists('ShippingReceipt', $data)) {
            $object->setShippingReceipt($this->denormalizer->denormalize($data['ShippingReceipt'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsShippingReceipt', 'json', $context));
            unset($data['ShippingReceipt']);
        }
        if (\array_key_exists('USPSPICNumber', $data)) {
            $object->setUSPSPICNumber($data['USPSPICNumber']);
            unset($data['USPSPICNumber']);
        }
        if (\array_key_exists('CN22Number', $data)) {
            $object->setCN22Number($data['CN22Number']);
            unset($data['CN22Number']);
        }
        if (\array_key_exists('Accessorial', $data)) {
            $values = array();
            foreach ($data['Accessorial'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsAccessorial', 'json', $context);
            }
            $object->setAccessorial($values);
            unset($data['Accessorial']);
        }
        if (\array_key_exists('SimpleRate', $data)) {
            $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsSimpleRate', 'json', $context));
            unset($data['SimpleRate']);
        }
        if (\array_key_exists('Form', $data) && $data['Form'] !== null) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsForm', 'json', $context));
            unset($data['Form']);
        }
        elseif (\array_key_exists('Form', $data) && $data['Form'] === null) {
            $object->setForm(null);
        }
        if (\array_key_exists('ItemizedCharges', $data)) {
            $values_1 = array();
            foreach ($data['ItemizedCharges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsItemizedCharges', 'json', $context);
            }
            $object->setItemizedCharges($values_1);
            unset($data['ItemizedCharges']);
        }
        if (\array_key_exists('NegotiatedCharges', $data)) {
            $object->setNegotiatedCharges($this->denormalizer->denormalize($data['NegotiatedCharges'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageResultsNegotiatedCharges', 'json', $context));
            unset($data['NegotiatedCharges']);
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
        $data['TrackingNumber'] = $object->getTrackingNumber();
        if ($object->isInitialized('rateModifier') && null !== $object->getRateModifier()) {
            $data['RateModifier'] = $this->normalizer->normalize($object->getRateModifier(), 'json', $context);
        }
        if ($object->isInitialized('baseServiceCharge') && null !== $object->getBaseServiceCharge()) {
            $data['BaseServiceCharge'] = $this->normalizer->normalize($object->getBaseServiceCharge(), 'json', $context);
        }
        if ($object->isInitialized('serviceOptionsCharges') && null !== $object->getServiceOptionsCharges()) {
            $data['ServiceOptionsCharges'] = $this->normalizer->normalize($object->getServiceOptionsCharges(), 'json', $context);
        }
        if ($object->isInitialized('shippingLabel') && null !== $object->getShippingLabel()) {
            $data['ShippingLabel'] = $this->normalizer->normalize($object->getShippingLabel(), 'json', $context);
        }
        if ($object->isInitialized('shippingReceipt') && null !== $object->getShippingReceipt()) {
            $data['ShippingReceipt'] = $this->normalizer->normalize($object->getShippingReceipt(), 'json', $context);
        }
        if ($object->isInitialized('uSPSPICNumber') && null !== $object->getUSPSPICNumber()) {
            $data['USPSPICNumber'] = $object->getUSPSPICNumber();
        }
        if ($object->isInitialized('cN22Number') && null !== $object->getCN22Number()) {
            $data['CN22Number'] = $object->getCN22Number();
        }
        if ($object->isInitialized('accessorial') && null !== $object->getAccessorial()) {
            $values = array();
            foreach ($object->getAccessorial() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Accessorial'] = $values;
        }
        if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
            $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
        }
        if ($object->isInitialized('form') && null !== $object->getForm()) {
            $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
        }
        if ($object->isInitialized('itemizedCharges') && null !== $object->getItemizedCharges()) {
            $values_1 = array();
            foreach ($object->getItemizedCharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['ItemizedCharges'] = $values_1;
        }
        if ($object->isInitialized('negotiatedCharges') && null !== $object->getNegotiatedCharges()) {
            $data['NegotiatedCharges'] = $this->normalizer->normalize($object->getNegotiatedCharges(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentResultsPackageResults' => false);
    }
}