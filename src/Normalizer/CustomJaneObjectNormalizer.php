<?php

declare(strict_types=1);

namespace BesmartandPro\UpsApi\Normalizer;

use BesmartandPro\UpsApi\Generated\Model\AcceptanceAuditPreCheckResponse;
use BesmartandPro\UpsApi\Generated\Model\AcceptanceAuditPreCheckResponsePackageResults;
use BesmartandPro\UpsApi\Generated\Model\AcceptanceAuditPreCheckResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\AccessPointInformationBusinessClassificationList;
use BesmartandPro\UpsApi\Generated\Model\AccessPointInformationPrivateNetworkList;
use BesmartandPro\UpsApi\Generated\Model\AlertDetailElementLevelInformation;
use BesmartandPro\UpsApi\Generated\Model\CandidateAddressKeyFormat;
use BesmartandPro\UpsApi\Generated\Model\ChemicalReferenceDataResponse;
use BesmartandPro\UpsApi\Generated\Model\ChemicalReferenceDataResponseChemicalData;
use BesmartandPro\UpsApi\Generated\Model\ChemicalReferenceDataResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\DeleteResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\DeliveryLocationAddressArtifactFormat;
use BesmartandPro\UpsApi\Generated\Model\DropLocationAdditionalComments;
use BesmartandPro\UpsApi\Generated\Model\DropLocationLocationAttribute;
use BesmartandPro\UpsApi\Generated\Model\DropLocationOperatingHours;
use BesmartandPro\UpsApi\Generated\Model\DropLocationServiceOfferingList;
use BesmartandPro\UpsApi\Generated\Model\DropOffFacilitiesAddress;
use BesmartandPro\UpsApi\Generated\Model\ExceptionUpdatedAddress;
use BesmartandPro\UpsApi\Generated\Model\FreightRateResponse;
use BesmartandPro\UpsApi\Generated\Model\FreightRateResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\FreightShipResponseShipmentResults;
use BesmartandPro\UpsApi\Generated\Model\LandedCostResponseShipment;
use BesmartandPro\UpsApi\Generated\Model\LocatorResponseSearchResults;
use BesmartandPro\UpsApi\Generated\Model\ManifestPackage;
use BesmartandPro\UpsApi\Generated\Model\OptionCodeTransportationPickUpSchedule;
use BesmartandPro\UpsApi\Generated\Model\PickupGetPoliticalDivision1ListResponse;
use BesmartandPro\UpsApi\Generated\Model\PickupGetServiceCenterFacilitiesResponseServiceCenterLocation;
use BesmartandPro\UpsApi\Generated\Model\PickupPendingStatusResponse;
use BesmartandPro\UpsApi\Generated\Model\PickupRateResponseRateResult;
use BesmartandPro\UpsApi\Generated\Model\PreNotificationResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\PushToImageRepositoryResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\QuantumViewEventsSubscriptionEvents;
use BesmartandPro\UpsApi\Generated\Model\QuantumViewResponseQuantumViewEvents;
use BesmartandPro\UpsApi\Generated\Model\QuantumViewResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\RatedPackageNegotiatedCharges;
use BesmartandPro\UpsApi\Generated\Model\RatedShipmentNegotiatedRateCharges;
use BesmartandPro\UpsApi\Generated\Model\RatedShipmentRatedPackage;
use BesmartandPro\UpsApi\Generated\Model\RateResponse;
use BesmartandPro\UpsApi\Generated\Model\RateResponseRatedShipment;
use BesmartandPro\UpsApi\Generated\Model\RateResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\ResponseError;
use BesmartandPro\UpsApi\Generated\Model\SearchResultsDropLocation;
use BesmartandPro\UpsApi\Generated\Model\ServiceCenterLocationDropOffFacilities;
use BesmartandPro\UpsApi\Generated\Model\ShipmentResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\ShipmentResponseShipmentResults;
use BesmartandPro\UpsApi\Generated\Model\ShipmentResultsDocuments;
use BesmartandPro\UpsApi\Generated\Model\StandardHoursDayOfWeek;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionEventsSubscriptionFile;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionFileDelivery;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionFileException;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionFileGeneric;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionFileManifest;
use BesmartandPro\UpsApi\Generated\Model\SubscriptionFileOrigin;
use BesmartandPro\UpsApi\Generated\Model\UploadResponseResponse;
use BesmartandPro\UpsApi\Generated\Model\XAVResponseCandidate;
use BesmartandPro\UpsApi\Generated\Normalizer\JaneObjectNormalizer;

class CustomJaneObjectNormalizer extends JaneObjectNormalizer
{
    public function __construct()
    {
        $this->normalizers[ResponseError::class] = ResponseErrorNormalizer::class;
        // AddressValidation
        $this->normalizers[CandidateAddressKeyFormat::class] = AddressValidation\CandidateAddressKeyFormatNormalizer::class;
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
        // Pickup
        $this->normalizers[DropOffFacilitiesAddress::class] = Pickup\DropOffFacilitiesAddressNormalizer::class;
        $this->normalizers[PickupGetPoliticalDivision1ListResponse::class] = Pickup\PickupGetPoliticalDivision1ListResponseNormalizer::class;
        $this->normalizers[PickupGetServiceCenterFacilitiesResponseServiceCenterLocation::class] = Pickup\PickupGetServiceCenterFacilitiesResponseServiceCenterLocationNormalizer::class;
        $this->normalizers[PickupPendingStatusResponse::class] = Pickup\PickupPendingStatusResponseNormalizer::class;
        $this->normalizers[PickupRateResponseRateResult::class] = Pickup\PickupRateResponseRateResultNormalizer::class;
        $this->normalizers[ServiceCenterLocationDropOffFacilities::class] = Pickup\ServiceCenterLocationDropOffFacilitiesNormalizer::class;
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
