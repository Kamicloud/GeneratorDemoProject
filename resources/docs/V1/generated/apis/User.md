# User

> {warning} 用户控制器


---

  - [CreateUser](#CreateUser)
  - [GetUsers](#GetUsers)

<a name="CreateUser"></a>
## CreateUser

`POST`

`/api/v1/user/create_user`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|email |查询的ID|`String`|true|
|emails | |`String[]`|true|
|gender | |[`Enums.Gender`](/docs/{{version}}/generated/enums#Gender)|true|
|genders | |[`Enums.Gender[]`](/docs/{{version}}/generated/enums#Gender)|true|
|id | |`Integer`|true|
|ids | |`Integer[]`|true|

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|user | |[`Models.User`](/docs/{{version}}/generated/models#User)|true|
|users | |[`Models.User[]`](/docs/{{version}}/generated/models#User)|true|

<a name="GetUsers"></a>
## GetUsers

`POST` `DELETE`

`/api/v1/user/get_users`

### Requests
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|id |查询的ID|`Integer`|true|
|gender | |[`Enums.Gender`](/docs/{{version}}/generated/enums#Gender)|true|
|page | |`Integer`| |
|testUser | |[`Models.User`](/docs/{{version}}/generated/models#User)| |
|testUsers | |[`Models.User[]`](/docs/{{version}}/generated/models#User)| |

### Responses
|Key|Description|Type|Required|
|:-|:-|:-|:-|
|val | |`String`|true|
|user | |[`Models.User`](/docs/{{version}}/generated/models#User)|true|

