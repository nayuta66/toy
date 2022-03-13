<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp64\www\toy\public/../application/index\view\demo\indexjiejue.html";i:1553938678;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>申请demo</title>
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
</style>
<body style="background-color:#F2F2F2;">

<ul class="layui-nav layui-bg-blue">
	<li class="layui-nav-item"><b>STU玩具可视化</b></li>
	<li class="layui-nav-item"><a href="jieshao.html">解决方案介绍</a></li>
	<li class="layui-nav-item"><a href="shishijiankong.html">解决方案demo</a></li>
	<li class="layui-nav-item"><a href="user">返回主页</a></li>
</ul>

<div style="padding: 20px; background-color: #F2F2F2;">
  <div class="layui-row layui-col-space15">
    
    <div class="layui-col">
      
      <div class="layui-card">
		  <div class="layui-container">
        <div class="layui-card-header">
        <div style="font-size:20px"><b>申请demo</b></div>
        </div>
        
        <div class="layui-card-body">
          
          <div>请描述您的情况与解决方案。</div><br>
          
          <form class="layui-form layui-form-pane" method="post" action="applydemo" lay-filter="makedemo">
              <div class="layui-form-item">
    			<label class="layui-form-label">姓名</label>
    			<div class="layui-input-inline" style="width:40%;">
      		      <input type="text" name="name" placeholder="请输入姓名" autocomplete="off" class="layui-input">
    			</div>
  			  </div>
              
              <div class="layui-form-item">
    			<label class="layui-form-label">公司职位</label>
    			<div class="layui-input-inline" style="width:40%;">
      				<select name="interest" lay-filter="job">
        			  <option value="">请选择职位</option>
        			  <option value="0" selected="">公司高管</option>
        			  <option value="1">产品</option>
        			  <option value="2">运营</option>
        			  <option value="3">市场</option>
        			  <option value="4">数据分析</option>
                      <option value="5">其他</option>
      				</select>
    			</div>
  			  </div>
          
			  <div class="layui-form-item">
    			<label class="layui-form-label">联系方式</label>
    			<div class="layui-input-inline" style="width:40%;">
      				<input type="text" name="lianxi" autocomplete="off"  lay-verify="phone"  placeholder="请输入联系方式" class="layui-input">
    			</div>
  			  </div>
              
  			  <div class="layui-form-item">
    			<label class="layui-form-label">工作邮箱</label>
    			<div class="layui-input-inline" style="width:40%;">
      				<input type="text" name="mail"  lay-verify="email" autocomplete="off" placeholder="请输入工作邮箱" class="layui-input">
    			</div>
  			  </div>
              
              <div class="layui-form-item">
    			<label class="layui-form-label">公司名称</label>
    			<div class="layui-input-inline" style="width:40%;">
      				<input type="text" name="company" autocomplete="off" placeholder="请输入公司名称" class="layui-input">
    			</div>
  			  </div>
              
              <div class="layui-form-item">
    			<label class="layui-form-label">关键词</label>
    			<div class="layui-input-inline" style="width:40%;">
      				<input type="text" name="guanjian" autocomplete="off" placeholder="请输入关键词" class="layui-input">
    			</div>
  			  </div>
			  

              
              <div class="layui-form-item">
    			<div class="layui-input-inline" style="width:40%;">
      				<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
      				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
    			</div>
  			  </div>
		  </form>
          
        </div>
      </div>
	  </div>
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

</p>
                      
<script src="<?php echo \think\Config::get('web_root'); ?>layui/layui.js" charset="utf-8"></script>
<script>
layui.use(['util', 'form', 'layedit', 'laydate'], function(){
  var util = layui.util
  ,form = layui.form
  ,layer = layui.layer;  
 
  //表单初始赋值
  form.val('makedemo', {
    "guanjian": "玩具零售产业" // "name": "value"
  });
  
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

</body>
</html>