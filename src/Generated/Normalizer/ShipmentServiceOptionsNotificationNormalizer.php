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
class ShipmentServiceOptionsNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsNotification';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsNotification';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ShipmentServiceOptionsNotification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NotificationCode', $data)) {
            $object->setNotificationCode($data['NotificationCode']);
            unset($data['NotificationCode']);
        }
        if (\array_key_exists('EMail', $data)) {
            $object->setEMail($this->denormalizer->denormalize($data['EMail'], 'BesmartandPro\\UpsApi\\Generated\\Model\\NotificationEMail', 'json', $context));
            unset($data['EMail']);
        }
        if (\array_key_exists('VoiceMessage', $data)) {
            $object->setVoiceMessage($this->denormalizer->denormalize($data['VoiceMessage'], 'BesmartandPro\\UpsApi\\Generated\\Model\\NotificationVoiceMessage', 'json', $context));
            unset($data['VoiceMessage']);
        }
        if (\array_key_exists('TextMessage', $data)) {
            $object->setTextMessage($this->denormalizer->denormalize($data['TextMessage'], 'BesmartandPro\\UpsApi\\Generated\\Model\\NotificationTextMessage', 'json', $context));
            unset($data['TextMessage']);
        }
        if (\array_key_exists('Locale', $data)) {
            $object->setLocale($this->denormalizer->denormalize($data['Locale'], 'BesmartandPro\\UpsApi\\Generated\\Model\\NotificationLocale', 'json', $context));
            unset($data['Locale']);
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
        $data['NotificationCode'] = $object->getNotificationCode();
        $data['EMail'] = $this->normalizer->normalize($object->getEMail(), 'json', $context);
        if ($object->isInitialized('voiceMessage') && null !== $object->getVoiceMessage()) {
            $data['VoiceMessage'] = $this->normalizer->normalize($object->getVoiceMessage(), 'json', $context);
        }
        if ($object->isInitialized('textMessage') && null !== $object->getTextMessage()) {
            $data['TextMessage'] = $this->normalizer->normalize($object->getTextMessage(), 'json', $context);
        }
        if ($object->isInitialized('locale') && null !== $object->getLocale()) {
            $data['Locale'] = $this->normalizer->normalize($object->getLocale(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ShipmentServiceOptionsNotification' => false);
    }
}