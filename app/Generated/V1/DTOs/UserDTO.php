<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;

class UserDTO extends DTO
{
    use ValueHelper;

    protected $id;
    protected $name;
    protected $avatar;

    /**
     * 一个注释
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 这里只是留了一个备注
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|integer', Constants::INTEGER | Constants::MUTABLE, null],
            ['name', 'name', 'bail|string', Constants::STRING, null],
            ['avatar', 'avatar', 'bail|string', Constants::STRING, null],
        ];
    }

}
