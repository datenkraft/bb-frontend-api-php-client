<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class GetAuthRoleIdentityCollectionForbiddenException extends ForbiddenException
{
    /**
     * @var \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Forbidden');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}