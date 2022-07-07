<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint;

class GetDebtLineItemXlsx extends \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Query Debt Line Items by projectId and time range
     *
     * @param array $queryParameters {
     *     @var string $filter[projectId] projectId filter
     *     @var string $filter[dateFrom] Date from filter
     *     @var string $filter[dateTo] Date to filter
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
        return '/debt-line-item/xlsx';
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
        $optionsResolver->setDefined(array('filter[projectId]', 'filter[dateFrom]', 'filter[dateTo]'));
        $optionsResolver->setRequired(array('filter[projectId]', 'filter[dateFrom]', 'filter[dateTo]'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('filter[projectId]', array('string'));
        $optionsResolver->setAllowedTypes('filter[dateFrom]', array('string'));
        $optionsResolver->setAllowedTypes('filter[dateTo]', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetDebtLineItemXlsxInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
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