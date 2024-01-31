<?php

namespace BesmartandPro\UpsApi\Generated\Endpoint;

class ProcessSubscriptionTypeForTrackingNumber extends \BesmartandPro\UpsApi\Generated\Runtime\Client\BaseEndpoint implements \BesmartandPro\UpsApi\Generated\Runtime\Client\Endpoint
{
    protected $version;
    protected $type;
    /**
    * The UPS Track Alert API provides best in-class package tracking visibility with near real time event updates for an improved customer experience and stream line logistic management.
    Updates are pushed to the user as soon as available with no constant polling required, thereby improving operational efficiency.
    
    Key Business Values:
    - **Enhanced Customer Experience**: Near Real-time tracking information increases transparency, leading to higher customer satisfaction and trust.
    - **Operational Efficiency**: Eliminates the necessity for continuous polling, thus saving computational resources and improving system responsiveness.
    - **Data-Driven Decision Making**: Access to timely data can help businesses optimize their supply chain and make informed logistics decisions.
    - **Optimizing Cash Flow Through Near Real-Time Delivery Tracking**: Improve cash flow by knowing the deliveries occurred in near real time.
    - **Mitigating Fraud and Theft through Near Real-Time Package Status Monitoring**: Reduce fraud and theft by knowing the status of the package.
    <br /><a href="https://developer.ups.com/api/reference/trackalert/product-info" target="_blank">Product Info</a><br /><a href="https://developer.ups.com/api/reference/trackalert/error-codes" target="_blank">Errors</a>
    *
    * @param string $version API Version, e.g. v1
    * @param string $type - 'Standard' - Represents a standard subscription type that provides near real time updates on tracking status.
    
    * @param null|\BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceRequest $requestBody
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request.
    *     @var string $transactionSrc Identifies the client/source application that is calling.
    * }
    */
    public function __construct(string $version = 'v1', string $type, ?\BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceRequest $requestBody = null, array $headerParameters = array())
    {
        $this->version = $version;
        $this->type = $type;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \BesmartandPro\UpsApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{version}', '{type}'), array($this->version, $this->type), '/track/{version}/subscription/{type}/package');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('transId', 'transactionSrc'));
        $optionsResolver->setRequired(array('transId', 'transactionSrc'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('transId', array('string'));
        $optionsResolver->addAllowedTypes('transactionSrc', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberBadRequestException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberUnauthorizedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberNotFoundException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException
     * @throws \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \BesmartandPro\UpsApi\Generated\Model\TrackSubsServiceResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\TrackSubsServiceResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberBadRequestException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\TrackSubsServiceErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberUnauthorizedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberNotFoundException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (405 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException($serializer->deserialize($body, 'BesmartandPro\\UpsApi\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \BesmartandPro\UpsApi\Generated\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException($response);
        }
        throw new \BesmartandPro\UpsApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth2');
    }
}