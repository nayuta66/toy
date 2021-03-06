<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\toy\public/../application/index\view\cms\addnews.html";i:1554895756;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>新闻添加页面</title>
    <link rel="shortcut icon" href="../../../../public/static/index/img/logo.jpg" type="image/x-icon">
    <link href="../../../../public/static/index/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../../public/static/index/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../../../../public/static/index/css/weather-icons.min.css" rel="stylesheet" />
    <link id="beyond-link" href="../../../../public/static/index/css/beyond.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->

<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">

        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <ul class="nav sidebar-menu">
                <li>
                    <a href="#">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text">后台首页</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon glyphicon-book"></i>
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="listnews">
                                <span class="menu-text">文章列表</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="addnews">
                                <span class="menu-text">文章添加</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;文章管理
                    </li>
                    <li>文章添加</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget radius-bordered">
                            <div class="widget-header bordered-bottom bordered-themeprimary">
                                <span class="widget-caption">文章添加</span>
                            </div>
                            <div class="widget-body">
                                <form action="" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="tittle" class="control-label col-sm-2">新闻标题</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tittle" name="tittle" placeholder="新闻标题" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="author" class="control-label col-sm-2">作者</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="author" name="author" placeholder="作者名字" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="control-label col-sm-2">新闻概要</label>
                                        <div class="col-sm-6">
                                            <textarea name="desc" id="desc" cols="30" rows="5" class=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tag" class="col-sm-2 control-label no-padding-right">新闻标签</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="tag" name="tag" placeholder="标签">
                                            <span class="help-block">标签以“，”来分隔</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="control-label col-sm-2">新闻内容</label>
                                        <div class="col-sm-6">
                                            <textarea name="content" id="content" cols="30" rows="10" class=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <button type="submit" class="btn btn-primary" id="addnews">添加</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>
<script src="../../../../public/static/index/js/jquery.min.js"></script>
<script src="../../../../public/static/index/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../../../public/static/index/js/skins.min.js"></script>
<!--Basic Scripts-->

<script src="../../../../public/static/index/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="../../../../public/static/index/js/beyond.js"></script>
<script src="../../../../public/static/index/lib/ueditor/ueditor.config.js"></script>
<script src="../../../../public/static/index/lib/ueditor/ueditor.all.js"></script>
<script>
    UE.getEditor('content');
</script>
<script>
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');

    });
</script>
<script>
    $(function () {
        UE.getEditor('content');
        $('#addnews').click(function () {
           $.ajax({
               url:"addnews",
               type:'post',
               data:$('form').serialize(),
               dataType:'json',
               success:function (data) {
                           location.href = 'listnews';
               }
           }) ;
        });

    });
</script>


</body>
<!--  /Body -->
</html>
