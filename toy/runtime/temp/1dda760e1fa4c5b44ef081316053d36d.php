<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp64\www\toy\public/../application/index\view\login\help.html";i:1551859097;}*/ ?>
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
        top:950px;
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
        <div class="layui-logo" style="font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>



        <ul class="layui-nav" style="position: absolute; left: 42%; background: #0C0C0C;">
            <li class="layui-nav-item"><a href="loginn.html">首页</a></li>
            <li class="layui-nav-item"><a onclick="showBox()">产品介绍</a></li>
            <li class="layui-nav-item  layui-this"><a href="help.html">帮助中心</a></li>
            <li class="layui-nav-item"><a href="about.html">关于我们</a></li>
        </ul>
        <ul class="layui-nav  layui-layout-right"  style="background: #0C0C0C;">
            <li class="layui-nav-item"><a onclick="showLoginBox()">登录</a></li>


            <li class="layui-nav-item"><a onclick="showRegisterBox()">注册</a></li>
        </ul>
    </div>

    <div class="layui-col-md12 test test-center" style="top: 150px;">
        <div class="layui-card">
            <div class="layui-card-header" style="font-weight: bold; font-size: 20px;">Q：一开始说每学生至少修27学分，但后面为何又说正常学分为25分。</div>
            <div class="layui-card-body"  style="height: 150px;">
                A：   每个学生每学期可以选修的学分上限为25分，如果成绩优秀，达到学校规定的同学可以申请超学分。<br/>超学分申请的条件是：1、在班级排名前20%且所修读课程全部及格（主要参考之前一学期或一学年的学习成绩，且GPA必须大于3）。<br/>2、新学期已选修或待选修课程都为专业必修课或英语课。3、申请超过限定总学分的学分数不高于3学分。         </div>
        </div>
        <hr/>
        <div class="layui-card">
            <div class="layui-card-header" style="font-weight: bold; font-size: 20px;">Q：一开始说每学生至少修27学分，但后面为何又说正常学分为25分。</div>
            <div class="layui-card-body"  style="height: 150px;">
                A：   每个学生每学期可以选修的学分上限为25分，如果成绩优秀，达到学校规定的同学可以申请超学分。<br/>超学分申请的条件是：1、在班级排名前20%且所修读课程全部及格（主要参考之前一学期或一学年的学习成绩，且GPA必须大于3）。<br/>2、新学期已选修或待选修课程都为专业必修课或英语课。3、申请超过限定总学分的学分数不高于3学分。         </div>
        </div>
        <hr/>
        <div class="layui-card">
        <div class="layui-card-header" style="font-weight: bold; font-size: 20px;">Q：一开始说每学生至少修27学分，但后面为何又说正常学分为25分。</div>
        <div class="layui-card-body"  style="height: 150px;">
            A：   每个学生每学期可以选修的学分上限为25分，如果成绩优秀，达到学校规定的同学可以申请超学分。<br/>超学分申请的条件是：1、在班级排名前20%且所修读课程全部及格（主要参考之前一学期或一学年的学习成绩，且GPA必须大于3）。<br/>2、新学期已选修或待选修课程都为专业必修课或英语课。3、申请超过限定总学分的学分数不高于3学分。         </div>
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

    function showBox()
    {
        layer.open({
            type:1,
            title:"提示",
            area:['420px','200px'],
            content:'<div style="padding: 30px 130px;">'+ '请先登录再进行该操作'+'</div>',
            btn:'确定'
            ,btnAlign: 'c',
            btn1:function () {
                window.location.href='loginn';
            }
        });
    }

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

</body>
</html>