<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use YetAnotherGenerator\ValueHelper;

class SharePayloadModel extends BaseModel
{
    use ValueHelper;

    protected $title;
    protected $description;
    protected $icon;
    protected $url;

    /**
     * 分享的标题
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 分享的描述
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 一个缩略图
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * 点进去的链接
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getAttributeMap()
    {
        return [
            ['title', 'title', false, false, 'bail|required|String', false, false, false],
            ['description', 'description', false, false, 'bail|required|String', false, false, false],
            ['icon', 'icon', false, false, 'bail|required|String', false, false, false],
            ['url', 'url', false, false, 'bail|required|String', false, false, false],
        ];
    }

}
