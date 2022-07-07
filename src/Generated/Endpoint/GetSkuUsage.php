<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint;

class GetSkuUsage extends \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Query SKU Usage data by debtLineItemId and/or skuGroupId. At least one of filter is required.
     *
     * @param array $queryParameters {
     *     @var string $filter[debtLineItemIds] SKUUsage Debt Line Item filter
     *     @var string $filter[skuGroupIds] SKUUsage Sku Group ID filter
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/sku-usage';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter[debtLineItemIds]', 'filter[skuGroupIds]'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('filter[debtLineItemIds]', array('string'));
        $optionsResolver->setAllowedTypes('filter[skuGroupIds]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\SkuUsage[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\SkuUsage[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}