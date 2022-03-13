<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\toy\public/../application/index\view\cms\change_member.html";i:1554807566;}*/ ?>
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

    <title>修改用户信息</title>
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" id="form-member-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>ID：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="id" name="id">
            </div>
        </div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="username" name="admin_name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal" id="sex" name="admin_sex">
				<div class="radio-box">
					<input type="radio" name="admin_sex" value="男" checked>
					<label for="sex">男</label>
					<input type="radio" name="admin_sex" value="女">
					<label for="sex">女</label>
					<input type="radio" name="admin_sex" value="保密">
					<label for="sex">保密</label>
				</div>
			</div>
		</div>
	
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@admin_email" name="admin_email" id="email">
			</div>
		</div>
                                 <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>昵称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="admin_nickname" name="admin_nickname" id="admin_nickname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>工业应用：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="industryApplication" id="industryApplication" name="industryApplication">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>主要项目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="mainProject" id="mainProject" name="mainProject">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>网站：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="website" id="website" name="website">
			</div>
		</div>
                                 <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>住址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="location" id="location" name="location">
			</div>
		</div>
                                <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>详细住址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="locationDetail" id="locationDetail" name="locationDetail">
			</div>
		</div>
                               
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>加入时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="addtime" name="addtime" id="addtime">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="status" id="status">
					<option value="" selected>请选择状态</option>
					<option value="1">启用</option>
					<option value="0">停用</option>
				</select>
				</span> </div>
		</div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input id="mabtn" class="btn btn-primary radius" type="button" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
    $.ajax({
        type: "post",
        url: "change_member",
        success: function (data) {
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });
    var id1=document.getElementById("id");
    var name1 = document.getElementById("username");

    var sex1=document.getElementsByName("admin_sex");
    var email1 = document.getElementById("email");
    var admin_nickname1=document.getElementById("admin_nickname");
    var industryApplication1 = document.getElementById("industryApplication");
    var mainProject1 = document.getElementById("mainProject");
   var website1 = document.getElementById("website");
   var location1= document.getElementById("location");
   var locationDetail1 = document.getElementById("locationDetail");
    var addtime1=document.getElementById("addtime");

    id1.value=window.parent.id11;
    name1.value=window.parent.admin_name11;


    email1.value=window.parent.admin_email11;
    admin_nickname1.value=window.parent.admin_nickname11;
 industryApplication1.value=window.parent.industryApplication11;
mainProject1.value=window.parent.mainProject11;
 website1.value=window.parent.website11;
  location1.value=window.parent.location11;
 locationDetail1.value=window.locationDetail11;
    addtime1.value=window.parent.addtime11;
    var str1="男";
    var res1=str1.localeCompare(window.parent.sex11);
  
    if(res1===0){
        sex1[1].checked=true;

    }else{
        sex1[2].checked=true;
    }

    var str="已停用";
    var res=str.localeCompare(window.parent.status11);
    if(res===0){
        var y=document.getElementById("status");
        y.options[2].selected=true;
    }else{
        var x=document.getElementById("status");
        x.options[1].selected=true;
    }
    var btn=document.getElementById("mabtn");
    btn.onclick=function() {
        var name = document.getElementById("username");

        var value=name.value;

        if (value==""){
            name.placeholder="名字不能为空";
            window.location.href="javascript:;";
        }else {
                $.ajax({
                    type: "post",
                    url: "change_member1",
                    data: {
                        "changeuser":$("#form-member-add").serializeArray()
                    },
                    success: function (data) {
                        if (data === "1") {
                            parent.layer.close('10001');
                            alert("修改成功");
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

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>