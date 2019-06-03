<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\UserDTO;
use App\Generated\V1\Enums\ArticleStatus;

class ArticleDTO extends DTO
{
    use ValueHelper;

    protected $id;
    protected $title;
    protected $content;
    protected $user;
    protected $status;
    protected $commentsCount;
    protected $favorite;
    protected $hot;
    protected $createdAt;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return UserDTO
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return ArticleStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
    }

    /**
     * 需要时用于标记是否收藏
     * @return boolean|null
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * 需要时用于标记是否收藏
     * @return boolean|null
     */
    public function isFavorite()
    {
        return $this->favorite;
    }

    /**
     * 是否是添加火热标记
     * @return boolean|null
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * 是否是添加火热标记
     * @return boolean|null
     */
    public function isHot()
    {
        return $this->hot;
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

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setCommentsCount($commentsCount)
    {
        $this->commentsCount = $commentsCount;
    }

    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
    }

    public function setHot($hot)
    {
        $this->hot = $hot;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|nullable|integer', Constants::INTEGER | Constants::OPTIONAL | Constants::MUTABLE, null],
            ['title', 'title', 'bail|string', Constants::STRING, null],
            ['content', 'content', 'bail|nullable|string', Constants::STRING | Constants::OPTIONAL, null],
            ['user', 'user', UserDTO::class, Constants::MODEL, null],
            ['status', 'status', ArticleStatus::class, Constants::ENUM, null],
            ['commentsCount', 'comments_count', 'bail|nullable|integer', Constants::INTEGER | Constants::OPTIONAL, null],
            ['favorite', 'favorite', 'bail|nullable|null', Constants::BOOLEAN | Constants::OPTIONAL, null],
            ['hot', 'hot', 'bail|nullable|null', Constants::BOOLEAN | Constants::OPTIONAL, null],
            ['createdAt', 'created_at', 'bail|date_format:Y-m-d H:i:s', Constants::DATE, 'Y-m-d H:i:s'],
        ];
    }

}
