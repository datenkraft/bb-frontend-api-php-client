<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class DeleteAuthRoleIdentityCollectionInternalServerErrorException extends InternalServerErrorException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Server error', 500);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}