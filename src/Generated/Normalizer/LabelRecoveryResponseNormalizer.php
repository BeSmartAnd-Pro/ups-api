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
class LabelRecoveryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponse';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\LabelRecoveryResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Response', $data)) {
            $object->setResponse($this->denormalizer->denormalize($data['Response'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseResponse', 'json', $context));
            unset($data['Response']);
        }
        if (\array_key_exists('ShipmentIdentificationNumber', $data)) {
            $object->setShipmentIdentificationNumber($data['ShipmentIdentificationNumber']);
            unset($data['ShipmentIdentificationNumber']);
        }
        if (\array_key_exists('LabelResults', $data)) {
            $values = array();
            foreach ($data['LabelResults'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseLabelResults', 'json', $context);
            }
            $object->setLabelResults($values);
            unset($data['LabelResults']);
        }
        if (\array_key_exists('CODTurnInPage', $data)) {
            $object->setCODTurnInPage($this->denormalizer->denormalize($data['CODTurnInPage'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseCODTurnInPage', 'json', $context));
            unset($data['CODTurnInPage']);
        }
        if (\array_key_exists('Form', $data)) {
            $object->setForm($this->denormalizer->denormalize($data['Form'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseForm', 'json', $context));
            unset($data['Form']);
        }
        if (\array_key_exists('HighValueReport', $data)) {
            $object->setHighValueReport($this->denormalizer->denormalize($data['HighValueReport'], 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseHighValueReport', 'json', $context));
            unset($data['HighValueReport']);
        }
        if (\array_key_exists('TrackingCandidate', $data)) {
            $values_1 = array();
            foreach ($data['TrackingCandidate'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponseTrackingCandidate', 'json', $context);
            }
            $object->setTrackingCandidate($values_1);
            unset($data['TrackingCandidate']);
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
        $data['Response'] = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        if ($object->isInitialized('shipmentIdentificationNumber') && null !== $object->getShipmentIdentificationNumber()) {
            $data['ShipmentIdentificationNumber'] = $object->getShipmentIdentificationNumber();
        }
        $values = array();
        foreach ($object->getLabelResults() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['LabelResults'] = $values;
        if ($object->isInitialized('cODTurnInPage') && null !== $object->getCODTurnInPage()) {
            $data['CODTurnInPage'] = $this->normalizer->normalize($object->getCODTurnInPage(), 'json', $context);
        }
        if ($object->isInitialized('form') && null !== $object->getForm()) {
            $data['Form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
        }
        if ($object->isInitialized('highValueReport') && null !== $object->getHighValueReport()) {
            $data['HighValueReport'] = $this->normalizer->normalize($object->getHighValueReport(), 'json', $context);
        }
        if ($object->isInitialized('trackingCandidate') && null !== $object->getTrackingCandidate()) {
            $values_1 = array();
            foreach ($object->getTrackingCandidate() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['TrackingCandidate'] = $values_1;
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\LabelRecoveryResponse' => false);
    }
}