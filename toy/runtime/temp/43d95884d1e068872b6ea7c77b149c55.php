<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\toy\public/../application/index\view\login\login.html";i:1554522713;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>汕大统计</title>
    <link rel="stylesheet" href="../../../../public/static/layui/css/layui.css" media="all">

</head>
<style>
  .test-center{
      text-align: center;
    }

  .ending{
      position: center;
      top:300px;
      height: 350px;
      background: #efefef
  }
    .test{
       position: center;
        top:40px;
        font-weight: lighter;
        font-size: 14px;
        line-height: 40px;
        color: #777777;
    }
</style>
<body style="overflow: auto;">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header " style="background: #0C0C0C;">
        <div class="layui-logo" style="z-index:999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>



<ul class="layui-nav" style="text-align: center; background: #0C0C0C;">
    <li class="layui-nav-item layui-this"><a href="">首页</a></li>
    <li class="layui-nav-item"><a onclick="showLoginBox()">资讯中心</a></li>
    <li class="layui-nav-item"><a onclick="showLoginBox()">数据可视化</a></li>
    <li class="layui-nav-item"><a onclick="showLoginBox()">解决方案</a></li>
    <li class="layui-nav-item"><a onclick="showLoginBox()">关于我们</a></li>

</ul>
<ul class="layui-nav  layui-layout-right"  style="background: #0C0C0C;">
            <li class="layui-nav-item"><a onclick="showLoginBox()">登录</a></li>
</ul>
</div>




    <div class="layui-carousel" id="test1" lay-filter="test1">
    <div carousel-item="" style="background: #0C0C0C; height: 500px">
        <div><img src="../../../../public/static/images/01.jpg"style="position:center;width: 100%;height: 100%;"/></div>
        <div><img src="../../../../public/static/images/02.jpg"style="position:center;width: 100%;height: 100%;"/></div>
        <div><img src="../../../../public/static/images/03.jpg"style="position:center;width: 100%;height: 100%;"/></div>
        <div><img src="../../../../public/static/images/04.jpg"style="position:center;width: 100%;height: 100%;"/></div>
    </div>
