<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class PostAuthRoleIdentityCollectionBadRequestException extends BadRequestException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}