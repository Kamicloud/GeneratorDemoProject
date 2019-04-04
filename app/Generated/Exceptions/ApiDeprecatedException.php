<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class ApiDeprecatedException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::API_DEPRECATED);
    }

}
