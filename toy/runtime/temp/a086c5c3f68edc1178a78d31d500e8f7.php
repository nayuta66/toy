<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wamp64\www\toy\public/../application/index\view\cms\member_list.html";i:1554809593;}*/ ?>
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
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/css/style.css" />
	<!--[if IE 6]>
	<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form id="searchuser">
		日期范围：
		<input type="text" onfocus="WdatePicker()" id="datemin" name="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker()" id="datemax" name="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="uservalue" name="uservalue">
		<button type="button" class="btn btn-success radius" id="userbtn" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a id="delete" href="javascript:;" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','member_add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong id="datanumber"></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="checkbox0" value=""></th>
				<th width="40">id</th>
				<th width="100">用户</th>
				<th width="40">性别</th>
				<th width="150">邮箱</th>
				<th width="100">昵称</th>
				<th width="100">工业应用</th>
				<th width="100">主要项目</th>
				<th width="100">website</th>
				<th width="100">住址</th>
				<th width="100">详细住址</th>
				<th width="100">加入时间</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
			</thead>
			<tbody id="tbd">
			</tbody>
		</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>lib/laypage/1.2/laypage.js"></script>
<script src="<?php echo \think\Config::get('web_root'); ?>js/myAjax.js"></script>
<script>
    $.ajax({
        type:"post",
        url: "member_list",
        success: function (data) {
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });
    $.ajax({
        type:"post",
        url: "member_list1",
        success: function (data1) {
            var data = JSON.parse(data1);
            for (var i = 0; i < data.length; i++) {
                if (data[i].status === 1) {
                    var $td = "<td class=\"td-manage\"><a style=\"text-decoration:none\" onClick=\"member_stop(this,'10001')\" href=\"javascript:;\" title=\"停用\"><i class=\"Hui-iconfont\">&#xe631;</i></a> <a title=\"编辑\" href=\"javascript:;\" onclick=\"member_edit(this,'编辑','change_member.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a> <a style=\"text-decoration:none\" class=\"ml-5\" onClick=\"change_password(this,'重置密码','change_password.html','10001','600','270')\" href=\"javascript:;\" title=\"重置密码\"><i class=\"Hui-iconfont\">&#xe63f;</i></a> <a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
                    var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '<td>' + data[i].id + '</td>' + '<td>' + data[i].admin_name + '</td>' + '<td>' + data[i].admin_sex + '</td>' + '<td>' + data[i].admin_email + '</td>' + '<td>' + data[i].admin_nickname + '</td>' + '<td>' + data[i].industryApplication + '</td>' + '<td>' + data[i].mainProject + '</td>' + '<td>' + data[i].website + '</td>' + '<td>' + data[i].location + '</td>' + '<td>' + data[i].locationDetail + '</td>' + '<td>' + data[i].addtime + '</td>'+ '<td class="td-status"><span class="label label-success radius">已启用</span></td>' + $td + '</tr>');
                }if (data[i].status === 0) {
                        var $td = "<td class=\"td-manage\"><a style=\"text-decoration:none\" onClick=\"member_start(this,'10001')\" href=\"javascript:;\" title=\"启用\"><i class=\"Hui-iconfont\">&#xe631;</i></a> <a title=\"编辑\" href=\"javascript:;\" onclick=\"member_edit(this,'编辑','change_member.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a> <a style=\"text-decoration:none\" class=\"ml-5\" onClick=\"change_password(this,'重置密码','change_password.html','10001','600','270')\" href=\"javascript:;\" title=\"重置密码\"><i class=\"Hui-iconfont\">&#xe63f;</i></a> <a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
                        var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '<td>' + data[i].id + '</td>' + '<td>' + data[i].admin_name + '</td>' + '<td>' + data[i].admin_sex + '</td>' + '<td>' + data[i].admin_email + '</td>' + '<td>' + data[i].admin_nickname + '</td>' + '<td>' + data[i].industryApplication + '</td>' + '<td>' + data[i].mainProject + '</td>' + '<td>' + data[i].website + '</td>' + '<td>' + data[i].location + '</td>' + '<td>' + data[i].locationDetail + '</td>'+ '<td>' + data[i].addtime + '</td>' + '<td class="td-status"><span class="label label-default radius">已停用</span></td>' + $td + '</tr>');
                    }
                    $("#tbd").append($tr);
                }
                var num = document.getElementById("datanumber");
                num.innerHTML = data.length;
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });

    var Delete = document.getElementById("delete");
	    Delete.onclick=function () {
            var checkbox=document.getElementsByName("checkbox");
            var arr=new Array();
            $("[name='checkbox']:checked").each(function () {
						  arr.push($(this.parentNode.parentNode.childNodes[0]).next().html());
                      });

                      var length=arr.length;
                      var x = confirm('确认要删除吗？');
                      if (x == true) {
                          $.ajax({
                              type: 'post',
                              url: 'deleteUsers',
							  data:{
                                  "arr1":arr
							  },
                              success: function (data) {
                              if(data==="1"){
                                  for (var i = checkbox.length - 1; i >= 0; i--) {
                                      if (checkbox[i].checked == true) {
                                          checkbox[i].parentNode.parentNode.remove();
                                      }
                                  }
                                  var num=document.getElementById("datanumber");
                                  num.innerHTML-=length;
                                  layer.alert('已删除!', {icon: 1, time: 1000});
                              }
                              },
                              error: function (data) {
                                  console.log(data.msg);
                              },
                          });
                      }
        };
        var btn = document.getElementById("userbtn");
        btn.onclick=function () {
            $.ajax({
                type:"post",
                url:"find",
                data:{
                    "datemin": document.getElementById("datemin").value,
                    "datemax": document.getElementById("datemax").value,
                    "uservalue":document.getElementById("uservalue").value
                },
                success: function (data1) {
                    var tbd=document.getElementById("tbd");
                    tbd.innerHTML="";
                    var data=JSON.parse(data1);
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].status === 1) {
                            var $td = "<td class=\"td-manage\"><a style=\"text-decoration:none\" onClick=\"member_stop(this,'10001')\" href=\"javascript:;\" title=\"停用\"><i class=\"Hui-iconfont\">&#xe631;</i></a> <a title=\"编辑\" href=\"javascript:;\" onclick=\"member_edit(this,'编辑','change_member.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a> <a style=\"text-decoration:none\" class=\"ml-5\" onClick=\"change_password(this,'重置密码','change_password.html','10001','600','270')\" href=\"javascript:;\" title=\"重置密码\"><i class=\"Hui-iconfont\">&#xe63f;</i></a> <a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
                            var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '<td>' + data[i].id + '</td>' + '<td>' + data[i].admin_name + '</td>' + '<td>' + data[i].admin_sex + '</td>' + '<td>' + data[i].admin_email + '</td>' + '<td>' + data[i].admin_nickname + '</td>' + '<td>' + data[i].industryApplication + '</td>' + '<td>' + data[i].mainProject + '</td>' + '<td>' + data[i].website + '</td>' + '<td>' + data[i].location + '</td>' + '<td>' + data[i].locationDetail + '</td>'+ '<td>' + data[i].addtime + '</td>' + '<td class="td-status"><span class="label label-success radius">已启用</span></td>' + $td + '</tr>');
                        }if (data[i].status === 0) {
                            var $td = "<td class=\"td-manage\"><a style=\"text-decoration:none\" onClick=\"member_start(this,'10001')\" href=\"javascript:;\" title=\"启用\"><i class=\"Hui-iconfont\">&#xe631;</i></a> <a title=\"编辑\" href=\"javascript:;\" onclick=\"member_edit(this,'编辑','change_member.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a> <a style=\"text-decoration:none\" class=\"ml-5\" onClick=\"change_password(this,'重置密码','change_password.html','10001','600','270')\" href=\"javascript:;\" title=\"重置密码\"><i class=\"Hui-iconfont\">&#xe63f;</i></a> <a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
                            var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '<td>' + data[i].id + '</td>' + '<td>' + data[i].admin_name + '</td>' + '<td>' + data[i].admin_sex + '</td>' + '<td>' + data[i].admin_email + '</td>' + '<td>' + data[i].admin_nickname + '</td>' + '<td>' + data[i].industryApplication + '</td>' + '<td>' + data[i].mainProject + '</td>' + '<td>' + data[i].website + '</td>' + '<td>' + data[i].location + '</td>' + '<td>' + data[i].locationDetail + '</td>'+ '<td>' + data[i].addtime + '</td>' + '<td class="td-status"><span class="label label-default radius">已停用</span></td>' + $td + '</tr>');
                        }
                        $("#tbd").append($tr);
                    }
                    var num=document.getElementById("datanumber");
                    num.innerHTML=data.length;
                },
                error: function (xhr) {
                    alert("请求失败");
                }
            })
        };
