<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\UserDTO;

class ArticleCommentDTO extends DTO
{
    use ValueHelper;

    protected $id;
    protected $user;
    protected $content;
    protected $createdAt;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return UserDTO
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return \Illuminate\Support\Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|integer', null, null],
            ['user', 'user', UserDTO::class, Constants::MODEL, null],
            ['content', 'content', 'bail|string', null, null],
            ['createdAt', 'created_at', 'bail|date_format:Y-m-d H:i:s', null, 'Y-m-d H:i:s'],
        ];
    }

}
