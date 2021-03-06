<?php

namespace App\Generated\V1\Messages\Article;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\ArticleCommentDTO;

class GetArticleCommentsMessage extends Message
{
    use ValueHelper;

    protected $articleId;
    protected $page;
    protected $comments;

    /**
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    public function requestRules()
    {
        return [
            ['articleId', 'article_id', 'bail|integer', Constants::INTEGER, null],
            ['page', 'page', 'bail|integer', Constants::INTEGER, null],
        ];
    }

    public function responseRules()
    {
        return [
            ['comments', 'comments', ArticleCommentDTO::class, Constants::MODEL | Constants::ARRAY, null],
        ];
    }

    public function setResponse($comments)
    {
        $this->comments = $comments;
    }

}
