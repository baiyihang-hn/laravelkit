<?php

namespace Byh\LaravelKit\Exceptions;

use Exception;
use Throwable;

class RequestParamsValidException extends Exception
{
    public function __construct($message = "", $code = 403, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
