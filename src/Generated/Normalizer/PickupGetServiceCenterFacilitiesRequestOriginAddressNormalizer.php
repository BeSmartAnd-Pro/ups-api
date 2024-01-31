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
class PickupGetServiceCenterFacilitiesRequestOriginAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\PickupGetServiceCenterFacilitiesRequestOriginAddress';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\PickupGetServiceCenterFacilitiesRequestOriginAddress';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\PickupGetServiceCenterFacilitiesRequestOriginAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('StreetAddress', $data)) {
            $object->setStreetAddress($data['StreetAddress']);
            unset($data['StreetAddress']);
        }
        if (\array_key_exists('City', $data)) {
            $object->setCity($data['City']);
            unset($data['City']);
        }
        if (\array_key_exists('StateProvince', $data)) {
            $object->setStateProvince($data['StateProvince']);
            unset($data['StateProvince']);
        }
        if (\array_key_exists('PostalCode', $data)) {
            $object->setPostalCode($data['PostalCode']);
            unset($data['PostalCode']);
        }
        if (\array_key_exists('CountryCode', $data)) {
            $object->setCountryCode($data['CountryCode']);
            unset($data['CountryCode']);
        }
        if (\array_key_exists('OriginSearchCriteria', $data)) {
            $object->setOriginSearchCriteria($this->denormalizer->denormalize($data['OriginSearchCriteria'], 'BesmartandPro\\UpsApi\\Generated\\Model\\OriginAddressOriginSearchCriteria', 'json', $context));
            unset($data['OriginSearchCriteria']);
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
        if ($object->isInitialized('streetAddress') && null !== $object->getStreetAddress()) {
            $data['StreetAddress'] = $object->getStreetAddress();
        }
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['City'] = $object->getCity();
        }
        if ($object->isInitialized('stateProvince') && null !== $object->getStateProvince()) {
            $data['StateProvince'] = $object->getStateProvince();
        }
        if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
            $data['PostalCode'] = $object->getPostalCode();
        }
        $data['CountryCode'] = $object->getCountryCode();
        if ($object->isInitialized('originSearchCriteria') && null !== $object->getOriginSearchCriteria()) {
            $data['OriginSearchCriteria'] = $this->normalizer->normalize($object->getOriginSearchCriteria(), 'json', $context);
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\PickupGetServiceCenterFacilitiesRequestOriginAddress' => false);
    }
}