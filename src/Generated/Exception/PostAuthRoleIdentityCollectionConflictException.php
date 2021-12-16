<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class PostAuthRoleIdentityCollectionConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}