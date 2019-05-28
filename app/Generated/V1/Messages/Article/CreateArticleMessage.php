<?php

namespace App\Generated\V1\Messages\Article;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\Models\ArticleDTO;

class CreateArticleMessage extends Message
{
    use ValueHelper;

    protected $title;
    protected $content;
    protected $article;

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function requestRules()
    {
        return [
            ['title', 'title', 'bail|String', null],
            ['content', 'content', 'bail|String', null],
        ];
    }

    public function responseRules()
    {
        return [
            ['article', 'article', ArticleDTO::class, Constants::IS_MODEL],
        ];
    }

    public function setResponse($article)
    {
        $this->article = $article;
    }

}
