<?php

namespace BesmartandPro\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use BesmartandPro\Ups\Api\Runtime\Normalizer\CheckArray;
use BesmartandPro\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RateShipmentServiceOptionsRestrictedArticlesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\RateShipmentServiceOptionsRestrictedArticles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AlcoholicBeveragesIndicator', $data)) {
                $object->setAlcoholicBeveragesIndicator($data['AlcoholicBeveragesIndicator']);
                unset($data['AlcoholicBeveragesIndicator']);
            }
            if (\array_key_exists('DiagnosticSpecimensIndicator', $data)) {
                $object->setDiagnosticSpecimensIndicator($data['DiagnosticSpecimensIndicator']);
                unset($data['DiagnosticSpecimensIndicator']);
            }
            if (\array_key_exists('PerishablesIndicator', $data)) {
                $object->setPerishablesIndicator($data['PerishablesIndicator']);
                unset($data['PerishablesIndicator']);
            }
            if (\array_key_exists('PlantsIndicator', $data)) {
                $object->setPlantsIndicator($data['PlantsIndicator']);
                unset($data['PlantsIndicator']);
            }
            if (\array_key_exists('SeedsIndicator', $data)) {
                $object->setSeedsIndicator($data['SeedsIndicator']);
                unset($data['SeedsIndicator']);
            }
            if (\array_key_exists('SpecialExceptionsIndicator', $data)) {
                $object->setSpecialExceptionsIndicator($data['SpecialExceptionsIndicator']);
                unset($data['SpecialExceptionsIndicator']);
            }
            if (\array_key_exists('TobaccoIndicator', $data)) {
                $object->setTobaccoIndicator($data['TobaccoIndicator']);
                unset($data['TobaccoIndicator']);
            }
            if (\array_key_exists('ECigarettesIndicator', $data)) {
                $object->setECigarettesIndicator($data['ECigarettesIndicator']);
                unset($data['ECigarettesIndicator']);
            }
            if (\array_key_exists('HempCBDIndicator', $data)) {
                $object->setHempCBDIndicator($data['HempCBDIndicator']);
                unset($data['HempCBDIndicator']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('alcoholicBeveragesIndicator') && null !== $object->getAlcoholicBeveragesIndicator()) {
                $data['AlcoholicBeveragesIndicator'] = $object->getAlcoholicBeveragesIndicator();
            }
            if ($object->isInitialized('diagnosticSpecimensIndicator') && null !== $object->getDiagnosticSpecimensIndicator()) {
                $data['DiagnosticSpecimensIndicator'] = $object->getDiagnosticSpecimensIndicator();
            }
            if ($object->isInitialized('perishablesIndicator') && null !== $object->getPerishablesIndicator()) {
                $data['PerishablesIndicator'] = $object->getPerishablesIndicator();
            }
            if ($object->isInitialized('plantsIndicator') && null !== $object->getPlantsIndicator()) {
                $data['PlantsIndicator'] = $object->getPlantsIndicator();
            }
            if ($object->isInitialized('seedsIndicator') && null !== $object->getSeedsIndicator()) {
                $data['SeedsIndicator'] = $object->getSeedsIndicator();
            }
            if ($object->isInitialized('specialExceptionsIndicator') && null !== $object->getSpecialExceptionsIndicator()) {
                $data['SpecialExceptionsIndicator'] = $object->getSpecialExceptionsIndicator();
            }
            if ($object->isInitialized('tobaccoIndicator') && null !== $object->getTobaccoIndicator()) {
                $data['TobaccoIndicator'] = $object->getTobaccoIndicator();
            }
            if ($object->isInitialized('eCigarettesIndicator') && null !== $object->getECigarettesIndicator()) {
                $data['ECigarettesIndicator'] = $object->getECigarettesIndicator();
            }
            if ($object->isInitialized('hempCBDIndicator') && null !== $object->getHempCBDIndicator()) {
                $data['HempCBDIndicator'] = $object->getHempCBDIndicator();
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
            return ['BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles' => false];
        }
    }
} else {
    class RateShipmentServiceOptionsRestrictedArticlesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \BesmartandPro\Ups\Api\Model\RateShipmentServiceOptionsRestrictedArticles();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AlcoholicBeveragesIndicator', $data)) {
                $object->setAlcoholicBeveragesIndicator($data['AlcoholicBeveragesIndicator']);
                unset($data['AlcoholicBeveragesIndicator']);
            }
            if (\array_key_exists('DiagnosticSpecimensIndicator', $data)) {
                $object->setDiagnosticSpecimensIndicator($data['DiagnosticSpecimensIndicator']);
                unset($data['DiagnosticSpecimensIndicator']);
            }
            if (\array_key_exists('PerishablesIndicator', $data)) {
                $object->setPerishablesIndicator($data['PerishablesIndicator']);
                unset($data['PerishablesIndicator']);
            }
            if (\array_key_exists('PlantsIndicator', $data)) {
                $object->setPlantsIndicator($data['PlantsIndicator']);
                unset($data['PlantsIndicator']);
            }
            if (\array_key_exists('SeedsIndicator', $data)) {
                $object->setSeedsIndicator($data['SeedsIndicator']);
                unset($data['SeedsIndicator']);
            }
            if (\array_key_exists('SpecialExceptionsIndicator', $data)) {
                $object->setSpecialExceptionsIndicator($data['SpecialExceptionsIndicator']);
                unset($data['SpecialExceptionsIndicator']);
            }
            if (\array_key_exists('TobaccoIndicator', $data)) {
                $object->setTobaccoIndicator($data['TobaccoIndicator']);
                unset($data['TobaccoIndicator']);
            }
            if (\array_key_exists('ECigarettesIndicator', $data)) {
                $object->setECigarettesIndicator($data['ECigarettesIndicator']);
                unset($data['ECigarettesIndicator']);
            }
            if (\array_key_exists('HempCBDIndicator', $data)) {
                $object->setHempCBDIndicator($data['HempCBDIndicator']);
                unset($data['HempCBDIndicator']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('alcoholicBeveragesIndicator') && null !== $object->getAlcoholicBeveragesIndicator()) {
                $data['AlcoholicBeveragesIndicator'] = $object->getAlcoholicBeveragesIndicator();
            }
            if ($object->isInitialized('diagnosticSpecimensIndicator') && null !== $object->getDiagnosticSpecimensIndicator()) {
                $data['DiagnosticSpecimensIndicator'] = $object->getDiagnosticSpecimensIndicator();
            }
            if ($object->isInitialized('perishablesIndicator') && null !== $object->getPerishablesIndicator()) {
                $data['PerishablesIndicator'] = $object->getPerishablesIndicator();
            }
            if ($object->isInitialized('plantsIndicator') && null !== $object->getPlantsIndicator()) {
                $data['PlantsIndicator'] = $object->getPlantsIndicator();
            }
            if ($object->isInitialized('seedsIndicator') && null !== $object->getSeedsIndicator()) {
                $data['SeedsIndicator'] = $object->getSeedsIndicator();
            }
            if ($object->isInitialized('specialExceptionsIndicator') && null !== $object->getSpecialExceptionsIndicator()) {
                $data['SpecialExceptionsIndicator'] = $object->getSpecialExceptionsIndicator();
            }
            if ($object->isInitialized('tobaccoIndicator') && null !== $object->getTobaccoIndicator()) {
                $data['TobaccoIndicator'] = $object->getTobaccoIndicator();
            }
            if ($object->isInitialized('eCigarettesIndicator') && null !== $object->getECigarettesIndicator()) {
                $data['ECigarettesIndicator'] = $object->getECigarettesIndicator();
            }
            if ($object->isInitialized('hempCBDIndicator') && null !== $object->getHempCBDIndicator()) {
                $data['HempCBDIndicator'] = $object->getHempCBDIndicator();
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
            return ['BesmartandPro\\Ups\\Api\\Model\\RateShipmentServiceOptionsRestrictedArticles' => false];
        }
    }
}