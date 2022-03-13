<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\toy\public/../application/index\view\toynews\newsindex.html";i:1554523399;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>新闻资讯</title>
    <link rel="stylesheet" href="../../../../public/static/layui/css/layui.css" media="all">
</head>
<style>
    .sp{
        width: 80px;
        color: #5c5c5c;
    }
    .topic{
        text-align: center;
        align-content: center;
        color: #f9f9f9;
    }
    .test{
        position: center;
        top:40px;
        font-weight: lighter;
        font-size: 14px;
        line-height: 40px;
        color: #777777;
        text-align: center;
    }

</style>
<body style="overflow: auto;background: #f1f1f1;font-family: 幼圆;">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header " style="background: #ffffff">
        <div class="layui-logo" style="font-size: 20px ; color:#000000; line-height:20px; top: 10px;font-weight: bold">汕大统计<br/><p style="font-weight: normal;font-size: 14px">玩具数据分析平台<p></div>
        <ul class="layui-nav" style="text-align: center" >
            <li class="layui-nav-item">
                <a  style="color: #0C0C0C;font-size: 16px" href="user">首页</a>
            </li>
            <li class="layui-nav-item">
                <a  style="color: #0C0C0C;font-size: 16px" href="zhibiao">数据可视化</a>
            </li>
            <li class="layui-nav-item">
                <a  style="color: #0C0C0C;font-size: 16px" href="demo">解决方案</a>
            </li>
            <li class="layui-nav-item">
                <a  style="color: #0C0C0C;font-size: 16px" href="about">关于我们</a>
            </li>
        </ul>
    </div>

    <div style="height: 300px;background: #0078d6">
        <br/> <br/> <br/> <br/> <br/> <br/>
        <div>
            <p class="topic" style="font-size: 46px;font-weight: bold"> 新闻资讯中心</p>
            <br/>
            <p class="topic" style="font-size: 26px;font-family: 仿宋;">玩具新闻实时更新，热点资讯快人一步</p>
            <p class="topic" style="font-size: 20px;font-family: 仿宋;">©汕大统计玩具数据分析平台</p>
            <br/><br/><br/>
        </div>
    </div>
    <br/><br/><br/>
    <div class="layui-container">
        <form action="search" class="layui-form topic">
            <div class="layui-form-item">
                <div class="layui-input-inline" style="width: 55%">
                    <input type="text"  class="layui-input" style="height: 50px;margin-left: 200px;font-size: 20px" id="search" name="keyword" placeholder="请输入关键词进行搜索" />
                </div>
                <div class="layui-form-pane">
                    <button class="layui-btn layui-btn-lg; layui-btn-primary " style="background: #0078d5;color: #ffffff;height: 50px;font-size: 20px;font-weight: bold ">搜索</button>
                </div>
            </div>
        </form>
    </div>
    <br/><br/><br/>
<div class="layui-container" style="width: 80%">

    <div class="layui-row layui-col-space30" >
        <div class="layui-col-md9">
            <div class="layui-card">
                <div class="layui-card-header" style="font-size: 20px;color: #0078d6;font-weight: bold">//  玩具新闻列表</div>
                <br/>
                <?php if(is_array($data) || $data instanceof \think\Collection): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
                <div class="layui-card-body">
                    <a href="newspage?id=<?php echo $vo['id']; ?>" class="title" style="font-size: 18px;font-weight: bold;color: #4c4c4c"><?php echo $vo['tittle']; ?></a>
                    <div class="info" style="margin-top: 10px">
                        <span class="sp">作者：<?php echo $vo['author']; ?>&emsp; </span>
                        <span class="sp">阅读：<?php echo $vo['click']; ?> &emsp;</span>
                        <span class="sp">评论：<?php echo $vo['comm_num']; ?></span>
                    </div>
                    <hr/>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
        <div class="layui-col-md3">
          <div class="layui-card">
            <div class="layui-card-header" style="font-size: 20px; color: #0078d6;font-weight: bold">//  推荐新闻</div>
              <br/>
                <div class="layui-card-body">
                    <?php if(is_array($data) || $data instanceof \think\Collection): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): if(($vo['is_top'] ==1)): ?>
                    <a href="newspage?id=<?php echo $vo['id']; ?>" class="title" style="font-size: 16px"><?php echo $vo['tittle']; ?><hr/></a>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
    <br/><br/><br/><br/>
    <footer style="background: #f7f7f7">

        <div class="layui-row">
            <div class="layui-col-md3 test-center test">
                <p style="font-weight: bold;">产品与服务</p>
                <p>玩具统计</p>
                <p>零售解决方案</p>
                <p>汕大数据市场</p>
                <br/>
            </div>
            <div class="layui-col-md3 test-center test ">
                <p style="font-weight: bold;">开发者中心</p>
                <p>自助开通数据导出服务</p>
                <p>统计开放平台</p>
                <br/><br/>
            </div>
            <div class="layui-col-md3 test-center test">
                <p style="font-weight: bold;">文档中心</p>
                <p>汕大统计白皮书</p>
                <p>帮助中心</p>
                <br/><br/>
            </div>
            <div class="layui-col-md3  test-center test">
                <p style="font-weight: bold;">关于我们</p>
                <p>联系我们</p>
                <p>资助我们</p>
                <p>打高一点分</p>
                <br/>
            </div>
            <hr/>
            <div class="test-center test" style="top:20px; line-height: 30px;">
                <p>汕大玩具数据平台</p>
                <p>售前咨询：123456789@stu.edu.cn</p>
                <p>售后咨询：984321@stu.edu.cn</p>
                <p>©2018 STU</p>
            </div>
        </div>

    </footer>
</div>
        <script type="text/javascript" src="../../../../public/static/js/jquery-1.9.0.min.js"></script>
        <script src="../../../../public/static/layui/layui.js"></script>
</body>
</html>