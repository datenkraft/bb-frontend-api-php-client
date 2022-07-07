<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Endpoint;

class GetProjectCollection extends \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\Endpoint
{
    use \Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/project';
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
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ProjectResource[]|\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ProjectResource[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FrontendApi\Generated\Exception\GetProjectCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\ErrorResponse', 'json'));
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