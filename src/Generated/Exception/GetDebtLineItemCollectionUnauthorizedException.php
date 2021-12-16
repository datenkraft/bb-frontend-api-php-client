<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Exception;

class GetDebtLineItemCollectionUnauthorizedException extends UnauthorizedException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FrontendApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unauthorized', 401);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}