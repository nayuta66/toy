<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\wamp64\www\toy\public/../application/index\view\user\zhibiao.html";i:1554522713;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>指标分析</title>
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
<body>

<div class="layui-layout layui-layout-admin main-content">
    <div class="layui-header ">
        <div class="layui-logo" style="z-index:999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>

        <ul class="layui-nav" style="text-align: center; background: #2f4056;">
            <li class="layui-nav-item"><a href="index.html">首页</a></li>
            <li class="layui-nav-item"><a href="news">资讯中心</a></li>
            <li class="layui-nav-item layui-this"><a href="wenben.html">数据可视化</a></li>
            <li class="layui-nav-item"><a href="demo">解决方案</a></li>
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

    <div class="commod-cont-wrap">
        <div class="commod-cont w1200 layui-clear">

            <!--左-->
            <div class="left-nav" style="position: fixed;">
                <div class="list-box">

                    <dl>
                        <dt>//    导航栏</dt>
                        <dd><a href="#two">贸易往来</a></dd>
                        <dd><a href="#three">热门类目</a></dd>
                        <dd><a href="#four">热门地区</a></dd>
                        <dd><a href="#five">价格分布</a></dd>
                        <dd><a href="#six">销量分布</a></dd>
                        <dd><a href="#seven">销量与价格</a></dd>
                        <dd><a href="#eight">不同期价格销量</a></dd>
                    </dl>

                </div>
            </div>

            <!--右-->
            <div class="right-cont-wrap" style="float: right">
                <div class="right-cont">

                    <div class="cont-list layui-clear" id="list-cont">

                        <div style="background-color:#FFF">


                            <div class="text">
                                <br/>
                                <p style="text-align: center;color: #2f4056; font-size: 30px; font-weight: bold;">行业指数</p><br/>
                                <hr/>
                            </div>
                            <!--贸易往来-->
                            <div class="text">
                                <a name="two"></a>
                                <p style="text-align:center"><strong><br/>贸易往来</strong></p>
                                <p style="text-align:center">商品名热词<br/></p>
                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="ciyun" style="margin-left: 120px">
                                    <img src="<?php echo \think\Config::get('web_root'); ?>python/pic.png"  alt="可视化词云"/>
                                </div>
                            </div>

                            <hr><hr>
                            <!--热门类目-->
                            <div class="text">
                                <a name="three"></a>
                                <p style="text-align:center;color: #2f4056;"><strong><br/>热门类目</strong></p>
                                <p style="text-align:center;color: #2f4056;">玩具主要材料<br/></p>

                                <!-- <div style="float: left; margin-left: 180px; margin-top: 100px;">
                                    <table border="1" align="center">
                                        <tr><td>关键词</td><td>数目</td></tr>
                                        <tr><td>积木</td><td>998</td></tr>
                                        <tr><td>电动</td><td>432</td></tr>
                                        <tr><td>木制</td><td>1157</td></tr>
                                        <tr><td>仿真</td><td>147</td></tr>
                                        <tr><td>毛绒</td><td>33</td></tr>
                                        <tr><td>模型</td><td>335</td></tr>
                                        <tr><td>金属</td><td>16</td></tr>
                                        <tr><td>幼儿</td><td>315</td></tr>
                                    </table>
                                </div> -->
                                <div>
                                    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                    <div id="remenleimu" style="margin:auto;width: 600px;height:400px;"></div>
                                    <script type="text/javascript">
                                        // 基于准备好的dom，初始化echarts实例
                                        var myChart = echarts.init(document.getElementById('remenleimu'));
                                        // 指定图表的配置项和数据
                                        var option = {
                                            dataset: {
                                                source: [
                                                    [ '销量', 'product'],
                                                    ["<?php echo $typeData['7']['sum']; ?>","<?php echo $typeData['7']['type']; ?>"],
                                                    ["<?php echo $typeData['6']['sum']; ?>","<?php echo $typeData['6']['type']; ?>"],
                                                    ["<?php echo $typeData['5']['sum']; ?>","<?php echo $typeData['5']['type']; ?>"],
                                                    ["<?php echo $typeData['4']['sum']; ?>","<?php echo $typeData['4']['type']; ?>"],
                                                    ["<?php echo $typeData['3']['sum']; ?>","<?php echo $typeData['3']['type']; ?>"],
                                                    ["<?php echo $typeData['2']['sum']; ?>","<?php echo $typeData['2']['type']; ?>"],
                                                    ["<?php echo $typeData['1']['sum']; ?>","<?php echo $typeData['1']['type']; ?>"],
                                                    ["<?php echo $typeData['0']['sum']; ?>","<?php echo $typeData['0']['type']; ?>"]
                                                ]
                                            },
                                            legend:{
                                                data:['销量']
                                            },
                                            tooltip : {
                                                trigger: 'axis',
                                                axisPointer : {            
                                                    type : 'shadow'  
                                                }
                                            },
                                            toolbox: {
                                                feature: {
                                                    dataView: {show: true, readOnly: false},
                                                    magicType: {show: true, type: ['line', 'bar']},
                                                    restore: {show: true},
                                                    saveAsImage: {show: true}
                                                }
                                            },

                                            grid: {containLabel: true},
                                            xAxis: {name: '个数'},
                                            yAxis: {
                                                name:"种类",
                                                type: 'category'
                                                },
                                            series: [
                                                {
                                                    name:"销量",
                                                    type: 'bar',
                                                    encode: {
                                                        x: '个数',
                                                        y: 'product'
                                                    },
                                                    itemStyle:{
                                                        color:"#9999ff"
                                                    }
                                                }
                                            ]
                                        };

                                        // 使用刚指定的配置项和数据显示图表。
                                        myChart.setOption(option);
                                    </script>
                                </div>
                            </div>

                            <hr><hr>
                            <!--热门地区-->
                            <div class="text">
                                <a name="four"></a>
                                <p style="text-align:center;color: #2f4056;"><strong><br/>热门地区<br/></strong></p>

                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="remendiqu" style="margin:auto;width: 600px;height:400px;"></div>
                                <script type="text/javascript">
                                    // 基于准备好的dom，初始化echarts实例
                                    var myChart = echarts.init(document.getElementById('remendiqu'));

                                    // 指定图表的配置项和数据
                                    var option = {
                                        title: {
                                            text: ''
                                        },
                                        tooltip : {
                                                trigger: 'axis',
                                                axisPointer : {            
                                                    type : 'shadow'  
                                                }
                                            },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        xAxis: {
                                            data: ["<?php echo $cityData['0']['city']; ?>","<?php echo $cityData['1']['city']; ?>","<?php echo $cityData['2']['city']; ?>","<?php echo $cityData['3']['city']; ?>","<?php echo $cityData['4']['city']; ?>","<?php echo $cityData['5']['city']; ?>"]
                                        },
                                        yAxis: {
                                           name:"销量"
                                        },
                                        series: [{
                                            name: '玩具销量',
                                            type: 'bar',
                                            data: ["<?php echo $cityData['0']['sum']; ?>","<?php echo $cityData['1']['sum']; ?>","<?php echo $cityData['2']['sum']; ?>","<?php echo $cityData['3']['sum']; ?>","<?php echo $cityData['4']['sum']; ?>","<?php echo $cityData['5']['sum']; ?>"],
                                            itemStyle:{
                                                color:"#BEEDC7"
                                            }
                                        }],
                                        };
                                    // 使用刚指定的配置项和数据显示图表。
                                    myChart.setOption(option);
                                </script>
                            </div>

                            <hr><hr>
                            <!--价格分布-->
                            <div class="text">
                                <a name="five"></a>
                                <p style="text-align:center;color: #2f4056;"><strong><br/>价格分布</strong></p>
                                <p style="text-align:center;color: #2f4056;">价格分布区间<br/></p>
                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="jiagezhuxing" style="margin:auto;width: 600px;height:400px;"></div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('jiagezhuxing'));
                                    var option = {
                                        title: {
                                            text: ''
                                        },
                                        tooltip : {
                                                trigger: 'axis',
                                                axisPointer : {            
                                                    type : 'shadow'  
                                                }
                                            },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        legend: {
                                            data:['数目']
                                        },
                                        xAxis: {
                                            name:"元",
                                            data: ["0-200","201-400","401-600","601-800","801-1000",">1000"]
                                        },
                                        yAxis: {
                                            name:"玩具个数"
                                        },
                                        series: [{
                                            name: '数目',
                                            type: 'bar',
                                            data: ["<?php echo $Pricearray['0']; ?>","<?php echo $Pricearray['1']; ?>","<?php echo $Pricearray['2']; ?>","<?php echo $Pricearray['3']; ?>","<?php echo $Pricearray['4']; ?>","<?php echo $Pricearray['5']; ?>"],
                                            itemStyle:{
                                                color:"#BEEDC7"
                                            }
                                    }]
                                    };
                                    myChart.setOption(option);
                                </script>

                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="jiagebing" style="margin:auto;width: 600px;height:400px;"></div>
                                <script type="text/javascript">
                                    // 基于准备好的dom，初始化echarts实例
                                    var myChart = echarts.init(document.getElementById('jiagebing'));

                                    // 指定图表的配置项和数据
                                    var option = {
                                        title : {
                                            text: '',
                                            x:'center'
                                        },
                                        tooltip : {
                                            trigger: 'item',
                                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                                        },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        legend: {
                                            orient: 'vertical',
                                            left: 'left',
                                            data: ["0-200元","201-400元","401-600元","601-800元","801-1000元",">1000元"]
                                        },
                                        series : [
                                            {
                                                name: '数目',
                                                type: 'pie',
                                                radius : '55%',
                                                center: ['50%', '60%'],
                                        data:[{value:<?php echo $Pricearray['0']; ?>, name:'0-200元'},
                                              {value:<?php echo $Pricearray['1']; ?>, name:'201-400元'},
                                              {value:<?php echo $Pricearray['2']; ?>, name:'401-600元'},
                                              {value:<?php echo $Pricearray['3']; ?>, name:'601-800元'},
                                              {value:<?php echo $Pricearray['4']; ?>, name:'801-1000元'},
                                              {value:<?php echo $Pricearray['5']; ?>, name:'>1000元'}],
                                                itemStyle: {
                                                    emphasis: {
                                                        shadowBlur: 10,
                                                            shadowOffsetX: 0,
                                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }
                                        ]
                                        };
                                        // 使用刚指定的配置项和数据显示图表。
                                        myChart.setOption(option);
                                </script>
                            </div>

                            <hr><hr>
                            <!--销量分布-->
                            <div class="text">
                                <a name="six"></a>
                                <p style="text-align:center;color: #2f4056;"><strong><br/>销量分布</strong></p>
                                <p style="text-align:center;color: #2f4056;">销量分布区间<br/></p>
                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="xiaoliangzhuxing" style="margin:auto;width: 700px;height:400px;"></div>
                                <script type="text/javascript">
                                    var myChart = echarts.init(document.getElementById('xiaoliangzhuxing'));
                                    var option = {
                                        title: {
                                            text: ''
                                        },
                                        tooltip : {
                                            trigger: 'axis',
                                            axisPointer : {            
                                                    type : 'shadow'  
                                                },
                                            formatter: "{a} <br/>{b} : {c} "
                                        },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        legend: {
                                            data:['数目']
                                        },
                                        xAxis: {
                                            name:"元",
                                            data: ["0-50","50-100","100-200","200-500","500-1000",">1000"]
                                        },
                                        yAxis: {
                                            name:"销量"
                                        },
                                        series: [{
                                            name: '数目',
                                            type: 'bar',
                                            data: [<?php echo $Sellarray['0']; ?>,<?php echo $Sellarray['1']; ?>,<?php echo $Sellarray['2']; ?>,<?php echo $Sellarray['3']; ?>,<?php echo $Sellarray['4']; ?>,<?php echo $Sellarray['5']; ?>],
                                            itemStyle:{
                                                color:"#BEEDC7"
                                            }
                                    }],
                                    };
                                    myChart.setOption(option);
                                </script>

                                <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                                <div id="xiaoliangbing" style="margin:auto;width: 600px;height:400px;"></div>
                                <script type="text/javascript">
                                    // 基于准备好的dom，初始化echarts实例
                                    var myChart = echarts.init(document.getElementById('xiaoliangbing'));

                                    // 指定图表的配置项和数据
                                    var option = {
                                        title : {
                                            text: '',
                                            x:'center'
                                        },
                                        tooltip : {
                                            trigger: 'item',
                                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                                        },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        legend: {
                                            orient: 'vertical',
                                            left: 'left',
                                            data: ["0-50元","50-100元","100-200元","200-500元","500-1000元",">1000元"]
                                        },
                                        series : [
                                            {
                                                name: '数目',
                                                type: 'pie',
                                                radius : '55%',
                                                center: ['50%', '60%'],
                                                data:[{value:<?php echo $Sellarray['0']; ?>, name:'0-50元'},
                                                    {value:<?php echo $Sellarray['1']; ?>, name:'50-100元'},
                                                    {value:<?php echo $Sellarray['2']; ?>, name:'100-200元'},
                                                    {value:<?php echo $Sellarray['3']; ?>, name:'200-500元'},
                                                    {value:<?php echo $Sellarray['4']; ?>, name:'500-1000元'},
                                                    {value:<?php echo $Sellarray['5']; ?>, name:'>1000元'}],
                                    itemStyle: {
                                        emphasis: {
                                            shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                        }
                                    }
                                    }
                                    ]
                                    };
                                    // 使用刚指定的配置项和数据显示图表。
                                    myChart.setOption(option);
                                </script>
                            </div>

                            <hr><hr>
                            <!--销量与价格-->
                            <div class="text">
                                <a name="seven"></a>
                                <p style="text-align:center;color: #2f4056;"><strong><br/>销量与价格</strong></p>
                                <p style="text-align:center;color: #2f4056;">不同价格区间商品销量<br/></p>
                                <div id="zhexian" style="margin:auto;width: 800px;height:400px;"></div>
                                <script type="text/javascript">
                                    // 基于准备好的dom，初始化echarts实例
                                    var myChart = echarts.init(document.getElementById('zhexian'));
                                    // 指定图表的配置项和数据
                                    var option = {
                                        title:{
                                            text:"x为价格，y为销量总和"
                                        },
                                        tooltip: {
                                            trigger: 'axis'
                                        },
                                        toolbox: {
                                            feature: {
                                                dataView: {show: true, readOnly: false},
                                                magicType: {show: true, type: ['line', 'bar']},
                                                restore: {show: true},
                                                saveAsImage: {show: true}
                                                }
                                            },
                                        xAxis: {
                                            name:"元",
                                            type: 'category',
                                            data: ["0-200元","201-400元","401-600元","601-800元","801-1000元",">1000元"]
                                        },
                                        yAxis: {
                                            name:"个",
                                            type: 'value'
                                        },
                                        series: [{
                                            data:[<?php echo $Sellarray['0']; ?>,<?php echo $Sellarray['1']; ?>,<?php echo $Sellarray['2']; ?>,<?php echo $Sellarray['3']; ?>,<?php echo $Sellarray['4']; ?>,<?php echo $Sellarray['5']; ?>],
                                            type: 'line'
                                        }]
                                        };
                                    // 使用刚指定的配置项和数据显示图表。
                                    myChart.setOption(option);
                                </script>

                            </div>

                            <hr><hr>
                            <!--不同期销量-->
                            <div class="text">
                                <a name="eight"></a>
                                <p style="text-align:center;color: #2f4056;"><strong>各材料销量</strong></p>
                                <p style="text-align:center;color: #2f4056;">不同材料，不同地区，销量对比</p>
                                <br/><br/>

                                 <div class="layui-container" style="width: 400px">
                                     <form class="layui-form">
                                     <label class="layui-form-label" style="color: #2f4056;">选择材料：</label>
                                         <div class="layui-input-inline">
                                            <select name='material' lay-filter="material" >
                                                <option value='木'>木制</option>
                                                <option value='塑料'>塑料</option>
                                                <option value='金属'>金属</option>
                                                <option value='塑胶'>塑胶</option>
                                            </select>
                                         </div>
                                     </form>
                                 </div>
                                <br><br>

                                <div id="material_box" style="margin:auto; width:800px; height:400px;"></div>
                                <script type="text/javascript">
                                    // JavaScript Document
                                    var city=<?php echo $city; ?>;
                                    var sale=<?php echo $sumData; ?>;
                                    console.log(sale);
                                    var myChart1 = echarts.init(document.getElementById("material_box"));
                                    var option = {
                                        title:{
                                            text:"木制玩具销量"
                                        },
                                        color: ['#3398DB'],
                                        tooltip : {
                                            trigger: 'axis',
                                            axisPointer : {
                                                type : 'shadow'
                                            }
                                        },
                                        grid: {
                                            left: '3%',
                                            right: '4%',
                                            bottom: '3%',
                                            containLabel: true
                                        },
                                        xAxis : [
                                            {
                                                type : 'category',
                                                data : city,
                                                axisTick: {
                                                    alignWithLabel: true
                                                }
                                            }
                                        ],
                                        yAxis : [
                                            {
                                                type : 'value'
                                            }
                                        ],
                                        series : [
                                            {
                                                name:'销量',
                                                type:'bar',
                                                barWidth: '60%',
                                                data:sale
                                            }
                                        ]
                                    };
                                    myChart1.setOption(option,true);
                                </script>


                            </div>

                            <hr>
                            <!--以上是各主模块-->

                            <hr>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <br/>
    </div>

    <footer style="background: #efefef">

        <div class="layui-row">


            <div class="test-center test" style="top:20px; line-height: 30px;">
                <br/>
                <p>汕大玩具数据平台</p>
                <p>售前咨询：123456789@stu.edu.cn</p>
                <p>售后咨询：984321@stu.edu.cn</p>
                <p>©2018 STU</p>
                <br/>
            </div>
        </div>

    </footer>
</div>

<script>

    var $;
    layui.use(['carousel','element','layer','laydate','form','jquery','util'], function() {

        var form = layui.form;
        layer = layui.layer;

        $ = layui.jquery;

        var util = layui.util;

        //执行
        util.fixbar({
        });

        form.on('select', function(data){
            var typeData =data.value; //得到被选中的值]
            $.ajax({
                url:'toyType',
                data:{material:data.value},
                type:'post',
                success:function (data) {
                    var newSale=data;
                    console.log(newSale);
                    myChart1.setOption({

                        title:{
                            text:typeData+"玩具销量"
                        },

                        series : [
                            {
                                data:newSale
                            }
                        ]

                    });
                }

            })

        });



        $('.sort a').on('click',function(){
            $(this).addClass('active').siblings().removeClass('active');
        });

        $('.list-box dt').on('click',function(){
            if($(this).attr('off')){
                $(this).removeClass('active').siblings('dd').show()
                $(this).attr('off','')
            }else{
                $(this).addClass('active').siblings('dd').hide()
                $(this).attr('off',true)
            }
        });
    });

</script>

</body>
</html>