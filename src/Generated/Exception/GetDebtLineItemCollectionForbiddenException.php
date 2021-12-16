<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class GetDebtLineItemCollectionForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Forbidden', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}