</script>

<script type="text/javascript">
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*用户-停用*/
    function member_stop(obj,id) {
       var x=obj.parentNode.parentNode.childNodes[1].innerHTML;
		var z = confirm('确认要停用吗？');
        if (z == true) {
            $.ajax({
                type: 'POST',
                url: 'status',
                data: {
                    "status":x
				},
                success: function (data) {
                    if (data === "1") {
                        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                        $(obj).remove();
                        alert('已停用!', {icon: 5, time: 1000});
                    }
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        }
    }
    /*用户-启用*/
    function member_start(obj,id) {
        var y = confirm('确认要启用吗？');
        if (y == true) {
           var x=obj.parentNode.parentNode.childNodes[1].innerHTML;
            $.ajax({
                type: 'POST',
                url: 'status',
                data: {
                    "status":x
                },
                success: function (data) {
                    if (data === "1") {
                        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                        $(obj).remove();
                        alert('已启用!', {icon: 6, time: 1000});
                    }
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        }
    }
        /*用户-编辑*/
        function member_edit(obj,title, url, id, w, h) {
            var id1=obj.parentNode.parentNode.childNodes[1].innerHTML;
            id11=id1;
            var admin_name1=obj.parentNode.parentNode.childNodes[2].innerHTML;
            admin_name11=admin_name1;
            var admin_sex1=obj.parentNode.parentNode.childNodes[3].innerHTML;
            admin_sex11=admin_sex1;
            var admin_email1=obj.parentNode.parentNode.childNodes[4].innerHTML;
            admin_email11=admin_email1;
            var admin_nickname1=obj.parentNode.parentNode.childNodes[5].innerHTML;
            admin_nickname11=admin_nickname1;
            var industryApplication1=obj.parentNode.parentNode.childNodes[6].innerHTML;
            industryApplication11=industryApplication1;
             var mainProject1=obj.parentNode.parentNode.childNodes[7].innerText;
            mainProject11=mainProject1;
             var website1=obj.parentNode.parentNode.childNodes[8].innerHTML;
            website11=website1;
             var location1=obj.parentNode.parentNode.childNodes[9].innerHTML;
            location11=location1;
              var locationDetail1=obj.parentNode.parentNode.childNodes[10].innerHTML;
            locationDetail11=locationDetail1;
            var addtime1=obj.parentNode.parentNode.childNodes[11].innerText;
            addtime11=addtime1;
            var status1=obj.parentNode.parentNode.childNodes[12].innerText;
            status11=status1;
            layer_show(title, url, w, h);
        }

        /*密码-重置*/
        function change_password(obj,title, url, id, w, h) {
            var id1=obj.parentNode.parentNode.childNodes[1].innerHTML;
            id11=id1;
            var admin_name1=obj.parentNode.parentNode.childNodes[2].innerHTML;
            admin_name11=admin_name1;

            layer_show(title, url, w, h);
        }
        /*用户-删除*/
        function member_del(obj, id) {
            var x1 = confirm('确认要删除吗？');
            if (x1 == true) {
                var x=obj.parentNode.parentNode.childNodes[1].innerHTML;
                $.ajax({
                    type: 'POST',
                    url: 'deleteUser',
                    data: {
                        "id":x
					},
                    success: function (data) {
                        if (data === "1") {
                            $(obj).parents("tr").remove();
                            var num = document.getElementById("datanumber");
                            num.innerHTML-= 1;
                            layer.alert('已删除!', {icon: 1, time: 1000});
                        }
                    },
                    error: function (data) {
                        console.log(data.msg);
                    },
                });
            }
        }
</script>
</body>
</html>