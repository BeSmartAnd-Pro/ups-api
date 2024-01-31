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
class ServiceSummaryEstimatedArrivalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ServiceSummaryEstimatedArrival';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ServiceSummaryEstimatedArrival';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ServiceSummaryEstimatedArrival();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Arrival', $data)) {
            $object->setArrival($this->denormalizer->denormalize($data['Arrival'], 'BesmartandPro\\UpsApi\\Generated\\Model\\EstimatedArrivalArrival', 'json', $context));
            unset($data['Arrival']);
        }
        if (\array_key_exists('BusinessDaysInTransit', $data)) {
            $object->setBusinessDaysInTransit($data['BusinessDaysInTransit']);
            unset($data['BusinessDaysInTransit']);
        }
        if (\array_key_exists('Pickup', $data)) {
            $object->setPickup($this->denormalizer->denormalize($data['Pickup'], 'BesmartandPro\\UpsApi\\Generated\\Model\\EstimatedArrivalPickup', 'json', $context));
            unset($data['Pickup']);
        }
        if (\array_key_exists('DayOfWeek', $data)) {
            $object->setDayOfWeek($data['DayOfWeek']);
            unset($data['DayOfWeek']);
        }
        if (\array_key_exists('CustomerCenterCutoff', $data)) {
            $object->setCustomerCenterCutoff($data['CustomerCenterCutoff']);
            unset($data['CustomerCenterCutoff']);
        }
        if (\array_key_exists('DelayCount', $data)) {
            $object->setDelayCount($data['DelayCount']);
            unset($data['DelayCount']);
        }
        if (\array_key_exists('HolidayCount', $data)) {
            $object->setHolidayCount($data['HolidayCount']);
            unset($data['HolidayCount']);
        }
        if (\array_key_exists('RestDays', $data)) {
            $object->setRestDays($data['RestDays']);
            unset($data['RestDays']);
        }
        if (\array_key_exists('TotalTransitDays', $data)) {
            $object->setTotalTransitDays($data['TotalTransitDays']);
            unset($data['TotalTransitDays']);
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
        $data['Arrival'] = $this->normalizer->normalize($object->getArrival(), 'json', $context);
        $data['BusinessDaysInTransit'] = $object->getBusinessDaysInTransit();
        $data['Pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
        $data['DayOfWeek'] = $object->getDayOfWeek();
        if ($object->isInitialized('customerCenterCutoff') && null !== $object->getCustomerCenterCutoff()) {
            $data['CustomerCenterCutoff'] = $object->getCustomerCenterCutoff();
        }
        if ($object->isInitialized('delayCount') && null !== $object->getDelayCount()) {
            $data['DelayCount'] = $object->getDelayCount();
        }
        if ($object->isInitialized('holidayCount') && null !== $object->getHolidayCount()) {
            $data['HolidayCount'] = $object->getHolidayCount();
        }
        if ($object->isInitialized('restDays') && null !== $object->getRestDays()) {
            $data['RestDays'] = $object->getRestDays();
        }
        if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
            $data['TotalTransitDays'] = $object->getTotalTransitDays();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ServiceSummaryEstimatedArrival' => false);
    }
}