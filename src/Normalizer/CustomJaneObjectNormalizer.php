<?php

declare(strict_types=1);

namespace BesmartandPro\Ups\Normalizer;

use BesmartandPro\Ups\Api\Model\AcceptanceAuditPreCheckResponse;
use BesmartandPro\Ups\Api\Model\AcceptanceAuditPreCheckResponsePackageResults;
use BesmartandPro\Ups\Api\Model\AcceptanceAuditPreCheckResponseResponse;
use BesmartandPro\Ups\Api\Model\AccessPointInformationBusinessClassificationList;
use BesmartandPro\Ups\Api\Model\AccessPointInformationPrivateNetworkList;
use BesmartandPro\Ups\Api\Model\AlertDetailElementLevelInformation;
use BesmartandPro\Ups\Api\Model\CandidateAddressKeyFormat;
use BesmartandPro\Ups\Api\Model\ChemicalReferenceDataResponse;
use BesmartandPro\Ups\Api\Model\ChemicalReferenceDataResponseChemicalData;
use BesmartandPro\Ups\Api\Model\ChemicalReferenceDataResponseResponse;
use BesmartandPro\Ups\Api\Model\DeleteResponseResponse;
use BesmartandPro\Ups\Api\Model\DeliveryLocationAddressArtifactFormat;
use BesmartandPro\Ups\Api\Model\DropLocationAdditionalComments;
use BesmartandPro\Ups\Api\Model\DropLocationLocationAttribute;
use BesmartandPro\Ups\Api\Model\DropLocationOperatingHours;
use BesmartandPro\Ups\Api\Model\DropLocationServiceOfferingList;
use BesmartandPro\Ups\Api\Model\DropOffFacilitiesAddress;
use BesmartandPro\Ups\Api\Model\ExceptionUpdatedAddress;
use BesmartandPro\Ups\Api\Model\FreightRateResponse;
use BesmartandPro\Ups\Api\Model\FreightRateResponseResponse;
use BesmartandPro\Ups\Api\Model\FreightShipResponseShipmentResults;
use BesmartandPro\Ups\Api\Model\LandedCostResponseShipment;
use BesmartandPro\Ups\Api\Model\LocatorResponseSearchResults;
use BesmartandPro\Ups\Api\Model\ManifestPackage;
use BesmartandPro\Ups\Api\Model\OptionCodeTransportationPickUpSchedule;
use BesmartandPro\Ups\Api\Model\PickupGetPoliticalDivision1ListResponse;
use BesmartandPro\Ups\Api\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation;
use BesmartandPro\Ups\Api\Model\PickupPendingStatusResponse;
use BesmartandPro\Ups\Api\Model\PickupRateResponseRateResult;
use BesmartandPro\Ups\Api\Model\PickupRateResponseResponse;
use BesmartandPro\Ups\Api\Model\PreNotificationResponseResponse;
use BesmartandPro\Ups\Api\Model\PushToImageRepositoryResponseResponse;
use BesmartandPro\Ups\Api\Model\QuantumViewEventsSubscriptionEvents;
use BesmartandPro\Ups\Api\Model\QuantumViewResponseQuantumViewEvents;
use BesmartandPro\Ups\Api\Model\QuantumViewResponseResponse;
use BesmartandPro\Ups\Api\Model\RatedPackageNegotiatedCharges;
use BesmartandPro\Ups\Api\Model\RatedShipmentNegotiatedRateCharges;
use BesmartandPro\Ups\Api\Model\RatedShipmentRatedPackage;
use BesmartandPro\Ups\Api\Model\RateResponse;
use BesmartandPro\Ups\Api\Model\RateResponseRatedShipment;
use BesmartandPro\Ups\Api\Model\RateResponseResponse;
use BesmartandPro\Ups\Api\Model\ResponseError;
use BesmartandPro\Ups\Api\Model\SearchResultsDropLocation;
use BesmartandPro\Ups\Api\Model\ServiceCenterLocationDropOffFacilities;
use BesmartandPro\Ups\Api\Model\ShipmentResponseResponse;
use BesmartandPro\Ups\Api\Model\ShipmentResponseShipmentResults;
use BesmartandPro\Ups\Api\Model\ShipmentResultsDocuments;
use BesmartandPro\Ups\Api\Model\StandardHoursDayOfWeek;
use BesmartandPro\Ups\Api\Model\SubscriptionEventsSubscriptionFile;
use BesmartandPro\Ups\Api\Model\SubscriptionFileDelivery;
use BesmartandPro\Ups\Api\Model\SubscriptionFileException;
use BesmartandPro\Ups\Api\Model\SubscriptionFileGeneric;
use BesmartandPro\Ups\Api\Model\SubscriptionFileManifest;
use BesmartandPro\Ups\Api\Model\SubscriptionFileOrigin;
use BesmartandPro\Ups\Api\Model\UploadResponseFormsHistoryDocumentID;
use BesmartandPro\Ups\Api\Model\UploadResponseResponse;
use BesmartandPro\Ups\Api\Model\XAVResponse;
use BesmartandPro\Ups\Api\Model\XAVResponseCandidate;
use BesmartandPro\Ups\Api\Normalizer\JaneObjectNormalizer;

