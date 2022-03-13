<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp64\www\toy\public/../application/index\view\user\data.html";i:1551858912;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>汕大统计</title>
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css" media="all">

    <script src="<?php echo \think\Config::get('web_root'); ?>js/echarts.min.js"></script>
</head>
<style>
    #shadiao {
        margin: 0;
        padding: 0;
        position: center;
        height: 1000px;
    }

    #pieChart {
        margin: 0;
        padding: 0;
        position: center;
        height:700px;
    }

    #paiMing {
        margin: 0;
        padding: 0;
        position: center;
        height:700px;
    }

    .test-center{
        text-align: center;
    }

    .ending{
        height: 400px;
        width: 100%;

        position:absolute;
        background: #efefef;
        top:1450px;
    }
    .test{
        position: center;
        top:40px;
        font-weight: lighter;
        font-size: 14px;
        line-height: 40px;
        color: #777777;
        background: #efefef;
    }
</style>

<?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
<body style="overflow: auto;">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header " style="background: #0C0C0C;">
        <div class="layui-logo" style="font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>



        <ul class="layui-nav" style="position: absolute; left: 41%; background: #0C0C0C;">
            <li class="layui-nav-item"><a href="index.html">首页</a></li>
            <li class="layui-nav-item layui-this"><a href="data.html">产品介绍</a></li>
            <li class="layui-nav-item"><a href="help.html">帮助中心</a></li>
        </ul>
        <ul class="layui-nav  layui-layout-right"  style="background: #0C0C0C;">
            <li class="layui-nav-item">
                <a >欢迎您，<?php echo $value['admin_nickname']; ?></a>
                <dl class="layui-nav-child">
                    <dd><a href="mess.html">个人信息管理</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div id="shadiao"><div id="pieChart"></div>
        <script src="<?php echo \think\Config::get('web_root'); ?>js/pieChart.js" type="text/javascript"></script>

        <div id="paiMing"></div>
        <script src="<?php echo \think\Config::get('web_root'); ?>js/paiMing.js" type="text/javascript"></script></div>





    <div class="test-center ending" style="background: #efefef">

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

    </div>
</div>



<script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>js/jquery-1.9.0.min.js"></script>
<script src="<?php echo \think\Config::get('web_root'); ?>layui/layui.js"></script>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<script>
    var layer;

    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use(['carousel','element','layer'], function(){
        var element = layui.element;
        layer =layui.layer;
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test1'
            ,width: '100%'//设置容器宽度
            ,height: '500px'
            ,arrow: 'none' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });

</script>

</body>
<?php endforeach; endif; else: echo "" ;endif; ?>
</html>