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
class DropLocationAddressKeyFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\DropLocationAddressKeyFormat';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\DropLocationAddressKeyFormat';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\DropLocationAddressKeyFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ConsigneeName', $data)) {
            $object->setConsigneeName($data['ConsigneeName']);
            unset($data['ConsigneeName']);
        }
        if (\array_key_exists('AddressLine', $data)) {
            $object->setAddressLine($data['AddressLine']);
            unset($data['AddressLine']);
        }
        if (\array_key_exists('PoliticalDivision3', $data)) {
            $object->setPoliticalDivision3($data['PoliticalDivision3']);
            unset($data['PoliticalDivision3']);
        }
        if (\array_key_exists('PoliticalDivision2', $data)) {
            $object->setPoliticalDivision2($data['PoliticalDivision2']);
            unset($data['PoliticalDivision2']);
        }
        if (\array_key_exists('PoliticalDivision1', $data)) {
            $object->setPoliticalDivision1($data['PoliticalDivision1']);
            unset($data['PoliticalDivision1']);
        }
        if (\array_key_exists('PostcodePrimaryLow', $data)) {
            $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
            unset($data['PostcodePrimaryLow']);
        }
        if (\array_key_exists('PostcodeExtendedLow', $data)) {
            $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
            unset($data['PostcodeExtendedLow']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
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
        if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
            $data['ConsigneeName'] = $object->getConsigneeName();
        }
        $data['AddressLine'] = $object->getAddressLine();
        if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
            $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
        }
        $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
        $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
        $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
        if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
            $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
        }
        $data['CountryCode'] = $object->getCountryCode();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\DropLocationAddressKeyFormat' => false);
    }
}