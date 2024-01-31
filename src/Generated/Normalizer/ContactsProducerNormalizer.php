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
class ContactsProducerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\ContactsProducer';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\ContactsProducer';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\ContactsProducer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Option', $data)) {
            $object->setOption($data['Option']);
            unset($data['Option']);
        }
        if (\array_key_exists('CompanyName', $data)) {
            $object->setCompanyName($data['CompanyName']);
            unset($data['CompanyName']);
        }
        if (\array_key_exists('TaxIdentificationNumber', $data)) {
            $object->setTaxIdentificationNumber($data['TaxIdentificationNumber']);
            unset($data['TaxIdentificationNumber']);
        }
        if (\array_key_exists('Address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['Address'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ProducerAddress', 'json', $context));
            unset($data['Address']);
        }
        if (\array_key_exists('AttentionName', $data)) {
            $object->setAttentionName($data['AttentionName']);
            unset($data['AttentionName']);
        }
        if (\array_key_exists('Phone', $data)) {
            $object->setPhone($this->denormalizer->denormalize($data['Phone'], 'BesmartandPro\\UpsApi\\Generated\\Model\\ProducerPhone', 'json', $context));
            unset($data['Phone']);
        }
        if (\array_key_exists('EMailAddress', $data)) {
            $object->setEMailAddress($data['EMailAddress']);
            unset($data['EMailAddress']);
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
        if ($object->isInitialized('option') && null !== $object->getOption()) {
            $data['Option'] = $object->getOption();
        }
        if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
            $data['CompanyName'] = $object->getCompanyName();
        }
        if ($object->isInitialized('taxIdentificationNumber') && null !== $object->getTaxIdentificationNumber()) {
            $data['TaxIdentificationNumber'] = $object->getTaxIdentificationNumber();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['Address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if ($object->isInitialized('attentionName') && null !== $object->getAttentionName()) {
            $data['AttentionName'] = $object->getAttentionName();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['Phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
        }
        if ($object->isInitialized('eMailAddress') && null !== $object->getEMailAddress()) {
            $data['EMailAddress'] = $object->getEMailAddress();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\ContactsProducer' => false);
    }
}