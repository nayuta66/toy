<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\wamp64\www\toy\public/../application/index\view\cms\change_password.html";i:1554892650;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/html5shiv.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->
<title>修改密码 - 会员管理</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>ID：</label>
			<div class="formControls col-xs-8 col-sm-9" id="id"></div>
		</div>
		<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>账户：</label>
		<div class="formControls col-xs-8 col-sm-9" id="username"></div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>重置密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off"  readonly placeholder="不修改请留空" name="newpassword" id="newpassword">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="button" id="form-change-password" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
    var id1=document.getElementById("id");
    var name1 = document.getElementById("username");
    var newpsd=document.getElementById("newpassword");
   
	id1.innerHTML=window.parent.id11;
	name1.innerHTML=window.parent.admin_name11;
    newpsd.placeholder="123456";
    $.ajax({
        type: "post",
        url: "change_password",
        success: function (data) {
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });

	var btn=document.getElementById("form-change-password");
	btn.onclick=function() {
            $.ajax({
                type: "post",
                url: "change_password1",
                data: {
                    "id": id1.innerHTML
                },
                success: function (data) {
                    if (data === "1") {
                        parent.layer.close('10001');
                        alert("重置成功");
                        window.parent.location.reload();
                    }else {
                        console.log("未知错误");
                    }
                },
                error: function (xhr) {
                    alert("请求失败");
                }
            });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>