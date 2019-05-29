# Article

---

  - [GetArticleComments获取文章评论](#GetArticleComments)
  - [CreateArticle添加文章](#CreateArticle)
  - [GetArticle取得一篇文章](#GetArticle)
  - [GetArticles获取文章列表](#GetArticles)

<a name="GetArticleComments"></a>
## GetArticleComments

`POST`

`/api/v1/article/get_article_comments`


> {warning} 获取文章评论

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
## CreateArticle

`POST`

`/api/v1/article/create_article`


> {warning} 添加文章

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
## GetArticle

`POST`

`/api/v1/article/get_article`


> {warning} 取得一篇文章

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id | |`Integer`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|article | |[`Models.Article`](/docs/{{version}}/generated/models#Article)|true|

<a name="GetArticles"></a>
## GetArticles

`POST`

`/api/v1/article/get_articles`


> {warning} 获取文章列表

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|articles | |[`Models.Article[]`](/docs/{{version}}/generated/models#Article)|true|

