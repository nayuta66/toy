<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wamp64\www\toy\public/../application/index\view\demo\kehufenxi.html";i:1554018204;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>客户分析</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css" media="all">
    <script src="<?php echo \think\Config::get('web_root'); ?>javascript/echarts/echarts.js"></script>
    <script src="<?php echo \think\Config::get('web_root'); ?>javascript/echarts/macarons.js"></script>
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
<style>
    .layui-bg-blue {
        background-color: #2f4056 !important;
    }
    .layui-nav-tree .layui-nav-child dd.layui-this, .layui-nav-tree .layui-nav-child dd.layui-this a, .layui-nav-tree .layui-this, .layui-nav-tree .layui-this>a, .layui-nav-tree .layui-this>a:hover {
        background-color: #007ddb;
        color: #fff;
    }
</style>
<body style="background-color:#F2F2F2;">

<ul class="layui-nav layui-bg-blue">
    <li class="layui-nav-item"><b>STU玩具可视化</b></li>
    <li class="layui-nav-item"><a href="jieshao.html">解决方案介绍</a></li>
    <li class="layui-nav-item layui-this"><a href="shishijiankong.html">解决方案demo</a></li>
    <li class="layui-nav-item"><a href="user">返回主页</a></li>
    <form action="indexjiejue.html" style="float: right; margin-top: 10px;">
        <button class="layui-btn layui-btn-radius" style="background-color: #007ddb">申请demo</button>
    </form>
</ul>

<div class="layui-row">
    <div class="layui-col-xs2">

        <div style="margin-left:5px">
            <br>
            <ul class="layui-nav layui-nav-tree layui-bg-blue layui-inline" lay-filter="chuizhi">
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">实时监控</a>
                    <dl class="layui-nav-child">
                        <dd><a href="shishijiankong.html#one">销量监控</a></dd>
                        <dd><a href="shishijiankong.html#two">库存监控</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">商品销量走势</a>
                    <dl class="layui-nav-child">
                        <dd><a href="shangpinxiaoliang.html#one">产品生命周期</a></dd>
                        <dd><a href="shangpinxiaoliang.html#two">促销活动效果</a></dd>
                        <dd><a href="shangpinxiaoliang.html#three">预测热销产品</a></dd>
                        <dd><a href="shangpinxiaoliang.html#four">制定订货计划</a></dd>
                        <dd><a href="shangpinxiaoliang.html#five">制定每周目标</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">各渠道营销策略</a>
                    <dl class="layui-nav-child">
                        <dd><a href="gequdao.html#one">各平台销售数量</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">客户分析</a>
                    <dl class="layui-nav-child">
                        <dd><a href="#one">进店人数</a></dd>
                        <dd><a href="#two">每日新老客户占比</a></dd>
                        <dd><a href="#three">购买商品结构</a></dd>
                        <dd><a href="#four">客户所在地区</a></dd>
                    </dl>
                </li>
            </ul>
        </div>

    </div>
    <div class="layui-col-xs10">

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-xs12">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                                <legend><b>客户分析</b></legend>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-xs12">
                    <div class="layui-card">
                        <div class="layui-card-header">
                            <a name="one"></a>
                            <div style="font-size:16px"><b>进店人数</b></div>
                        </div>
                        <div class="layui-card-body">
                            <div id="jindianrenshu" style="width:600px;height:400px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/jindianrenshu.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">

                <div class="layui-col-xs12">
                <div class="layui-card">
                    <div class="layui-card-header">
                        <a name="two"></a>
                        <div style="font-size:16px"><b>每日新老客户占比</b></div>
                    </div>
                </div>
                </div>

                <div class="layui-col-xs6">
                    <div class="layui-card">
                        <div class="layui-card-body">

                            <div id="xinlaokehu" style="weight:400px;height:250px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/echarts/china.js"></script>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/xinlaokehu.js"></script>

                        </div>
                    </div>
                </div>

                <div class="layui-col-xs6">
                    <div class="layui-card">
                        <div class="layui-card-body">

                            <div id="xinlaokehu2" style="weight:400px;height:250px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/xinlaokehu2.js"></script>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">

                <div class="layui-col-xs12">
                    <div class="layui-card">
                        <div class="layui-card-header">
                            <a name="three"></a>
                            <div style="font-size:16px"><b>购买商品结构</b></div>
                        </div>
                    </div>
                </div>

                <div class="layui-col-xs6">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <div id="shangpinjiegou1" style=" weight:400px;height:250px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/shangpinjiegou1.js"></script>
                        </div>
                    </div>
                </div>

                <div class="layui-col-xs6">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <div id="shangpinjiegou2" style="weight:400px;height:250px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/shangpinjiegou2.js"></script>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">

                <div class="layui-col-xs12">
                    <div class="layui-card">
                        <div class="layui-card-header">
                            <a name="four"></a>
                            <div style="font-size:16px"><b>客户所在地区</b></div>
                        </div>

                        <div class="layui-card-body">
                            <div id="kehufenbu" style="height:600px;margin: auto"></div>
                            <script src="<?php echo \think\Config::get('web_root'); ?>javascript/kehufenxi/kehufenbu.js"></script>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--此处继续加面板上一层-->

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

<script src="<?php echo \think\Config::get('web_root'); ?>layui/layui.js" charset="utf-8"></script>
<script>
    layui.use(['util', 'form', 'layedit', 'laydate'], function(){
        var util = layui.util
            ,form = layui.form
            ,layer = layui.layer;

        //固定块
        util.fixbar({
            bar1: true
            ,bar2: true
            ,css: {right: 50, bottom: 100}
            ,bgcolor: '#393D49'
            ,click: function(type){
                if(type === 'bar1'){
                    layer.msg('添加微信：stustustu')
                } else if(type === 'bar2') {
                    layer.msg('反馈客服：13223455432')
                }
            }
        });

    });
</script>
<script>
    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function(elem){
            //console.log(elem)
            layer.msg(elem.text());
        });
    });
</script>
<script>
    layui.use('element', function(){
        var $ = layui.jquery
            ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

        //触发事件
        var active = {
            tabAdd: function(){
                //新增一个Tab项
                element.tabAdd('demo', {
                    title: '新选项'+ (Math.random()*1000|0) //用于演示
                    ,content: '内容'+ (Math.random()*1000|0)
                    ,id: new Date().getTime() //实际使用一般是规定好的id，这里以时间戳模拟下
                })
            }
            ,tabDelete: function(othis){
                //删除指定Tab项
                element.tabDelete('demo', '44'); //删除：“商品管理”


                othis.addClass('layui-btn-disabled');
            }
            ,tabChange: function(){
                //切换到指定Tab项
                element.tabChange('demo', '22'); //切换到：用户管理
            }
        };

        $('.site-demo-active').on('click', function(){
            var othis = $(this), type = othis.data('type');
            active[type] ? active[type].call(this, othis) : '';
        });
    });
</script>

</body>
</html>