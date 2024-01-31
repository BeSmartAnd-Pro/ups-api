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
class AcceptanceAuditPreCheckResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\AcceptanceAuditPreCheckResponseResponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\AcceptanceAuditPreCheckResponseResponse';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\AcceptanceAuditPreCheckResponseResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ResponseStatus', $data)) {
            $object->setResponseStatus($this->denormalizer->denormalize($data['ResponseStatus'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ResponseResponseStatus', 'json', $context));
            unset($data['ResponseStatus']);
        }
        if (\array_key_exists('Alert', $data)) {
            $values = array();
            foreach ($data['Alert'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BesmartandPro\\UpsApi\\Generated\\Model\\ResponseAlert', 'json', $context);
            }
            $object->setAlert($values);
            unset($data['Alert']);
        }
        if (\array_key_exists('AlertDetail', $data)) {
            $values_1 = array();
            foreach ($data['AlertDetail'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'BesmartandPro\\UpsApi\\Generated\\Model\\ResponseAlertDetail', 'json', $context);
            }
            $object->setAlertDetail($values_1);
            unset($data['AlertDetail']);
        }
        if (\array_key_exists('TransactionReference', $data)) {
            $object->setTransactionReference($this->denormalizer->denormalize($data['TransactionReference'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ResponseTransactionReference', 'json', $context));
            unset($data['TransactionReference']);
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
        $data['ResponseStatus'] = $this->normalizer->normalize($object->getResponseStatus(), 'json', $context);
        if ($object->isInitialized('alert') && null !== $object->getAlert()) {
            $values = array();
            foreach ($object->getAlert() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Alert'] = $values;
        }
        if ($object->isInitialized('alertDetail') && null !== $object->getAlertDetail()) {
            $values_1 = array();
            foreach ($object->getAlertDetail() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['AlertDetail'] = $values_1;
        }
        if ($object->isInitialized('transactionReference') && null !== $object->getTransactionReference()) {
            $data['TransactionReference'] = $this->normalizer->normalize($object->getTransactionReference(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\AcceptanceAuditPreCheckResponseResponse' => false);
    }
}