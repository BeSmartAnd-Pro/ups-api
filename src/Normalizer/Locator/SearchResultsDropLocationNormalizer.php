<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer\Locator;

use BesmartandPro\UpsApi\Generated\Normalizer\SearchResultsDropLocationNormalizer as BaseNormalizer;

class SearchResultsDropLocationNormalizer extends BaseNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if ($data === null || is_array($data) === false) {
            return parent::denormalize($data, $class, $format, $context);
        }

        // Force attributes to always be an array even when the API returns a single value
        if (isset($data['PhoneNumber']) && ! is_array($data['PhoneNumber'])) {
            $data['PhoneNumber'] = [$data['PhoneNumber']];
        }
        
        if (isset($data['LocationAttribute']) && ! array_is_list($data['LocationAttribute'])) {
            $data['LocationAttribute'] = [$data['LocationAttribute']];
        }
        
        if (isset($data['SpecialInstructions']) && ! array_is_list($data['SpecialInstructions'])) {
            $data['SpecialInstructions'] = [$data['SpecialInstructions']];
        }
        
        if (isset($data['LatestGroundDropOffTime']) && ! is_array($data['LatestGroundDropOffTime'])) {
            $data['LatestGroundDropOffTime'] = [$data['LatestGroundDropOffTime']];
        }
        
        if (isset($data['LatestAirDropOffTime']) && ! is_array($data['LatestAirDropOffTime'])) {
            $data['LatestAirDropOffTime'] = [$data['LatestAirDropOffTime']];
        }
        
        if (isset($data['Disclaimer']) && ! is_array($data['Disclaimer'])) {
            $data['Disclaimer'] = [$data['Disclaimer']];
        }
        
        if (isset($data['LocalizedInstruction']) && ! array_is_list($data['LocalizedInstruction'])) {
            $data['LocalizedInstruction'] = [$data['LocalizedInstruction']];
        }
        
        if (isset($data['PromotionInformation']) && ! array_is_list($data['PromotionInformation'])) {
            $data['PromotionInformation'] = [$data['PromotionInformation']];
        }
        
        return parent::denormalize($data, $class, $format, $context);
    }
}
