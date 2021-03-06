<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\wamp64\www\toy\public/../application/index\view\cms\listnews.html";i:1554895909;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>后台新闻管理</title>
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

                <li class="active">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon glyphicon-book"></i>
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li class="active">
                            <a href="listnews">
                                <span class="menu-text">文章列表</span>
                            </a>
                        </li>
                        <li>
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
                    <li>文章列表</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body" style="width: 90%">
                <a href="addnews" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;添加文章</a>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget">
                            <div class="widget-header">
                                <span class="widget-caption">新闻列表</span>

                            </div>
                            <div class="widget-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>新闻ID</th>
                                        <th>新闻标题</th>
                                        <th>新闻作者</th>
                                        <th>推荐</th>
                                        <th>操作</th>
                                    </tr>
                                    <?php if(is_array($news) || $news instanceof \think\Collection): if( count($news)==0 ) : echo "" ;else: foreach($news as $key=>$vo): ?>
                                    <tr>
                                        <th><?php echo $vo['id']; ?></th>
                                        <th><?php echo $vo['tittle']; ?></th>
                                        <th><?php echo $vo['author']; ?></th>
                                        <th><?php if($vo['is_top'] ==1): ?>已推荐<?php else: ?>未推荐<?php endif; ?></th>
                                        <td>
                                            <?php if($vo['is_top'] ==1): ?>
                                            <a href="topnews?id=<?php echo $vo['id']; ?>" class="btn btn-sm btn-danger news-top" >取消推荐</a>
                                            <?php else: ?>
                                            <a href="topnews?id=<?php echo $vo['id']; ?>" class="btn btn-sm btn-warning news-top" >推荐</a>
                                            <?php endif; ?>
                                            <a href="editnews?id=<?php echo $vo['id']; ?>" class="btn btn-sm btn-danger">编辑</a>
                                            <a href="delnews?id=<?php echo $vo['id']; ?>" class="btn btn-sm btn-danger">删除</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </thead>
                                </table>
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

<script src="../../../../public/static/index/js/skins.min.js"></script>
<!--Basic Scripts-->
<script src="../../../../public/static/index/js/jquery.min.js"></script>
<script src="../../../../public/static/index/js/bootstrap.min.js"></script>
<script src="../../../../public/static/index/js/slimscroll/jquery.slimscroll.min.js"></script>
<!--Beyond Scripts-->
<script src="../../../../public/static/index/js/beyond.js"></script>



</body>
<!--  /Body -->
</html>