</div>

    <div class="layui-container" style=" width:100%; background: #efefef;">
    <div class="layui-row">

        <div class="test-center" style="font-size: 33px; font-weight: normal; height: 150px;">
        </br></br></br>
            全面配套的产品与服务
            </br></br>
            <p class="test-center" style="font-size: 23px;font-weight: lighter;width:100%;">
                集合最前沿数据，汕大最全面的玩具数据分析平台</p>
        </div>

        </br></br></br>

        <div class="layui-col-md6 test-center test" style="height:360px;">
            <div><img src="../../../../public/static/images/01.png" /></div>
            <p style="font-weight: bold;">数据可视化</p>
            <p>全汕大最大的网站流量分析平台，为网站的精细化</p>
            <p>运营决策提供数据支持，进而有效提高企业的投资回报率</p>
        </div>

        <div class="layui-col-md6 test-center test" style="height:360px;">
            <div><img src="../../../../public/static/images/02.png" /></div>
            <p style="font-weight: bold;">解决方案</p>
            <p>提供选址决策、场内外客群洞察</p>
            <p>以及精准触达等服务，为合作伙伴赋能</p>
        </div>

           </div>
    </div>

    <div class="layui-container" style="top: 110px; height:810px;">
        <div class="layui-row" >
            <div class="test-center" style="font-size: 33px; font-weight: normal; height: 140px;">
                    更专注、结合使用场景的整体解决方案
                </br></br>
                <p class="test-center" style="font-size: 19px;font-weight: lighter;width:100%;">
                    深耕场景需求，方案量身定制；敏锐洞察、更具前瞻性</p>
            </div>


                <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                    <ul class="layui-tab-title" style="position:center;">
                        <li class="layui-this" >数据技术</li>
                        <li>对外数据服务</li>
                        <li>高级分析平台</li>
                    </ul>

                    <div class="layui-tab-content" style="height: 600px; ">
                        <div class="layui-tab-item layui-show" style="height: 500px;">
                            <div style="background:url('../../../../public/static/images/023.png')no-repeat; width:100%; height:100%; background-position:6% 30%;">
                                <p class="test-right" style="font-size: 28px;font-weight: bold; color:lightslategray; left: 880px; position: absolute; top: 330px;">
                                    数据技术</p>
                            <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 440px;">
                                采集、计算、存储……为大数据提供底层技术支持，</p>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 470px;">
                                支撑和驱动业务发展的同时，沉淀和探索创新技术。</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 500px;">
                                    一站式分析评估热力图、页面上下游等强力页面分</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 530px;">
                                    析工具，助您优化网页体验</p>
                            </div>
                        </div>
                        <div class="layui-tab-item" style="height: 500px;">
                            <div style="background:url('../../../../public/static/images/022.png')no-repeat; width:100%; height:100%; background-position:5% 10%;">
                                <p class="test-right" style="font-size: 28px;font-weight: bold; color:lightslategray; left: 860px; position: absolute; top: 330px;">
                                    对外数据服务</p>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 440px;">
                                    开放汕大数据能力，发挥汕大玩具平台的数据价值，</p>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 470px;">
                                    赋能千万商家、中小企业、创业者以及社会大众。</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 500px;">
                                    一段代码，无需设置，全面监控关键词，深入洞察</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 530px;">
                                    网络营销的每一个细节</p>
                            </div>
                        </div>
                        <div class="layui-tab-item" style="height: 500px;">
                            <div style="background:url('../../../../public/static/images/011.png')no-repeat; width:100%; height:100%; background-position:-18% 10%;">
                                <p class="test-right" style="font-size: 28px;font-weight: bold; color:lightslategray; left: 860px; position: absolute; top: 330px;">
                                    高级分析平台</p>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 440px;">
                                    提供多维度交叉分析、漏斗分析、留存分析等高阶分析</p>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 470px;">
                                    方法，帮助客户快速定位系统短板、获取转化及渠道成</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 500px;">
                                    本同时引入大数据用户理解，结合人群精细化分组，让</p></br></br>
                                <p class="test-right" style="font-size: 15px;font-weight: lighter; color:lightslategray; left: 780px; position: absolute; top: 530px;">
                                    企业真正了解自己的用户，辅助决策，提升营销效果</p>
                            </div>
                        </div>
                        <hr class="layui-bg-gray">
                    </div>

                </div>


        </div>

    </div>

    <div class="layui-container" style=" width:100%; height:670px; ">
        <div class="layui-row layui-col-space1">

            <div class="test-center" style="font-size: 33px; font-weight: normal; height: 270px;">
                </br></br></br>
                技术和产品优势
                </br></br>
                <p class="test-center" style="font-size: 23px;font-weight: lighter;width:100%;">
                    基于汕大领先的大数据技术能力、海量的数据资源，倾情打造</p>
            </div>

            </br></br></br>

            <div class="layui-col-md3 test-center test" style="height:400px;">
                <div><img src="../../../../public/static/images/013.png"  style="height:80px; "/></div>
                <p style="font-weight: normal; font-size: 15px;">极简接入</p>
                <p>零成本接入，辅以完备的指导说明</p>
                <p>践行简单易用、即安即用的理念。</p>
            </div>

            <div class="layui-col-md3 test-center test" style="height:400px;">
                <div><img src="../../../../public/static/images/014.png"  style="height:80px; "/></div>
                <p style="font-weight: normal; font-size: 15px;">秒级响应</p>
                <p>成熟的分布式计算框架、海量数据存</p>
                <p>储引擎等先进技术，数据秒级响应。</p>
            </div>

            <div class="layui-col-md3 test-center test" style="height:400px;">
                <div><img src="../../../../public/static/images/015.png" style="height:80px; " /></div>
                <p style="font-weight: normal; font-size: 15px; ">数据导出</p>
                <p>流量、消费与用户业务数据无缝对</p>
                <p>接，开放数据支持用户自建数据平台</p>
            </div>

            <div class="layui-col-md3 test-center test" style="height:400px;">
                <div><img src="../../../../public/static/images/016.png"  style="height:80px; "/></div>
                <p style="font-weight: normal; font-size: 15px;">海量资源</p>
                <p>丰富的用户标签和大数据用户理解</p>
                <p>助力用户洞察、人群精细化分组。</p>
            </div>

        </div>
    </div>

    <div class="layui-container" style=" width:100%;height:330px; background:rgb(15,15,36);">
        <div class="layui-row" >
            <div class="test-center" style="font-size: 28px; font-weight: normal; height: 430px;">
            <div style="background:url('../../../../public/static/images/017.jpg')no-repeat; width:100%; height:100%; background-position:87% -15%;">
                <p class="test-center" style="font-size: 38px;font-weight: normal; color:whitesmoke; left: 500px; position: absolute; top: 70px;">
                   点击一下，开始使用</p>
                <a onclick="showLoginBox()" class="layui-btn layui-btn-lg layui-btn-primary layui-btn-radius"
                   style="background:none; left: 600px; position: absolute; top: 190px;font-size: 23px;font-weight: normal; color:whitesmoke;">
                    立即体验</a>
            </div>
            </div>
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

    <div id="loginBox" style="display: none; ">
        <form class="layui-form" style="position: relative; width: 400px; left: 50px; top:50px" action="logining">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend style="font-weight: normal; text-align: center;" > 登录 </legend>
            </fieldset>
            <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="name" id="name" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input" style="position:relative; left: 70px; width: 270px;">
            </div>
            </div>
            <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
            </div>
            <div class="layui-form-item">
            <div class="layui-input-inline login-btn">
                <button  type="submit" lay-submit lay-filter="login" class="layui-btn" style="position:relative; left: 70px; width: 270px;">登录</button>
            </div>
            <div class="layui-form-item">
            <br/>
            <hr/>
                <p class="test"><a style="float: left" class="fr" onclick="showRegisterBox()">立即注册</a></p>
            <p class="test"><a style="float: right" class="fr" onclick="showChangeBox()">忘记密码？</a></p>
            </div>
            </div>
        </form>
    </div>


