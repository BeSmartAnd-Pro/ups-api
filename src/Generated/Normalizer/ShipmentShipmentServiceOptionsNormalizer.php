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
class ShipmentShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentShipmentServiceOptions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentShipmentServiceOptions';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ShipmentShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SaturdayDeliveryIndicator', $data)) {
            $object->setSaturdayDeliveryIndicator($data['SaturdayDeliveryIndicator']);
            unset($data['SaturdayDeliveryIndicator']);
        }
        if (\array_key_exists('SaturdayPickupIndicator', $data)) {
            $object->setSaturdayPickupIndicator($data['SaturdayPickupIndicator']);
            unset($data['SaturdayPickupIndicator']);
        }
        if (\array_key_exists('COD', $data)) {
            $object->setCOD($this->denormalizer->denormalize($data['COD'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsCOD', 'json', $context));
            unset($data['COD']);
        }
        if (\array_key_exists('AccessPointCOD', $data)) {
            $object->setAccessPointCOD($this->denormalizer->denormalize($data['AccessPointCOD'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsAccessPointCOD', 'json', $context));
            unset($data['AccessPointCOD']);
        }
        if (\array_key_exists('DeliverToAddresseeOnlyIndicator', $data)) {
            $object->setDeliverToAddresseeOnlyIndicator($data['DeliverToAddresseeOnlyIndicator']);
            unset($data['DeliverToAddresseeOnlyIndicator']);
        }
        if (\array_key_exists('DirectDeliveryOnlyIndicator', $data)) {
            $object->setDirectDeliveryOnlyIndicator($data['DirectDeliveryOnlyIndicator']);
            unset($data['DirectDeliveryOnlyIndicator']);
        }
        if (\array_key_exists('Notification', $data)) {
            $values = array();
            foreach ($data['Notification'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsNotification', 'json', $context);
            }
            $object->setNotification($values);
            unset($data['Notification']);
        }
        if (\array_key_exists('LabelDelivery', $data)) {
            $object->setLabelDelivery($this->denormalizer->denormalize($data['LabelDelivery'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsLabelDelivery', 'json', $context));
            unset($data['LabelDelivery']);
        }
        if (\array_key_exists('InternationalForms', $data)) {
            $object->setInternationalForms($this->denormalizer->denormalize($data['InternationalForms'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsInternationalForms', 'json', $context));
            unset($data['InternationalForms']);
        }
        if (\array_key_exists('DeliveryConfirmation', $data)) {
            $object->setDeliveryConfirmation($this->denormalizer->denormalize($data['DeliveryConfirmation'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsDeliveryConfirmation', 'json', $context));
            unset($data['DeliveryConfirmation']);
        }
        if (\array_key_exists('ReturnOfDocumentIndicator', $data)) {
            $object->setReturnOfDocumentIndicator($data['ReturnOfDocumentIndicator']);
            unset($data['ReturnOfDocumentIndicator']);
        }
        if (\array_key_exists('ImportControlIndicator', $data)) {
            $object->setImportControlIndicator($data['ImportControlIndicator']);
            unset($data['ImportControlIndicator']);
        }
        if (\array_key_exists('LabelMethod', $data)) {
            $object->setLabelMethod($this->denormalizer->denormalize($data['LabelMethod'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsLabelMethod', 'json', $context));
            unset($data['LabelMethod']);
        }
        if (\array_key_exists('CommercialInvoiceRemovalIndicator', $data)) {
            $object->setCommercialInvoiceRemovalIndicator($data['CommercialInvoiceRemovalIndicator']);
            unset($data['CommercialInvoiceRemovalIndicator']);
        }
        if (\array_key_exists('UPScarbonneutralIndicator', $data)) {
            $object->setUPScarbonneutralIndicator($data['UPScarbonneutralIndicator']);
            unset($data['UPScarbonneutralIndicator']);
        }
        if (\array_key_exists('PreAlertNotification', $data)) {
            $values_1 = array();
            foreach ($data['PreAlertNotification'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsPreAlertNotification', 'json', $context);
            }
            $object->setPreAlertNotification($values_1);
            unset($data['PreAlertNotification']);
        }
        if (\array_key_exists('ExchangeForwardIndicator', $data)) {
            $object->setExchangeForwardIndicator($data['ExchangeForwardIndicator']);
            unset($data['ExchangeForwardIndicator']);
        }
        if (\array_key_exists('HoldForPickupIndicator', $data)) {
            $object->setHoldForPickupIndicator($data['HoldForPickupIndicator']);
            unset($data['HoldForPickupIndicator']);
        }
        if (\array_key_exists('DropoffAtUPSFacilityIndicator', $data)) {
            $object->setDropoffAtUPSFacilityIndicator($data['DropoffAtUPSFacilityIndicator']);
            unset($data['DropoffAtUPSFacilityIndicator']);
        }
        if (\array_key_exists('LiftGateForPickUpIndicator', $data)) {
            $object->setLiftGateForPickUpIndicator($data['LiftGateForPickUpIndicator']);
            unset($data['LiftGateForPickUpIndicator']);
        }
        if (\array_key_exists('LiftGateForDeliveryIndicator', $data)) {
            $object->setLiftGateForDeliveryIndicator($data['LiftGateForDeliveryIndicator']);
            unset($data['LiftGateForDeliveryIndicator']);
        }
        if (\array_key_exists('SDLShipmentIndicator', $data)) {
            $object->setSDLShipmentIndicator($data['SDLShipmentIndicator']);
            unset($data['SDLShipmentIndicator']);
        }
        if (\array_key_exists('EPRAReleaseCode', $data)) {
            $object->setEPRAReleaseCode($data['EPRAReleaseCode']);
            unset($data['EPRAReleaseCode']);
        }
        if (\array_key_exists('RestrictedArticles', $data)) {
            $object->setRestrictedArticles($this->denormalizer->denormalize($data['RestrictedArticles'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsRestrictedArticles', 'json', $context));
            unset($data['RestrictedArticles']);
        }
        if (\array_key_exists('InsideDelivery', $data)) {
            $object->setInsideDelivery($data['InsideDelivery']);
            unset($data['InsideDelivery']);
        }
        if (\array_key_exists('ItemDisposal', $data)) {
            $object->setItemDisposal($data['ItemDisposal']);
            unset($data['ItemDisposal']);
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
        if ($object->isInitialized('saturdayDeliveryIndicator') && null !== $object->getSaturdayDeliveryIndicator()) {
            $data['SaturdayDeliveryIndicator'] = $object->getSaturdayDeliveryIndicator();
        }
        if ($object->isInitialized('saturdayPickupIndicator') && null !== $object->getSaturdayPickupIndicator()) {
            $data['SaturdayPickupIndicator'] = $object->getSaturdayPickupIndicator();
        }
        if ($object->isInitialized('cOD') && null !== $object->getCOD()) {
            $data['COD'] = $this->normalizer->normalize($object->getCOD(), 'json', $context);
        }
        if ($object->isInitialized('accessPointCOD') && null !== $object->getAccessPointCOD()) {
            $data['AccessPointCOD'] = $this->normalizer->normalize($object->getAccessPointCOD(), 'json', $context);
        }
        if ($object->isInitialized('deliverToAddresseeOnlyIndicator') && null !== $object->getDeliverToAddresseeOnlyIndicator()) {
            $data['DeliverToAddresseeOnlyIndicator'] = $object->getDeliverToAddresseeOnlyIndicator();
        }
        if ($object->isInitialized('directDeliveryOnlyIndicator') && null !== $object->getDirectDeliveryOnlyIndicator()) {
            $data['DirectDeliveryOnlyIndicator'] = $object->getDirectDeliveryOnlyIndicator();
        }
        if ($object->isInitialized('notification') && null !== $object->getNotification()) {
            $values = array();
            foreach ($object->getNotification() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Notification'] = $values;
        }
        if ($object->isInitialized('labelDelivery') && null !== $object->getLabelDelivery()) {
            $data['LabelDelivery'] = $this->normalizer->normalize($object->getLabelDelivery(), 'json', $context);
        }
        if ($object->isInitialized('internationalForms') && null !== $object->getInternationalForms()) {
            $data['InternationalForms'] = $this->normalizer->normalize($object->getInternationalForms(), 'json', $context);
        }
        if ($object->isInitialized('deliveryConfirmation') && null !== $object->getDeliveryConfirmation()) {
            $data['DeliveryConfirmation'] = $this->normalizer->normalize($object->getDeliveryConfirmation(), 'json', $context);
        }
        if ($object->isInitialized('returnOfDocumentIndicator') && null !== $object->getReturnOfDocumentIndicator()) {
            $data['ReturnOfDocumentIndicator'] = $object->getReturnOfDocumentIndicator();
        }
        if ($object->isInitialized('importControlIndicator') && null !== $object->getImportControlIndicator()) {
            $data['ImportControlIndicator'] = $object->getImportControlIndicator();
        }
        if ($object->isInitialized('labelMethod') && null !== $object->getLabelMethod()) {
            $data['LabelMethod'] = $this->normalizer->normalize($object->getLabelMethod(), 'json', $context);
        }
        if ($object->isInitialized('commercialInvoiceRemovalIndicator') && null !== $object->getCommercialInvoiceRemovalIndicator()) {
            $data['CommercialInvoiceRemovalIndicator'] = $object->getCommercialInvoiceRemovalIndicator();
        }
        if ($object->isInitialized('uPScarbonneutralIndicator') && null !== $object->getUPScarbonneutralIndicator()) {
            $data['UPScarbonneutralIndicator'] = $object->getUPScarbonneutralIndicator();
        }
        if ($object->isInitialized('preAlertNotification') && null !== $object->getPreAlertNotification()) {
            $values_1 = array();
            foreach ($object->getPreAlertNotification() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['PreAlertNotification'] = $values_1;
        }
        if ($object->isInitialized('exchangeForwardIndicator') && null !== $object->getExchangeForwardIndicator()) {
            $data['ExchangeForwardIndicator'] = $object->getExchangeForwardIndicator();
        }
        if ($object->isInitialized('holdForPickupIndicator') && null !== $object->getHoldForPickupIndicator()) {
            $data['HoldForPickupIndicator'] = $object->getHoldForPickupIndicator();
        }
        if ($object->isInitialized('dropoffAtUPSFacilityIndicator') && null !== $object->getDropoffAtUPSFacilityIndicator()) {
            $data['DropoffAtUPSFacilityIndicator'] = $object->getDropoffAtUPSFacilityIndicator();
        }
        if ($object->isInitialized('liftGateForPickUpIndicator') && null !== $object->getLiftGateForPickUpIndicator()) {
            $data['LiftGateForPickUpIndicator'] = $object->getLiftGateForPickUpIndicator();
        }
        if ($object->isInitialized('liftGateForDeliveryIndicator') && null !== $object->getLiftGateForDeliveryIndicator()) {
            $data['LiftGateForDeliveryIndicator'] = $object->getLiftGateForDeliveryIndicator();
        }
        if ($object->isInitialized('sDLShipmentIndicator') && null !== $object->getSDLShipmentIndicator()) {
            $data['SDLShipmentIndicator'] = $object->getSDLShipmentIndicator();
        }
        if ($object->isInitialized('ePRAReleaseCode') && null !== $object->getEPRAReleaseCode()) {
            $data['EPRAReleaseCode'] = $object->getEPRAReleaseCode();
        }
        if ($object->isInitialized('restrictedArticles') && null !== $object->getRestrictedArticles()) {
            $data['RestrictedArticles'] = $this->normalizer->normalize($object->getRestrictedArticles(), 'json', $context);
        }
        if ($object->isInitialized('insideDelivery') && null !== $object->getInsideDelivery()) {
            $data['InsideDelivery'] = $object->getInsideDelivery();
        }
        if ($object->isInitialized('itemDisposal') && null !== $object->getItemDisposal()) {
            $data['ItemDisposal'] = $object->getItemDisposal();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentShipmentServiceOptions' => false);
    }
}