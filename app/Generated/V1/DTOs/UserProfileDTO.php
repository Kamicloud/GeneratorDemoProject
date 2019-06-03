<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;

class UserProfileDTO extends DTO
{
    use ValueHelper;

    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttributeMap()
    {
        return [
            ['name', 'name', 'bail|string', Constants::STRING, null],
        ];
    }

}
