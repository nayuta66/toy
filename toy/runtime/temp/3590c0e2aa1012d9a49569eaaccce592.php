<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp64\www\toy\public/../application/index\view\cms\login.html";i:1554650262;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/html5shiv.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/respond.min.js"></script>
<![endif]-->
<link href="<?php echo \think\Config::get('web_root'); ?>static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo \think\Config::get('web_root'); ?>lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录</title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="username" name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input id="yzm" name="yzm" class="input-text size-L" type="text" placeholder="验证码" style="width:150px;">
          <img id="yzmimg" src=""> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input id="loginbtn" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 大数据玩具平台</div>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/layer/2.4/layer.js"></script>
<script src="<?php echo \think\Config::get('web_root'); ?>js/myAjax.js"></script>>
<script type="text/javascript">
    $.ajax({
        type:"post",
        url:"login",
        success: function (xhr) {
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });
  $(()=>{
      $("#loginbtn").click(function(){
          var username1=$.trim($("#username").val());
          var password1=$.trim($("#password").val());
          var yzm=$.trim($("#yzm").val());
          $.ajax({
              type:"post",
              url:"login1",
              data:{
              "username" : username1,
              "password" : password1,
              },
              success: function (data) {
                  if (data==="1") {
                      window.location.href="index.html";
                  }
                  // else {
                  //     window.location.href="javascript:;";
                  //     alert("用户名或密码错误");
                  // }
              },
              error: function (data) {
                  alert("请求失败");
              }
          });
      })
  });
</script>
</body>
</html>