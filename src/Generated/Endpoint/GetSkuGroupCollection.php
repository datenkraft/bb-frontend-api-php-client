<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint;

class GetSkuGroupCollection extends \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\Endpoint
{
    use \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/sku-group';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\SkuGroupResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\SkuGroupResource[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetSkuGroupCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
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