<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MyClass | 网站开发班</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/ourclass/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ourclass/Public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/ourclass/Public/Home/css/base.css"/>
    
    <link rel="stylesheet" href="/ourclass/Public/Home/css/index.css">
<block>
<block name="body">
<div class="row">
    <div class="myclass-form col-md-offset-3 col-md-6 col-sm-offset-1 col-md-10">
        <h3 align="center">实习信息收集</h3>
        <hr>
        <form class="form-horizontal" action="<?php echo U('add_sxxx');?>" method="post">
          <div class="form-group">
            <label for="studentid" class="col-sm-offset-1 col-sm-2 control-label">学号</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="studentid" name="studentid" placeholder="请输入学号" required>
            </div>
          </div>
          <div class="form-group">
            <label for="company" class="col-sm-offset-1 col-sm-2 control-label">实习/工作单位</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="company" name="company" placeholder="填写:找工作中/准备插本/实习单位名称" required>
            </div>
          </div>
          <div class="form-group">
            <label for="qq" class="col-sm-offset-1 col-sm-2 control-label">QQ</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="qq" name="qq" placeholder="请输入QQ" required>
            </div>
          </div>
          <div class="form-group">
            <label for="truename" class="col-sm-offset-1 col-sm-2 control-label">姓名</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="truename" name="truename" placeholder="请输入姓名" required>
            </div>
          </div>
          <div class="form-group">
            <label for="native_place" class="col-sm-offset-1 col-sm-2 control-label">生源地</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="native_place" name="native_place" placeholder="请输入生源地 如:广东高州" required>
            </div>
          </div>
          <div class="form-group">
            <label for="dormitory" class="col-sm-offset-1 col-sm-2 control-label">本部宿舍</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dormitory" name="dormitory" placeholder="请输入本部宿舍" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-3">
              <input type="checkbox" id="whether_in_school" name="whether_in_school" value="是"> <label for="whether_in_school"> 是否在学校</label>
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-offset-1 col-sm-2 control-label">现居住地</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="address" name="address" placeholder="请输入现居住地(详细地址) 如在校请填 学校" required>
            </div>
          </div>
          <div class="form-group">
            <label for="mobile" class="col-sm-offset-1 col-sm-2 control-label">本人手机号码</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="请输入本人手机号码" required>
            </div>
          </div>
          <div class="form-group">
            <label for="parents" class="col-sm-offset-1 col-sm-2 control-label">父母联系方式</label>
            <div class="col-sm-8">
              <textarea id="parents" name="parents" style="width:100%" rows="4" placeholder="父母姓名及联系方式 如:父亲 习大大 13800138000" required></textarea>
            </div>
          </div>
          <hr>
          <div align="center" class="form-group">
            <input type="submit" style="width:40%" class="btn btn-lg btn-primary">
          </div>
        </form>    
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
          <a href="https://coding.net/u/ninvfeng/p/ourclass/topic/all" type="button" class="btn btn-primary">意见建议</a>
          <a href="https://coding.net/u/ninvfeng/p/ourclass/git" type="button" class="btn btn-success">一起开发</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>

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
                <li><a data-toggle="modal" data-target="#myModal">实习信息</a></li>
                <!-- <li><a href="">论坛</a></li>
                <li><a href="">通信录</a></li>
                <li><a href="">相册</a></li> -->
            </ul>
        </div>
    </div>
</nav>

<!--Body-->


<!-- 底部 -->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/ourclass/Public/jquery.min.js"><\/script>')</script>
<script src="/ourclass/Public/bootstrap/js/bootstrap.min.js"></script>
<footer class="footer">
    <p>Design by ninvfeng</p>
</footer>
</body>
</html>