<div id="registerBox" style="display: none; ">
    <form class="layui-form" style="position: relative; width: 400px; left: 50px; top:50px" action="do_register">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend style="font-weight: normal; text-align: center;" > 注册 </legend>
        </fieldset>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="name" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input" style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="nickname" required lay-verify="required" placeholder="昵称" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="email" required lay-verify="required" placeholder="邮箱" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
        <div class="layui-input-inline">
            <input type="password" name="repassword" required lay-verify="required" placeholder="确认密码" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
        </div>
    </div>
        <div class="layui-form-item">
            <div class="layui-input-inline login-btn">
                <button  type="submit" lay-submit lay-filter="login" class="layui-btn" style="position:relative; left: 70px; width: 270px;">提交</button>
            </div>
            <div class="layui-form-item">
                <br/>
                <hr/>
                </div>
        </div>
    </form>
</div>


<div id="changeBox" style="display: none; ">
    <form class="layui-form" style="position: relative; width: 400px; left: 50px; top:50px" action="changepassword">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend style="font-weight: normal; text-align: center;" > 修改密码 </legend>
        </fieldset>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="name" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input" style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="text" name="email" required lay-verify="required" placeholder="邮箱" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="password" name="newpassword" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline">
                <input type="password" name="newpassword1" required lay-verify="required" placeholder="确认密码" autocomplete="off" class="layui-input"  style="position:relative; left: 70px; width: 270px;">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-inline login-btn">
                <button  type="submit" lay-submit lay-filter="login" class="layui-btn" style="position:relative; left: 70px; width: 270px;">提交</button>
            </div>
            <div class="layui-form-item">
                <br/>
                <hr/>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="../../../../public/static/js/jquery-1.9.0.min.js"></script>
<script src="../../../../public/static/layui/layui.js"></script>
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


    function showLoginBox()
    {
        layer.open({
            type:1,
            title:"登录",
            area:['500px','400px'],
            content:$('#loginBox')
        });
    }

    function showRegisterBox()
    {
        layer.open({
            type:1,
            title:"注册",
            area:['500px','500px'],
            content:$('#registerBox')
        });
    }

    function showChangeBox()
    {
        layer.open({
            type:1,
            title:"修改密码",
            area:['500px','500px'],
            content:$('#changeBox')
        });
    }

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

        //Hash地址的定位
        var layid = location.hash.replace(/^#test=/, '');
        element.tabChange('test', layid);

        element.on('tab(test)', function(elem){
            location.hash = 'test='+ $(this).attr('lay-id');
        });

    });
</script>

</body>
</html>