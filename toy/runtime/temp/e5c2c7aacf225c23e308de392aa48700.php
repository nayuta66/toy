<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wamp64\www\toy\public/../application/index\view\user\indexshuju.html";i:1551862395;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>css/shangxin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_root'); ?>layui/css/layui.css">
    <script type="text/javascript" src="../res/layui/layui.js"></script>
    <script src="<?php echo \think\Config::get('web_root'); ?>echart/echarts.js"></script>
    <script src="<?php echo \think\Config::get('web_root'); ?>echart/echarts-wordcloud.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div class="site-nav-bg"></div>

<div class="header">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
        <legend>玩具数据分析</legend>
    </fieldset>
</div>

<div class="content content-nav-base commodity-content">

    <!--上-->
    <div class="main-nav">
        <div class="inner-cont0">
            <div class="inner-cont1 w1200">
                <div class="inner-cont2">
                    <a href="indexshuju.html" class="active">欢迎您！</a>
                    <a href="zhibiao.html">指标分析</a>
                    <a href="wenben.html">文本分析</a>
                </div>
            </div>
        </div>
    </div>

    <div class="commod-cont-wrap">
        <div class="commod-cont w1200 layui-clear">

                        <div style="background-color:#FFF">

                            <hr><hr>
                            <!--欢迎-->
                            <div class="text">
                                <p style="text-align:center"><strong>欢迎</strong></p>
                                <p style="text-align:center">欢迎你！</p>
                            </div>
                            <hr>

                            <!--以上是各主模块-->
                            <hr>

                        </div>

        </div>
    </div>

</div>

<script>

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