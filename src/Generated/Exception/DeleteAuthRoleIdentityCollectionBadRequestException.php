<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class DeleteAuthRoleIdentityCollectionBadRequestException extends BadRequestException
{
    /**
     * @var \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}