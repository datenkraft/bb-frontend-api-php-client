<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class PostAuthRoleIdentityCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}