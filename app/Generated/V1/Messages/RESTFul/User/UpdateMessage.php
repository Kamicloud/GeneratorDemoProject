<?php

namespace App\Generated\V1\Messages\RESTFul\User;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\UserDTO;

class UpdateMessage extends Message
{
    use ValueHelper;

    protected $data;
    protected $model;
    protected $dtoClass = UserDTO::class;

    /**
     * @return UserDTO
     */
    public function getData()
    {
        return $this->data;
    }

    public function requestRules()
    {
        return [
            ['data', 'data', $this->dtoClass, Constants::MODEL, null],
        ];
    }

    public function responseRules()
    {
        return [
            ['model', 'model', $this->dtoClass, Constants::MODEL, null],
        ];
    }

    public function setResponse($model)
    {
        $this->model = $model;
    }

}

