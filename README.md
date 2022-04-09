版本：thinkPHP 6.0.12

多应用情况下，控制器下创建目录

目录结构：

api

|--controller

|--|--open //目录

|--|--|--User //用户控制器

|--route

|--|--api.php // 路由定义

index

|--controller

|--|--Index // index控制器

|--route

|--|--app.php // 路由定义


## 问题1：
api.php中定义了路由，使用路由中间件，定义的路由正常，中间件生效了，但是原地址访问仍然有效，且跳过了中间件

预期结果：原地址失效，在路由的文档中有说明

> 文档：
> 原来的访问地址会自动失效。

```
路由地址：http://127.0.0.1:8000/api.php/open/user/index 中间件生效

原地址：http://127.0.0.1:8000/api.php/open.User/index 中间件不生效

controller下不使用二级目录时，无此bug

路由地址：http://127.0.0.1:8000/api.php/c_route/index 中间件生效

原地址：http://127.0.0.1:8000/api.php/c/index 原地址不能访问，符合预期
```

## 问题2：
使用控制器中间件，路由只定义路由，不声明使用中间件。结果原地址访问，中间件生效，通过路由定义的地址访问，中间件不生效。

预期结果：原地址失效，并且路由指向时，中间件也要能够生效

```
路由地址：http://127.0.0.1:8000/api.php/open/user2/index 中间件不生效

原地址：http://127.0.0.1:8000/api.php/open.user2/index 中间件生效
```
