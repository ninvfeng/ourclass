<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ninvfeng的博客</title>
    <meta name="description" content="Ninvfeng的博客">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/Public/static/apple-touch-icon.png">
    <link rel="stylesheet" href="/Public/static/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="/Public/static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/Public/Home/css/base.css"/>
    <link rel="stylesheet" href="/Public/static/css/main.css">
    <link rel="stylesheet" href="/Public/Home/css/article.css">
    <script src="/Public/static/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
</head>
<body>
<!--导航-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Ninvfeng's Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="">Web开发</a></li>
                <li><a href="">服务器运维</a></li>
                <li><a href="">电脑小技巧</a></li>
                <li><a href="">软件&干货</a></li>
                <li><a href="">Code有所感</a></li>
                <li><a href="">一些照片</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="form">
            <div class="row">
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">搜索</button>
                      </span>
                    </div><!-- /input-group -->
                  </div>
                <button class="col-md-3 btn btn-success">订阅</button>
            </div>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!--Body-->

    <div class="container">
        <div class="col-md-offset-1 col-md-9">
            <h3 class="article-title"><?php echo ($v["title"]); ?></h3>
            <hr>
            <div class="plugin">
                <span>发布时间 : <?php echo (date("Y-m-d H:i:s",$v["time"])); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                <span>【浏览 : <?php echo ($v["view"]); ?>】</span>
                <span><a href="">【评论 : <?php echo ($v["comment"]); ?>】</a></span>
                <span><a href="">【收藏 : <?php echo ($v["comment"]); ?>】</a></span>
                <span><a href="">【分享 : <?php echo ($v["comment"]); ?>】</a></span>
            </div>
            <hr>
            <div id="content">
                <?php echo ($v["content"]); ?>
            </div>
        </div>
    </div>
<hr>


<!-- 底部 -->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/Public/static/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="/Public/static/js/vendor/bootstrap.min.js"></script>
<script src="/Public/static/js/main.js"></script>
<footer class="footer">
    <p>&copy; Company 2015</p>
</footer>
</body>
</html>