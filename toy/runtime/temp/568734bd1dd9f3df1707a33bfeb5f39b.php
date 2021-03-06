<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp64\www\toy\public/../application/index\view\user\mess.html";i:1554522713;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>汕大统计</title>
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>css/style.css">

    <script src="<?php echo \think\Config::get('web_root'); ?>js/echarts.min.js"></script>
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
        top:800px;
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

    }
</style>

<?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
<body style="overflow: auto;background-image: url(<?php echo \think\Config::get('web_root'); ?>images/messbg.jpg); background-size:100%;">

<div class="layui-layout layui-layout-admin" >
    <div class="layui-header ">
        <div class="layui-logo" style="z-index:999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>



        <ul class="layui-nav" style="text-align: center; background: #1c1c1c;">
            <li class="layui-nav-item"><a href="index.html">首页</a></li>
            <li class="layui-nav-item"><a href="news">资讯中心</a></li>
            <li class="layui-nav-item"><a href="zhibiao.html">数据可视化</a></li>
            <li class="layui-nav-item"><a href="demo">解决方案</a></li>  <!要加上解决方案的html!>
            <li class="layui-nav-item"><a href="about.html">关于我们</a></li>
        </ul>
        <ul class="layui-nav  layui-layout-right"  style="background: #1c1c1c;">
            <li class="layui-nav-item  layui-this">
                <a >欢迎您</a>
                <dl class="layui-nav-child">
                    <dd><a href="mess.html">信息管理</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-container test-center" style="top:10px; width: 900px">
        <table class="layui-table layui-text" lay-skin="row" lay-size="lg">
            <colgroup>
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th  colspan="4" style="text-align: center;font-weight: bold">信息查看</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th  colspan="4" style="text-align: center;font-weight: bold">基本信息</th>
            </tr>
            <tr>
                <td style="text-align: right">用户名：</td>
                <td colspan="3"><?php echo $value['admin_name']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">真实姓名：</td>
                <td colspan="3"><?php echo $value['admin_nickname']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">性别：</td>
                <td colspan="3"><?php echo $value['admin_sex']; ?></td>
            </tr>
            <tr>
                <th  colspan="4" style="text-align: center;font-weight: bold">企业信息</th>
            </tr>
            <tr>
                <td style="text-align: right">行业应用：</td>
                <td colspan="3"><?php echo $value['industryApplication']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">主营项目：</td>
                <td colspan="3"><?php echo $value['mainProject']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">网址：</td>
                <td colspan="3"><?php echo $value['website']; ?></td>
            </tr>
            <tr>
                <th  colspan="4" style="text-align: center;font-weight: bold">联系信息</th>
            </tr>
            <tr>
                <td style="text-align: right">所在地区：</td>
                <td colspan="3"><?php echo $value['location']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">详细地址：</td>
                <td colspan="3"><?php echo $value['locationDetail']; ?></td>
            </tr>
            <tr>
                <td style="text-align: right">邮箱：</td>
                <td colspan="3"><?php echo $value['admin_email']; ?></td>
            </tr>
            </tbody>
        </table>
        <div class="btncenter" style="margin-top: 20px">
            <button class="layui-btn"  onclick="changeMess()">修改信息</button>
        </div>
    </div>





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

    function changeMess()
    {
        window.location.href='change';
    }

</script>

</body>
<?php endforeach; endif; else: echo "" ;endif; ?>
</html>