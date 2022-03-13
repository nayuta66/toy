<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\toy\public/../application/index\view\user\change.html";i:1553939445;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>汕大统计</title>
    <link rel="stylesheet" href="../../../../public/static/layui/css/layui.css"  >


</head>
<style>
    .test-center{
        text-align: center;
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

<?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
<body class="layui-layout-body" style="overflow :auto" >
<div class="wapper">
<div class="layui-layout layui-layout-admin main-content">
    <div class="layui-header ">
        <div class="layui-logo" style="z-index:999;font-size: 20px ; color:#d8d8e2; line-height:20px; top: 10px">汕大统计<br/><p style="font-size: 14px">玩具数据分析平台<p></div>



        <ul class="layui-nav" style="text-align: center; background: #1c1c1c;">
            <li class="layui-nav-item"><a href="index.html">首页</a></li>
            <li class="layui-nav-item"><a href="zhibiao.html">数据可视化</a></li>
            <li class="layui-nav-item"><a href="demo">解决方案</a></li>
            <li class="layui-nav-item"><a href="about.html">关于我们</a></li>
        </ul>

        <ul class="layui-nav  layui-layout-right"  style="background: #1c1c1c;">
            <li class="layui-nav-item  layui-this">
                <a >欢迎您，<?php echo $value['admin_nickname']; ?></a>
                <dl class="layui-nav-child">
                    <dd><a href="mess.html"> 个人信息管理</a></dd>
                </dl>
            </li>
        </ul>
    </div>


    <form class="layui-form layui-container" id="myForm" method="post" action="changedata" style="width: 1000px; margin:0px auto;">

        <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 100px;">
            <a style="font-weight: bold">个人资料管理</a>
        </blockquote>

        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
            <legend style="font-weight: bold">个人信息</legend>
        </fieldset>



            <div class="layui-form-item">
                <label class="layui-form-label">用户名</label>
                <div class="layui-input-block" style=" width: 40% ;">
                    <input type="text" name="username"  value="<?php echo $value['admin_name']; ?>"  readonly class="layui-input" >
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label"><span style="color: #ff0000">*</span>真实姓名</label>
                <div class="layui-input-block" style="width: 40%">
                    <input type="text" name="realname" id="phonetic" value="<?php echo $value['admin_nickname']; ?>" required  lay-verify="required" autocomplete="off" placeholder="请输入姓名" class="layui-input" >
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">性别</label>
                <div class="layui-input-block">
                    <input type="radio"  name="sex" value="男" title="男">
                    <input type="radio"  name="sex" value="女" title="女">
                    <input type="radio"  name="sex" value="保密" title="保密">
                </div>
            </div>



        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend style="font-weight: bold">企业信息</legend>
        </fieldset>


        <div class="layui-form-item">
            <label class="layui-form-label"><span style="color: #ff0000">*</span>行业应用</label>
                <div class="layui-input-inline" style="width: 40%;">
                    <select  name="industryApplication">
                        <option value="未填写">未填写</option>
                        <option value="实体零售或批发">实体零售或批发</option>
                        <option value="电子商务">电子商务</option>
                        <option value="汽车">汽车</option>
                        <option value="保险">保险</option>
                        <option value="家用电器">家用电器</option>
                        <option value="计算机硬件设备">计算机硬件设备</option>
                        <option value="人工智能">人工智能</option>
                    </select>
                </div>
         </div>

         <div class="layui-form-item">
             <label class="layui-form-label"><span style="color: #ff0000">*</span>主营项目</label>
             <div class="layui-input-inline" style="width: 40%;">
                 <input type="text" name="project" value="<?php echo $value['mainProject']; ?>" required lay-verify="required" autocomplete="off" placeholder="请输入经营的项目" class="layui-input">
             </div>
         </div>

        <div class="layui-form-item">
            <label class="layui-form-label">网址</label>
            <div class="layui-input-inline" style="width: 40%;">
                <input type="text" name="web" value="<?php echo $value['website']; ?>"   lay-verify="url"  autocomplete="off" placeholder="请输入您公司的网址" class="layui-input">
            </div>
        </div>

        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend style="font-weight: bold">联系信息</legend>
        </fieldset>

        <div class="layui-form-item">
            <label class="layui-form-label">所在地区</label>
            <div class="layui-input-inline" style="width: 40%;">
                <input type="text" name="area" value="<?php echo $value['location']; ?>"  autocomplete="off" placeholder="请输入您公司所在的地区" class="layui-input">
            </div>
        </div>

         <div class="layui-form-item">
            <label class="layui-form-label">详细地址</label>
            <div class="layui-input-inline" style="width: 40%;">
                <input type="text" name="areadetail" value="<?php echo $value['locationDetail']; ?>"  autocomplete="off" placeholder="请输入详细地址" class="layui-input">
            </div>
         </div>

        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-inline" style="width: 40%;">
                <input type="text" name="email" lay-verify="email" value="<?php echo $value['admin_email']; ?>"  lay-verify="email"  autocomplete="off" placeholder="请输入邮箱" class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">
            <div class="layui-input-block" style="top:100px; height: 300px;">
                <br/>
                <button type="submit" class="layui-btn" lay-submit lay-filter="sub">提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>

    </form>

</div>



    <footer  style="background: #efefef">

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
        </div>
            <hr/>
            <div class="test-center test" style="top:20px; line-height: 30px;">
                <p>汕大玩具数据平台</p>
                <p>售前咨询：123456789@stu.edu.cn</p>
                <p>售后咨询：984321@stu.edu.cn</p>
                <p>©2018 STU</p>
            </div>


    </footer>
</div>



<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../../../../public/static/layui/layui.js"></script>
<script  type="text/javascript">
    var layer;
    var $;

    $("input:radio[name='sex'][value='<?php echo $value['admin_sex']; ?>']").attr('checked','true');

    var industryApplication="<?php echo $value['industryApplication']; ?>";
    $("select[name='industryApplication']").find("option[value='"+industryApplication+"']").attr("selected",true);

    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use(['carousel','element','layer','laydate','form','jquery'], function(){
        var element = layui.element;
        var form = layui.form;
        layer =layui.layer;
        var carousel = layui.carousel;
        var laydate = layui.laydate;
        $  = layui.jquery;


        //出生日期选择器
        laydate.render({
            elem: '#birthday'
        });
    });

</script>

</body>
<?php endforeach; endif; else: echo "" ;endif; ?>
</html>





