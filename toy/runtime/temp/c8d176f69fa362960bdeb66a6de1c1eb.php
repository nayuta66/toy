<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"C:\wamp64\www\toy\public/../application/index\view\cms\data.html";i:1554630182;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
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
    <title>数据管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 玩具数据中心 <span class="c-gray en">&gt;</span> 数据管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <form id="searchuser">
            日期范围：
            <input type="text" onfocus="WdatePicker()" id="datemin" name="datemin" class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker()" id="datemax" name="datemax" class="input-text Wdate" style="width:120px;">
            <input type="text" class="input-text" style="width:250px" placeholder="输入玩具名称，价格，厂商所在地" id="toyvalue" name="toyvalue">
            <button type="button" class="btn btn-success radius" id="toybtn" name=""><i class="Hui-iconfont">&#xe665;</i> 搜数据</button>
        </form>
    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a id="delete" href="javascript:;" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r">共有数据：<strong id="datanumber"></strong> 条</span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="checkbox0" value=""></th>
                <th width="200">玩具名称</th>
                <th width="40">价格</th>
                <th width="150">店铺</th>
                <th width="100">城市</th>
                <th width="70">销量</th>
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
        url:"data",
        success: function (data) {
        },
        error: function (xhr) {
            alert("请求失败");
        }
    });
    $.ajax({
        type:"post",
        url:"data1",
        success: function (data1) {
            var data=JSON.parse(data1);
            var $td = "<td class=\"td-manage\"><a title=\"编辑\" href=\"javascript:;\" onclick=\"data_edit(this,'编辑','data_edit.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a><a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
            for (var i=0;i<data.length;i++) {
                var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '<td>' + data[i].name + '</td>' + '<td>' + data[i].price + '</td>' + '<td>' + data[i].store+ '</td>' + '<td>' + data[i].city + '</td>' + '<td>' + data[i].sell + '</td>'+ $td +'</tr>');
                $("#tbd").append($tr);
            }
            var num=document.getElementById("datanumber");
            num.innerHTML=data.length;
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
                type: 'POST',
                url: 'deleteToys',
                data:{
                    "arr1":arr
                },
                success: function (data) {
                    if (data === "1") {
                        for (var i = checkbox.length - 1; i >= 0; i--) {
                            if (checkbox[i].checked == true) {
                                checkbox[i].parentNode.parentNode.remove();
                            }
                        }
                        var num = document.getElementById("datanumber");
                        num.innerHTML -= length;
                        layer.alert('已删除!', {icon: 1, time: 1000});
                    }
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        }
    };
    var btn = document.getElementById("toybtn");
    btn.onclick=function () {
        $.ajax({
            type:"post",
            url:"findToy",
            data:{
                "datemin": document.getElementById("datemin").value,
                "datemax": document.getElementById("datemax").value,
                "toyvalue": document.getElementById("toyvalue").value
            },
            success: function (data1) {
                var data=JSON.parse(data1);
                var tbd = document.getElementById("tbd");
                tbd.innerHTML = "";
                // var str=data.responseText;
                // var res=eval("("+str+")");
                var $td = "<td class=\"td-manage\"><a title=\"编辑\" href=\"javascript:;\" onclick=\"data_edit(this,'编辑','data_edit.html','4','','510')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a><a title=\"删除\" href=\"javascript:;\" onclick=\"member_del(this,'1')\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a></td>";
                if (data === "1") {
                    for (var i = 0; i < data.length; i++) {
                        var $tr = $('<tr class="text-c"><td><input type="checkbox" value="" name="checkbox"></td>' + '</td>' + '<td>' + data[i].name + '</td>' + '<td>' + data[i].price + '</td>' + '<td>' + data[i].store + '</td>' + '<td>' + data[i].city + '</td>' + '<td>' + data[i].sell + '</td>' + $td + '</tr>');
                        $("#tbd").append($tr);
                    }
                    $("#tbd").append($tr);
                }else {
                    alert("找不到数据");
                }
            },
            error: function (xhr) {
                alert("请求失败");
            }
        })
    };
</script>

<script type="text/javascript">

    /*数据-编辑*/
    function data_edit(obj,title, url, id, w, h) {
        var toyname1=obj.parentNode.parentNode.childNodes[1].innerHTML;
        toyname11=toyname1;
        var price1=obj.parentNode.parentNode.childNodes[2].innerHTML;
        price11=price1;
        var store1=obj.parentNode.parentNode.childNodes[3].innerHTML;
        store11=store1;
        var address1=obj.parentNode.parentNode.childNodes[4].innerHTML;
        address11=address1;
        var sell1=obj.parentNode.parentNode.childNodes[5].innerHTML;
        sell11=sell1;
        layer_show(title, url, w, h);
    }


    /*数据-删除*/
    function member_del(obj, id) {
        var x = confirm('确认要删除吗？');
        if (x == true) {
            var x=obj.parentNode.parentNode.childNodes[1].innerHTML;
            $.ajax({
                type: 'POST',
                url: 'deleteToy',
                data:{
                  "id":x
                },
                success: function (data) {
                    if(data==="1"){
                    $(obj).parents("tr").remove();
                    var num=document.getElementById("datanumber");
                    num.innerHTML-=1;
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