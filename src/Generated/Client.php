<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
     * Query SKU Usage data by debtLineItemId and/or skuGroupId. At least one of filter is required.
     *
     * @param array $queryParameters {
     *     @var string $filter[debtLineItemIds] SKUUsage Debt Line Item filter
     *     @var string $filter[skuGroupIds] SKUUsage Sku Group ID filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuUsageInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\SkuUsage[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSkuUsage(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetSkuUsage($queryParameters), $fetch);
    }
    /**
     * Query Debt Line Items by projectId and time range
     *
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] Date from filter
     *     @var string $filter[dateTo] Date to filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\DebtLineItemResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItemCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetDebtLineItemCollection($queryParameters), $fetch);
    }
    /**
     * Query Debt Line Items by projectId and time range
     *
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] Date from filter
     *     @var string $filter[dateTo] Date to filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCsvBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCsvUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCsvForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemCsvInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItemCsv(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetDebtLineItemCsv($queryParameters), $fetch);
    }
    /**
     * Query Debt Line Items by projectId and time range
     *
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] Date from filter
     *     @var string $filter[dateTo] Date to filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDebtLineItemXlsx(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetDebtLineItemXlsx($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\SkuGroupResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSkuGroupCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetSkuGroupCollection(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ProjectResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint\GetProjectCollection(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://frontend-api.conqore.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FrontendApi\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}