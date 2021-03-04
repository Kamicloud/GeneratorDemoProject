# Article

---

  - [GetArticleComments获取文章评论](#GetArticleComments)
  - [CreateArticle添加文章](#CreateArticle)
  - [GetArticle取得一篇文章](#GetArticle)
  - [GetArticles获取文章列表](#GetArticles)

<a name="GetArticleComments"></a>
## GetArticleComments获取文章评论

`POST`

`/api/v1/article/get_article_comments`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|articleId | |`Integer`|true|
|page | |`Integer`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|comments | |[`Models.ArticleComment[]`](/docs/{{version}}/generated/models#ArticleComment)|true|

<a name="CreateArticle"></a>
## CreateArticle添加文章

`POST`

`/api/v1/article/create_article`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|title | |`String`|true|
|content | |`String`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|article | |[`Models.Article`](/docs/{{version}}/generated/models#Article)|true|

<a name="GetArticle"></a>
## GetArticle取得一篇文章

`POST`

`/api/v1/article/get_article`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|article | |[`Models.Article`](/docs/{{version}}/generated/models#Article)|true|

<a name="GetArticles"></a>
## GetArticles获取文章列表

`POST`

`/api/v1/article/get_articles`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|ymd | |`DateYmd`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|articles | |[`Models.Article[]`](/docs/{{version}}/generated/models#Article)|true|

