<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class PostAuthRoleIdentityCollectionConflictException extends ConflictException
{
    /**
     * @var \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Conflict');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}