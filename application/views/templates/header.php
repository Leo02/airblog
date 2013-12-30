<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>faceair的博客</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <style>
        body {
            font-family:'Helvetica Neue',Helvetica,Arial,Sans-serif;
            margin: 100px auto;
            width: 60%;
            font-size:16px;
            background:url(http://zhihudaily-zhihudaily.stor.sinaapp.com/airbg.png) repeat 0 0;
        }
        .navbar {
            opacity: 0.8;
            border: none;
            box-shadow: 0px 3px 3px #999;
        }
        .block li {
            margin: 10px 0;
        }
        .block {
            margin-bottom:20px;
            background:#FFF;
            padding:5px 15px 15px 15px;
            border-radius:5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.45);

        }
        .block a {
            text-decoration:none;
        }
        .block img {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.45);
        }
        blockquote p {
            font-size: 14px;
        }
        .block pre{
            font-size: 15px;
            line-height: 20px;
        }
        @media (max-width: 480px) {
            body {
                margin: 80px auto;
                width: 96%;
            }
        }

    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">faceair的博客</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">日志</a></li>
                <li><a href="/rss">RSS</a></li>
                <li><a href="/about-me">关于我</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($user)){
                    echo '<li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown">' . $user . '<b class="caret"></b></a><ul class="dropdown-menu"><li><a href="/admin/create">写文章</a></li><li><a href="/admin/login_out">注销</a></li></ul></li>';
                }else{
                    echo '<li class="active"><a href="/admin">登录</a></li>';
                }
                ?>

            </ul>
        </div>
    </div>
</div>