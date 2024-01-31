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
class FreightRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequest';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequest';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\FreightRateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Request', $data)) {
            $object->setRequest($this->denormalizer->denormalize($data['Request'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestRequest', 'json', $context));
            unset($data['Request']);
        }
        if (\array_key_exists('ShipFrom', $data)) {
            $object->setShipFrom($this->denormalizer->denormalize($data['ShipFrom'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestShipFrom', 'json', $context));
            unset($data['ShipFrom']);
        }
        if (\array_key_exists('ShipTo', $data)) {
            $object->setShipTo($this->denormalizer->denormalize($data['ShipTo'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestShipTo', 'json', $context));
            unset($data['ShipTo']);
        }
        if (\array_key_exists('PaymentInformation', $data)) {
            $object->setPaymentInformation($this->denormalizer->denormalize($data['PaymentInformation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestPaymentInformation', 'json', $context));
            unset($data['PaymentInformation']);
        }
        if (\array_key_exists('Service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['Service'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestService', 'json', $context));
            unset($data['Service']);
        }
        if (\array_key_exists('HandlingUnitOne', $data)) {
            $object->setHandlingUnitOne($this->denormalizer->denormalize($data['HandlingUnitOne'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestHandlingUnitOne', 'json', $context));
            unset($data['HandlingUnitOne']);
        }
        if (\array_key_exists('HandlingUnitTwo', $data)) {
            $object->setHandlingUnitTwo($this->denormalizer->denormalize($data['HandlingUnitTwo'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestHandlingUnitTwo', 'json', $context));
            unset($data['HandlingUnitTwo']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $values = array();
            foreach ($data['Commodity'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestCommodity', 'json', $context);
            }
            $object->setCommodity($values);
            unset($data['Commodity']);
        }
        if (\array_key_exists('ShipmentServiceOptions', $data)) {
            $object->setShipmentServiceOptions($this->denormalizer->denormalize($data['ShipmentServiceOptions'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestShipmentServiceOptions', 'json', $context));
            unset($data['ShipmentServiceOptions']);
        }
        if (\array_key_exists('PickupRequest', $data)) {
            $object->setPickupRequest($this->denormalizer->denormalize($data['PickupRequest'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestPickupRequest', 'json', $context));
            unset($data['PickupRequest']);
        }
        if (\array_key_exists('AlternateRateOptions', $data)) {
            $object->setAlternateRateOptions($this->denormalizer->denormalize($data['AlternateRateOptions'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestAlternateRateOptions', 'json', $context));
            unset($data['AlternateRateOptions']);
        }
        if (\array_key_exists('GFPOptions', $data)) {
            $object->setGFPOptions($this->denormalizer->denormalize($data['GFPOptions'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestGFPOptions', 'json', $context));
            unset($data['GFPOptions']);
        }
        if (\array_key_exists('HandlingUnitWeight', $data)) {
            $object->setHandlingUnitWeight($this->denormalizer->denormalize($data['HandlingUnitWeight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestHandlingUnitWeight', 'json', $context));
            unset($data['HandlingUnitWeight']);
        }
        if (\array_key_exists('AdjustedWeightIndicator', $data)) {
            $object->setAdjustedWeightIndicator($data['AdjustedWeightIndicator']);
            unset($data['AdjustedWeightIndicator']);
        }
        if (\array_key_exists('TimeInTransitIndicator', $data)) {
            $object->setTimeInTransitIndicator($data['TimeInTransitIndicator']);
            unset($data['TimeInTransitIndicator']);
        }
        if (\array_key_exists('HandlingUnits', $data)) {
            $values_1 = array();
            foreach ($data['HandlingUnits'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequestHandlingUnits', 'json', $context);
            }
            $object->setHandlingUnits($values_1);
            unset($data['HandlingUnits']);
        }
        if (\array_key_exists('AdjustedHeightIndicator', $data)) {
            $object->setAdjustedHeightIndicator($data['AdjustedHeightIndicator']);
            unset($data['AdjustedHeightIndicator']);
        }
        if (\array_key_exists('DensityEligibleIndicator', $data)) {
            $object->setDensityEligibleIndicator($data['DensityEligibleIndicator']);
            unset($data['DensityEligibleIndicator']);
        }
        if (\array_key_exists('QuoteNumberIndicator', $data)) {
            $object->setQuoteNumberIndicator($data['QuoteNumberIndicator']);
            unset($data['QuoteNumberIndicator']);
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
        $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
        $data['ShipFrom'] = $this->normalizer->normalize($object->getShipFrom(), 'json', $context);
        $data['ShipTo'] = $this->normalizer->normalize($object->getShipTo(), 'json', $context);
        $data['PaymentInformation'] = $this->normalizer->normalize($object->getPaymentInformation(), 'json', $context);
        $data['Service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
        if ($object->isInitialized('handlingUnitOne') && null !== $object->getHandlingUnitOne()) {
            $data['HandlingUnitOne'] = $this->normalizer->normalize($object->getHandlingUnitOne(), 'json', $context);
        }
        if ($object->isInitialized('handlingUnitTwo') && null !== $object->getHandlingUnitTwo()) {
            $data['HandlingUnitTwo'] = $this->normalizer->normalize($object->getHandlingUnitTwo(), 'json', $context);
        }
        $values = array();
        foreach ($object->getCommodity() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['Commodity'] = $values;
        if ($object->isInitialized('shipmentServiceOptions') && null !== $object->getShipmentServiceOptions()) {
            $data['ShipmentServiceOptions'] = $this->normalizer->normalize($object->getShipmentServiceOptions(), 'json', $context);
        }
        if ($object->isInitialized('pickupRequest') && null !== $object->getPickupRequest()) {
            $data['PickupRequest'] = $this->normalizer->normalize($object->getPickupRequest(), 'json', $context);
        }
        if ($object->isInitialized('alternateRateOptions') && null !== $object->getAlternateRateOptions()) {
            $data['AlternateRateOptions'] = $this->normalizer->normalize($object->getAlternateRateOptions(), 'json', $context);
        }
        if ($object->isInitialized('gFPOptions') && null !== $object->getGFPOptions()) {
            $data['GFPOptions'] = $this->normalizer->normalize($object->getGFPOptions(), 'json', $context);
        }
        if ($object->isInitialized('handlingUnitWeight') && null !== $object->getHandlingUnitWeight()) {
            $data['HandlingUnitWeight'] = $this->normalizer->normalize($object->getHandlingUnitWeight(), 'json', $context);
        }
        if ($object->isInitialized('adjustedWeightIndicator') && null !== $object->getAdjustedWeightIndicator()) {
            $data['AdjustedWeightIndicator'] = $object->getAdjustedWeightIndicator();
        }
        if ($object->isInitialized('timeInTransitIndicator') && null !== $object->getTimeInTransitIndicator()) {
            $data['TimeInTransitIndicator'] = $object->getTimeInTransitIndicator();
        }
        if ($object->isInitialized('handlingUnits') && null !== $object->getHandlingUnits()) {
            $values_1 = array();
            foreach ($object->getHandlingUnits() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['HandlingUnits'] = $values_1;
        }
        if ($object->isInitialized('adjustedHeightIndicator') && null !== $object->getAdjustedHeightIndicator()) {
            $data['AdjustedHeightIndicator'] = $object->getAdjustedHeightIndicator();
        }
        if ($object->isInitialized('densityEligibleIndicator') && null !== $object->getDensityEligibleIndicator()) {
            $data['DensityEligibleIndicator'] = $object->getDensityEligibleIndicator();
        }
        if ($object->isInitialized('quoteNumberIndicator') && null !== $object->getQuoteNumberIndicator()) {
            $data['QuoteNumberIndicator'] = $object->getQuoteNumberIndicator();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\FreightRateRequest' => false);
    }
}