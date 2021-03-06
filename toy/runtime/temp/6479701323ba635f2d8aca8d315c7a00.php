<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp64\www\toy\public/../application/index\view\user\about.html";i:1554522924;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>汕大统计</title>
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css">
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_root'); ?>css/about.css">
</head>
<style>
    .test-center{
        text-align: center;
    }

    .ending{
        height: 400px;
        width: 100%;
        color: #777777;
        position:absolute;
        background: #efefef;
        top:650px;
    }
    .test{
        position: center;
        top:40px;
        font-weight: lighter;
        font-size: 14px;
        line-height: 40px;
        color: #777777;
    }
    .btncenter{
        position: absolute;
        top:500px;
        right: 810px;
    }
</style>

<body style="overflow: auto;">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header ">
        <div class="layui-logo" style="z-index: 999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>

        <ul class="layui-nav" style="text-align: center; background: #1c1c1c;">
            <li class="layui-nav-item"><a href="index.html">首页</a></li>
            <li class="layui-nav-item"><a href="news">资讯中心</a></li>
            <li class="layui-nav-item"><a href="zhibiao.html">数据可视化</a></li>
            <li class="layui-nav-item"><a href="demo">解决方案</a></li>
            <li class="layui-nav-item layui-this"><a href="about.html">关于我们</a></li>
        </ul>
        <ul class="layui-nav  layui-layout-right"  style="background: #1c1c1c;">
            <li class="layui-nav-item">
                <a >欢迎您</a>
                <dl class="layui-nav-child">
                    <dd><a href="mess.html">信息管理</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div>
<div class="nav">
    <div class="layui-container" style="height: 500px;background-image: url(<?php echo \think\Config::get('web_root'); ?>images/building.jpg);width: 100%">
        <br><br><br><br>
        <h3  style="margin-top: 45px;text-shadow:2px 2px 0px #000000;font-weight:bold;letter-spacing:4px;font-size: 36px;line-height:60px;text-align: center;color: #FFFFFF;">
            “  数据科学家收集数据，<br>把数据融入到易懂的形式中，<br>
            让数据讲故事，并且把故事讲给别人听。”<br><br><br>
            <h4 style="font-size: 28px;text-shadow:2px 2px 0px #000000;;text-align: center;font-weight:bold;color: #FFFFFF;">–Mike Loukides, O’Reilly Media的副总裁</h4>
        </h3>
        <br><br><br><br>

    </div>



    <div class="layui-tab-content">
        <div class="layui-container" style=" /*flex 布局*/
 display: flex;
 /*实现垂直居中*/
 align-items: center;
 /*实现水平居中*/
 justify-content: center;

 text-align: justify;

 height:700px;

 margin:0 auto;
">
            <br>
            <a style="width: 40px;font-size: 40px;font-weight: bold;color: #585858">关于我们</a>
            <div style="margin-left: 100px">
                <ul class="layui-timeline">
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis" style="font-size: 24px">&#xe60e;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title"  style="font-size: 24px">2017年11月</h3>
                            <br>
                            <h4 style="font-size: 16px">
                                关于玩具的大数据分析平台开始第一阶段制作。
                            </h4 >
                            <br>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis" style="font-size: 24px">&#xe60e;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title" style="font-size: 24px">2018年1月</h3>
                            <br>
                            <h4 style="font-size: 16px">本平台开始第二阶段制作。</h4 >
                            <br>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis" style="font-size: 24px">&#xe60e;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title"  style="font-size: 24px">2018年9月</h3>
                            <br>
                            <h4 style="font-size: 16px">
                                本平台开始第三阶段制作。
                            </h4 >
                            <br>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis" style="font-size: 24px">&#xe60e;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title"  style="font-size: 24px">2019年1月</h3>
                            <br>
                            <h4 style="font-size: 16px">
                                本平台开始第四阶段制作。
                            </h4 >
                            <br>
                        </div>
                    </li>
                    <li class="layui-timeline-item">
                        <i class="layui-icon layui-timeline-axis" style="font-size: 24px">&#xe60e;</i>
                        <div class="layui-timeline-content layui-text">
                            <h3 class="layui-timeline-title"  style="font-size: 24px">2019年4月</h3>
                            <br>
                            <h4 style="font-size: 16px">
                                项目完工。
                            </h4 >
                            <br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>




    <footer style="background: #efefef">

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


<script src="../../../../public/static/layui/layui.js"></script>
<script type="text/javascript" src="../../../../public/static/js/jquery-1.9.0.min.js"></script>

<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<script>

    layui.use(['carousel','element','layer','laydate','form','jquery'], function() {
        var element = layui.element;
        var form = layui.form;
        layer = layui.layer;
        var carousel = layui.carousel;
        var laydate = layui.laydate;
        $ = layui.jquery;
    });


</script>

</body>

</html>