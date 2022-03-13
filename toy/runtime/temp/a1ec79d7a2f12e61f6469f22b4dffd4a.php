<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\toy\public/../application/index\view\user\wenben.html";i:1551967620;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文本分析</title>
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>css/shangxin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css">
    <script type="text/javascript" src="<?php echo \think\Config::get('web_root'); ?>layui/layui.js"></script>
    <script src="<?php echo \think\Config::get('web_root'); ?>echart/echarts.js"></script>
    <script src="<?php echo \think\Config::get('web_root'); ?>echart/echarts-wordcloud.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        top:900px;
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
<style>
    .layui-nav .layui-this:after, .layui-nav-tree :after {
        background-color: #6488b7;
    }
</style>
<body class="layui-layout-body" style="overflow :auto">
<div class="layui-layout layui-layout-admin main-content">
<div class="layui-header ">
    <div class="layui-logo" style="z-index:999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>

    <ul class="layui-nav" style="text-align: center; background: #2f4056;">
        <li class="layui-nav-item"><a href="index.html">首页</a></li>
        <li class="layui-nav-item layui-this"><a href="wenben.html">数据可视化</a></li>
        <li class="layui-nav-item"><a href="demo">解决方案</a></li>  <!要加上解决方案的html!>
        <li class="layui-nav-item"><a href="about.html">关于我们</a></li>
    </ul>

    <ul class="layui-nav  layui-layout-right"  style="background: #2f4056;">
        <li class="layui-nav-item">
            <a >欢迎您</a>
            <dl class="layui-nav-child">
                <dd><a href="mess.html"> 信息管理</a></dd>
            </dl>
        </li>
    </ul>
</div>
</div>


<div class="content content-nav-base commodity-content">

    <div class="main-nav">
        <div class="inner-cont0" style="height: 45px">
            <div class="inner-cont1 w1200">
                <div class="inner-cont2" style="margin:0 auto;width:280px;margin-top: 10px;">
                    <a href="zhibiao.html"style="font-size: 16px">指标分析</a>
                    <a href="wenben.html" class="active"  style="font-size: 16px">文本分析</a>
                </div>
            </div>
        </div>
    </div>

    <div class="commod-cont-wrap">
        <div class="commod-cont w1200 layui-clear">

                        <div style="background-color:#FFF">

                            <hr><hr>
                            <!--1st-->
                            <div class="text">
                                <p style="text-align:left">&nbsp;&nbsp;&nbsp;<strong>评论或文章一</strong></p>
                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="wenbenciyun" style="margin:auto;width: 600px;height:400px;"></div>
                                <script type="text/javascript">
                                    // 基于准备好的dom，初始化echarts实例
                                    var myChart = echarts.init(document.getElementById('wenbenciyun'));
                                    // 指定图表的配置项和数据
                                    var option = {
                                        title:{
                                            text:"文章热词",
                                            subtext: '聚焦细分领域，中小玩具企业突围而出',
                                        },
                                        tooltip: {},
                                        series: [{
                                            type: 'wordCloud',
                                            gridSize: 20,
                                            sizeRange: [12, 50],
                                            rotationRange: [0, 0],
                                            shape: 'circle',
                                            textStyle: {
                                                normal: {
                                                    color: function() {
                                                        return 'rgb(' + [
                                                            Math.round(Math.random() * 160),
                                                            Math.round(Math.random() * 160),
                                                            Math.round(Math.random() * 160)
                                                        ].join(',') + ')';
                                                    }
                                                },
                                                emphasis: {
                                                    shadowBlur: 10,
                                                    shadowColor: '#333'
                                                }
                                            },
                                            data: [{
                                                name: '细分领域',
                                                value: 7,
                                                textStyle: {
                                                    normal: {
                                                        color: 'black'
                                                    },
                                                    emphasis: {
                                                        color: 'red'
                                                    }
                                                }
                                            }, {
                                                name: '艺术',
                                                value: 3
                                            }, {
                                                name: '工艺',
                                                value: 3
                                            }, {
                                                name: '建筑模型',
                                                value: 3
                                            }, {
                                                name: '学前玩具',
                                                value: 6
                                            }, {
                                                name: '遥控玩具',
                                                value: 7
                                            }, {
                                                name: '游戏谜题',
                                                value: 1
                                            }, {
                                                name: '娃娃',
                                                value: 8
                                            }, {
                                                name: '科技',
                                                value: 4
                                            }, {
                                                name: '教育',
                                                value: 5
                                            }, {
                                                name: '益智',
                                                value: 3
                                            }]
                                        }]
                                    };
                                    // 使用刚指定的配置项和数据显示图表。
                                    myChart.setOption(option);
                                </script>
                            </div>

                            <hr><hr>
                            <!--2nd-->
                            <div class="text">
                                <p style="text-align:left">&nbsp;&nbsp;&nbsp;<strong>评论或文章二</strong></p>
                                <p>……</p>
                            </div>

                            <hr><hr>
                            <!--3rd-->
                            <div class="text">
                                <p style="text-align:left">&nbsp;&nbsp;&nbsp;<strong>……</strong></p>
                                <p>……</p>
                            </div>

                            <hr>
                            <!--以上是各主模块-->
                            <hr>

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

<script>

    layui.use(['carousel','element','layer','laydate','form','jquery'], function() {
        var element = layui.element;
        var form = layui.form;
        layer = layui.layer;
        var carousel = layui.carousel;
        var laydate = layui.laydate;
        $ = layui.jquery;
    });
    layui.config({
        base: '../res/static/js/util/' //你存放新模块的目录，注意，不是layui的模块目录
    }).use(['mm','laypage','jquery'],function(){
        var laypage = layui.laypage,$ = layui.$,
            mm = layui.mm;
        laypage.render({
            elem: 'demo0'
            ,count: 100 //数据总数
        });


        // 模版引擎导入
        //  var html = demo.innerHTML;
        //  var listCont = document.getElementById('list-cont');
        //  // console.log(layui.router("#/about.html"))
        // mm.request({
        //     url: '../json/commodity.json',
        //     success : function(res){
        //       console.log(res)
        //       listCont.innerHTML = mm.renderHtml(html,res)
        //     },
        //     error: function(res){
        //       console.log(res);
        //     }
        //   })

        $('.sort a').on('click',function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
        $('.list-box dt').on('click',function(){
            if($(this).attr('off')){
                $(this).removeClass('active').siblings('dd').show()
                $(this).attr('off','')
            }else{
                $(this).addClass('active').siblings('dd').hide()
                $(this).attr('off',true)
            }
        })

    });
</script>

</body>
</html>