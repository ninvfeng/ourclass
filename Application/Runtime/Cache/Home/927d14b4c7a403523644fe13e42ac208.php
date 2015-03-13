<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MyClass | 网站开发班</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/myclass/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/myclass/Public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/myclass/Public/Home/css/base.css"/>
    
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
            <a class="navbar-brand" href="/">MyClass | 网站开发班</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="">实习信息</a></li>
                <!-- <li><a href="">论坛</a></li>
                <li><a href="">通信录</a></li>
                <li><a href="">相册</a></li> -->
            </ul>
        </div>
    </div>
</nav>

<!--Body-->

	<div class="container">
		<div class="jumbotron">
		  <h3 style="color:green">信息提交成功！你可以</h3>
		  <p><a class="btn btn-success" href="#" role="button">一起完善这个网站</a></p>
		  <p><a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#myModal">查看全班实习信息</a></p>
		</div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">功能开发中...</h4>
	      </div>
	      <div class="modal-body">
	        <h4>查看全班同学公开实习情况功能正在紧张开发中......<br><br></h4>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary">意见建议</button>
	        <button type="button" class="btn btn-success">一起开发</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	      </div>
	    </div>
	  </div>
	</div>


<!-- 底部 -->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/myclass/Public/jquery.min.js"><\/script>')</script>
<script src="/myclass/Public/bootstrap/js/bootstrap.min.js"></script>
<footer class="footer">
    <p>Design by ninvfeng</p>
</footer>
</body>
</html>