class CustomJaneObjectNormalizer extends JaneObjectNormalizer
{
    public function __construct()
    {
        $this->normalizers[ResponseError::class] = ResponseErrorNormalizer::class;
        // AddressValidation
        $this->normalizers[CandidateAddressKeyFormat::class] = AddressValidation\CandidateAddressKeyFormatNormalizer::class;
        $this->normalizers[XAVResponse::class] = AddressValidation\XAVResponseNormalizer::class;
        $this->normalizers[XAVResponseCandidate::class] = AddressValidation\XAVResponseCandidateNormalizer::class;
        // DangerousGoods
        $this->normalizers[AcceptanceAuditPreCheckResponse::class] = DangerousGoods\AcceptanceAuditPreCheckResponseNormalizer::class;
        $this->normalizers[AcceptanceAuditPreCheckResponsePackageResults::class] = DangerousGoods\AcceptanceAuditPreCheckResponsePackageResultsNormalizer::class;
        $this->normalizers[AcceptanceAuditPreCheckResponseResponse::class] = DangerousGoods\AcceptanceAuditPreCheckResponseResponseNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponse::class] = DangerousGoods\ChemicalReferenceDataResponseNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponseChemicalData::class] = DangerousGoods\ChemicalReferenceDataResponseChemicalDataNormalizer::class;
        $this->normalizers[ChemicalReferenceDataResponseResponse::class] = DangerousGoods\ChemicalReferenceDataResponseResponseNormalizer::class;
        // LandedCost
        $this->normalizers[LandedCostResponseShipment::class] = LandedCost\LandedCostResponseShipmentNormalizer::class;
        // Locator
        $this->normalizers[AccessPointInformationBusinessClassificationList::class] = Locator\AccessPointInformationBusinessClassificationListNormalizer::class;
        $this->normalizers[AccessPointInformationPrivateNetworkList::class] = Locator\AccessPointInformationPrivateNetworkListNormalizer::class;
        $this->normalizers[DropLocationAdditionalComments::class] = Locator\DropLocationAdditionalCommentsNormalizer::class;
        $this->normalizers[DropLocationLocationAttribute::class] = Locator\DropLocationLocationAttributeNormalizer::class;
        $this->normalizers[DropLocationOperatingHours::class] = Locator\DropLocationOperatingHoursNormalizer::class;
        $this->normalizers[DropLocationServiceOfferingList::class] = Locator\DropLocationServiceOfferingListNormalizer::class;
        $this->normalizers[LocatorResponseSearchResults::class] = Locator\LocatorResponseSearchResultsNormalizer::class;
        $this->normalizers[OptionCodeTransportationPickUpSchedule::class] = Locator\OptionCodeTransportationPickUpScheduleNormalizer::class;
        $this->normalizers[SearchResultsDropLocation::class] = Locator\SearchResultsDropLocationNormalizer::class;
        $this->normalizers[StandardHoursDayOfWeek::class] = Locator\StandardHoursDayOfWeekNormalizer::class;
        // Paperless
        $this->normalizers[DeleteResponseResponse::class] = Paperless\DeleteResponseResponseNormalizer::class;
        $this->normalizers[PushToImageRepositoryResponseResponse::class] = Paperless\PushToImageRepositoryResponseResponseNormalizer::class;
        $this->normalizers[UploadResponseResponse::class] = Paperless\UploadResponseResponseNormalizer::class;
        $this->normalizers[UploadResponseFormsHistoryDocumentID::class] = Paperless\UploadResponseFormsHistoryDocumentIDNormalizer::class;
        // Pickup
        $this->normalizers[DropOffFacilitiesAddress::class] = Pickup\DropOffFacilitiesAddressNormalizer::class;
        $this->normalizers[PickupGetPoliticalDivision1ListResponse::class] = Pickup\PickupGetPoliticalDivision1ListResponseNormalizer::class;
        $this->normalizers[PickupGetServiceCenterFacilitiesResponseServiceCenterLocation::class] = Pickup\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer::class;
        $this->normalizers[PickupPendingStatusResponse::class] = Pickup\PickupPendingStatusResponseNormalizer::class;
        $this->normalizers[PickupRateResponseRateResult::class] = Pickup\PickupRateResponseRateResultNormalizer::class;
        $this->normalizers[ServiceCenterLocationDropOffFacilities::class] = Pickup\ServiceCenterLocationDropOffFacilitiesNormalizer::class;
        $this->normalizers[PickupRateResponseResponse::class] = Pickup\PickupRateResponseResponseNormalizer::class;
        // PreNotification
        $this->normalizers[PreNotificationResponseResponse::class] = PreNotification\PreNotificationResponseResponseNormalizer::class;
        // QuantumView
        $this->normalizers[DeliveryLocationAddressArtifactFormat::class] = QuantumView\DeliveryLocationAddressArtifactFormatNormalizer::class;
        $this->normalizers[ExceptionUpdatedAddress::class] = QuantumView\ExceptionUpdatedAddressNormalizer::class;
        $this->normalizers[ManifestPackage::class] = QuantumView\ManifestPackageNormalizer::class;
        $this->normalizers[QuantumViewEventsSubscriptionEvents::class] = QuantumView\QuantumViewEventsSubscriptionEventsNormalizer::class;
        $this->normalizers[QuantumViewResponseResponse::class] = QuantumView\QuantumViewResponseResponseNormalizer::class;
        $this->normalizers[QuantumViewResponseQuantumViewEvents::class] = QuantumView\QuantumViewResponseQuantumViewEventsNormalizer::class;
        $this->normalizers[SubscriptionEventsSubscriptionFile::class] = QuantumView\SubscriptionEventsSubscriptionFileNormalizer::class;
        $this->normalizers[SubscriptionFileDelivery::class] = QuantumView\SubscriptionFileDeliveryNormalizer::class;
        $this->normalizers[SubscriptionFileException::class] = QuantumView\SubscriptionFileExceptionNormalizer::class;
        $this->normalizers[SubscriptionFileGeneric::class] = QuantumView\SubscriptionFileGenericNormalizer::class;
        $this->normalizers[SubscriptionFileManifest::class] = QuantumView\SubscriptionFileManifestNormalizer::class;
        $this->normalizers[SubscriptionFileOrigin::class] = QuantumView\SubscriptionFileOriginNormalizer::class;
        // Rating
        $this->normalizers[AlertDetailElementLevelInformation::class] = Rating\AlertDetailElementLevelInformationNormalizer::class;
        $this->normalizers[RatedPackageNegotiatedCharges::class] = Rating\RatedPackageNegotiatedChargesNormalizer::class;
        $this->normalizers[RatedShipmentNegotiatedRateCharges::class] = Rating\RatedShipmentNegotiatedRateChargesNormalizer::class;
        $this->normalizers[RatedShipmentRatedPackage::class] = Rating\RatedShipmentRatedPackageNormalizer::class;
        $this->normalizers[RateResponse::class] = Rating\RateResponseNormalizer::class;
        $this->normalizers[RateResponseRatedShipment::class] = Rating\RateResponseRatedShipmentNormalizer::class;
        $this->normalizers[RateResponseResponse::class] = Rating\RateResponseResponseNormalizer::class;
        // Shipping
        $this->normalizers[ShipmentResponseResponse::class] = Shipping\ShipmentResponseResponseNormalizer::class;
        $this->normalizers[ShipmentResponseShipmentResults::class] = Shipping\ShipmentResponseShipmentResultsNormalizer::class;
        // TForceFreightRating
        $this->normalizers[FreightRateResponse::class] = TForceFreightRating\FreightRateResponseNormalizer::class;
        $this->normalizers[FreightRateResponseResponse::class] = TForceFreightRating\FreightRateResponseResponseNormalizer::class;
        // TForceFreightShipping
        $this->normalizers[FreightShipResponseShipmentResults::class] = TForceFreightShipping\FreightShipResponseShipmentResultsNormalizer::class;
        $this->normalizers[ShipmentResultsDocuments::class] = TForceFreightShipping\ShipmentResultsDocumentsNormalizer::class;
    }
}
