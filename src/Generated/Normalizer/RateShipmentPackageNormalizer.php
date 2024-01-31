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
class RateShipmentPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'BesmartandPro\\UpsApi\\Generated\\Model\\RateShipmentPackage';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'BesmartandPro\\UpsApi\\Generated\\Model\\RateShipmentPackage';
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
        $object = new \BesmartandPro\UpsApi\Generated\Model\RateShipmentPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PackagingType', $data)) {
            $object->setPackagingType($this->denormalizer->denormalize($data['PackagingType'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackagePackagingType', 'json', $context));
            unset($data['PackagingType']);
        }
        if (\array_key_exists('Dimensions', $data)) {
            $object->setDimensions($this->denormalizer->denormalize($data['Dimensions'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageDimensions', 'json', $context));
            unset($data['Dimensions']);
        }
        if (\array_key_exists('DimWeight', $data)) {
            $object->setDimWeight($this->denormalizer->denormalize($data['DimWeight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageDimWeight', 'json', $context));
            unset($data['DimWeight']);
        }
        if (\array_key_exists('PackageWeight', $data)) {
            $object->setPackageWeight($this->denormalizer->denormalize($data['PackageWeight'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackagePackageWeight', 'json', $context));
            unset($data['PackageWeight']);
        }
        if (\array_key_exists('Commodity', $data)) {
            $object->setCommodity($this->denormalizer->denormalize($data['Commodity'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageCommodity', 'json', $context));
            unset($data['Commodity']);
        }
        if (\array_key_exists('LargePackageIndicator', $data)) {
            $object->setLargePackageIndicator($data['LargePackageIndicator']);
            unset($data['LargePackageIndicator']);
        }
        if (\array_key_exists('PackageServiceOptions', $data)) {
            $object->setPackageServiceOptions($this->denormalizer->denormalize($data['PackageServiceOptions'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RatePackagePackageServiceOptions', 'json', $context));
            unset($data['PackageServiceOptions']);
        }
        if (\array_key_exists('AdditionalHandlingIndicator', $data)) {
            $object->setAdditionalHandlingIndicator($data['AdditionalHandlingIndicator']);
            unset($data['AdditionalHandlingIndicator']);
        }
        if (\array_key_exists('SimpleRate', $data)) {
            $object->setSimpleRate($this->denormalizer->denormalize($data['SimpleRate'], 'BesmartandPro\\UpsApi\\Generated\\Model\\PackageSimpleRate', 'json', $context));
            unset($data['SimpleRate']);
        }
        if (\array_key_exists('UPSPremier', $data)) {
            $object->setUPSPremier($this->denormalizer->denormalize($data['UPSPremier'], 'BesmartandPro\\UpsApi\\Generated\\Model\\RatePackageUPSPremier', 'json', $context));
            unset($data['UPSPremier']);
        }
        if (\array_key_exists('OversizeIndicator', $data)) {
            $object->setOversizeIndicator($data['OversizeIndicator']);
            unset($data['OversizeIndicator']);
        }
        if (\array_key_exists('MinimumBillableWeightIndicator', $data)) {
            $object->setMinimumBillableWeightIndicator($data['MinimumBillableWeightIndicator']);
            unset($data['MinimumBillableWeightIndicator']);
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
        if ($object->isInitialized('packagingType') && null !== $object->getPackagingType()) {
            $data['PackagingType'] = $this->normalizer->normalize($object->getPackagingType(), 'json', $context);
        }
        if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
            $data['Dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
        }
        if ($object->isInitialized('dimWeight') && null !== $object->getDimWeight()) {
            $data['DimWeight'] = $this->normalizer->normalize($object->getDimWeight(), 'json', $context);
        }
        if ($object->isInitialized('packageWeight') && null !== $object->getPackageWeight()) {
            $data['PackageWeight'] = $this->normalizer->normalize($object->getPackageWeight(), 'json', $context);
        }
        if ($object->isInitialized('commodity') && null !== $object->getCommodity()) {
            $data['Commodity'] = $this->normalizer->normalize($object->getCommodity(), 'json', $context);
        }
        if ($object->isInitialized('largePackageIndicator') && null !== $object->getLargePackageIndicator()) {
            $data['LargePackageIndicator'] = $object->getLargePackageIndicator();
        }
        if ($object->isInitialized('packageServiceOptions') && null !== $object->getPackageServiceOptions()) {
            $data['PackageServiceOptions'] = $this->normalizer->normalize($object->getPackageServiceOptions(), 'json', $context);
        }
        if ($object->isInitialized('additionalHandlingIndicator') && null !== $object->getAdditionalHandlingIndicator()) {
            $data['AdditionalHandlingIndicator'] = $object->getAdditionalHandlingIndicator();
        }
        if ($object->isInitialized('simpleRate') && null !== $object->getSimpleRate()) {
            $data['SimpleRate'] = $this->normalizer->normalize($object->getSimpleRate(), 'json', $context);
        }
        if ($object->isInitialized('uPSPremier') && null !== $object->getUPSPremier()) {
            $data['UPSPremier'] = $this->normalizer->normalize($object->getUPSPremier(), 'json', $context);
        }
        if ($object->isInitialized('oversizeIndicator') && null !== $object->getOversizeIndicator()) {
            $data['OversizeIndicator'] = $object->getOversizeIndicator();
        }
        if ($object->isInitialized('minimumBillableWeightIndicator') && null !== $object->getMinimumBillableWeightIndicator()) {
            $data['MinimumBillableWeightIndicator'] = $object->getMinimumBillableWeightIndicator();
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
        return array('BesmartandPro\\UpsApi\\Generated\\Model\\RateShipmentPackage' => false);
    }
}