##airblog

###简介

airblog是一款轻量级php博客，由CodeIgniter和Bootstrap框架搭建，评论部分由多说提供。

demo：[faceair的博客](http://blog.faceair.net)

目前已实现：

* 登陆发布和修改文章
* 文章列表
* markdown语法
* rss输出

###部署

* 数据库结构在`airblog.sql`,配置在`\application\config\database.php`
* 所存`password`为 md5(password+user)
* 注意修改`\appliction\view\blog\view.php`里面的多说评论js
* 如果是nginx请配置所有请求到index.php
* 我使用了多说的自定义css，详情<http://www.shejidaren.com/use-css3-to-create-a-beautiful-comment-ui.html>

###Todo

* 前端...
* 草稿箱功能

###授权

遵循MIT授权协议。
http://opensource.org/licenses/MIT
