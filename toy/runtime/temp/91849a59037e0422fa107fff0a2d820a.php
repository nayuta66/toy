<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\wamp64\www\toy\public/../application/index\view\demo\shangpinxiaoliang.html";i:1554018204;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>商品销量走势</title>
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
      <dd><a href="#one">产品生命周期</a></dd>
      <dd><a href="#two">促销活动效果</a></dd>
      <dd><a href="#three">预测热销产品</a></dd>
      <dd><a href="#four">制定订货计划</a></dd>
      <dd><a href="#five">制定每周目标</a></dd>
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
      <dd><a href="kehufenxi.html#one">进店人数</a></dd>
      <dd><a href="kehufenxi.html#two">每日新老客户占比</a></dd>
      <dd><a href="kehufenxi.html#three">购买商品结构</a></dd>
      <dd><a href="kehufenxi.html#four">客户所在地区</a></dd>
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
    		<legend><b>商品销量走势</b></legend>
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
        <div style="font-size:16px"><b>产品生命周期</b></div>
        </div>
        <div class="layui-card-body">

<div class="layui-tab">
  <ul class="layui-tab-title">    
    <li>今天</li>
    <li class="layui-this">最近10天</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item">
      <form class="layui-form layui-form-pane" action="">
        <div class="layui-form-item">

          <div class="layui-inline">
            <label class="layui-form-label">商品种类</label>
            <div class="layui-input-inline">
              <select name="modules" lay-verify="required" lay-search="">
                <option value="">请选择</option>
                <option value="1" selected="">毛熊</option>
                <option value="2">塑料</option>
                <option value="3">金属</option>
                <option value="4">……</option>
              </select>
            </div>
          </div>

          <div class="layui-input-inline">
            <button class="layui-btn layui-bg-blue" lay-submit="" lay-filter="lifeshangpin3">确定</button>
          </div>

        </div>
      </form>

      <div id="shengming3" style="width:800px;height:400px; margin:auto"></div>
      <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/shengming3.js"></script>
    </div>
	<div class="layui-tab-item layui-show">
	
<form class="layui-form layui-form-pane" action="">
  <div class="layui-form-item">
  
    <div class="layui-inline">
	  <label class="layui-form-label">商品种类</label>
      <div class="layui-input-inline">
        <select name="modules" lay-verify="required" lay-search="">
          <option value="">请选择</option>
		  <option value="1" selected="">毛熊</option>
          <option value="2">塑料</option>
          <option value="3">金属</option>
		  <option value="4">……</option>
        </select>
      </div>
	</div>
	
	<div class="layui-input-inline">
      <button class="layui-btn layui-bg-blue" lay-submit="" lay-filter="lifeshangpin">确定</button>
    </div>
	
  </div>
</form>

    <div id="shengming" style="width:800px;height:400px; margin:auto"></div>
    <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/shengming.js"></script>
    </div>
  </div>
</div>          
          
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
        <div style="font-size:16px"><b>促销活动效果</b></div>
        </div>

        <div class="layui-card-body">
          <form class="layui-form layui-form-pane" action="">
            <div class="layui-form-item">

              <div class="layui-inline">
                <label class="layui-form-label">商品种类</label>
                <div class="layui-input-inline">
                  <select name="modules" lay-verify="required" lay-search="">
                    <option value="">请选择</option>
                    <option value="1" selected="">毛熊</option>
                    <option value="2">塑料</option>
                    <option value="3">金属</option>
                    <option value="4">……</option>
                  </select>
                </div>
              </div>

              <div class="layui-input-inline">
                <button class="layui-btn layui-bg-blue" lay-submit="" lay-filter="lifeshangpin">确定</button>
              </div>

            </div>
          </form>
          <p>检测到"毛熊"7天前降价。</p>
        </div>
      </div>
    </div>
    
    <div class="layui-col-xs6">
      <div class="layui-card">
        <div class="layui-card-body">
          <div id="cuzhe" style="width:400px;height:250px;margin:auto"></div>
    
    		<script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/cuzhe.js"></script>
            
        </div>
      </div>
    </div>
	
    <div class="layui-col-xs6">
      <div class="layui-card">
        <div class="layui-card-body">
          <div id="cuzhu" style="width:400px;height:250px;margin:auto"></div>
    
    		<script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/cuzhu.js"></script>
            
        </div>
      </div>
    </div>
	
	<div class="layui-col-xs6">
      <div class="layui-card">
        <div class="layui-card-body">
          
<div class="layui-form" style="height: 400px;">
  <p>促销前后销量环比</p>
  <table class="layui-table">
    <thead>
      <tr>
        <th>时间</th> <th>促销前(7天前)销量</th> <th>时间</th> <th>促销后销量</th> <th>销量差</th>
      </tr> 
    </thead>
    <tbody>
      <tr>
        <td>1-26</td> <td>120</td> <td>2-2</td> <td>220</td> <td>100</td>
      </tr>
      <tr>
        <td>1-27</td> <td>132</td> <td>2-3</td> <td>182</td> <td>50</td>
      </tr>
	  <tr>
        <td>1-28</td> <td>101</td> <td>2-4</td> <td>191</td> <td>90</td>
      </tr>
	  <tr>
        <td>1-29</td> <td>134</td> <td>2-5</td> <td>234</td> <td>100</td>
      </tr>
	  <tr>
        <td>1-30</td> <td>90</td> <td>2-6</td> <td>290</td> <td>200</td>
      </tr>
	  <tr>
        <td>1-31</td> <td>230</td> <td>2-7</td> <td>330</td> <td>100</td>
      </tr>
	  <tr>
        <td>2-1</td> <td>210</td> <td>2-8</td> <td>310</td> <td>100</td>
      </tr>
	  <tr>
        <td>总计</td> <td>1017</td> <td>总计</td> <td>1757</td> <td>740</td>
      </tr>
    </tbody>
  </table>
</div>
		  
        </div>
      </div>
    </div>
	
	<div class="layui-col-xs6">
      <div class="layui-card">
        <div class="layui-card-body">
          
<div class="layui-form" style="height: 400px;">
  <p>促销前后数据统计</p>
  <table class="layui-table">
    <tbody>
	  <tr>
        <td><b>促销前(7天前)价格</b></td> <td>330</td>
      </tr>
	  <tr>
        <td><b>促销后价格</b></td> <td>320</td>
      </tr>
	  <tr>
        <td><b>价格差</b></td> <td>10</td>
      </tr>
	  <tr>
        <td><b>销量提升百分比</b></td> <td style="color:#09F">72.76%</td>
      </tr>
	  <tr>
        <td><b>促销效果</b></td> <td style="color:#09F">B+</td>
      </tr>
    </tbody>
  </table>
</div>
		  
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
        <div style="font-size:16px"><b>预测热销产品</b></div>
        </div>
      </div>
    </div>

    <div class="layui-col-xs12">
      <div class="layui-card">
        <div class="layui-card-body">

          <div id="liurank" style="width:600px;height:400px;margin: auto"></div>
          <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/yuzhu.js"></script>

        </div>
      </div>
    </div>

    <div class="layui-col-xs12">
      <div class="layui-card">
        <div class="layui-card-body">
          <div id="hotzhe" style="width:800px;height:400px;margin:auto"></div>
          <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/yuzhe.js"> </script>
        </div>
      </div>
    </div>

    <div class="layui-col-xs6">
      <div class="layui-card" style="height:320px;">
        <div class="layui-card-body">

          <div id="sourank" style="width:400px;height:300px;margin: auto"></div>
          <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/yuqipao.js"></script>

        </div>
      </div>
    </div>

    <div class="layui-col-xs6">
      <div class="layui-card" style="height:320px;">
        <div class="layui-card-body">

          <div class="layui-form">
            <p>预测热销产品</p>
            <table class="layui-table">
              <thead>
              <tr>
                <th>商品</th> <th>最近7天销量</th> <th>最近7天浏览量</th> <th>综合热销分值</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>电动大卡车</td> <td>1330</td> <td>3000</td> <td>1831</td>
              </tr>
              <tr>
                <td>蜘蛛侠面具</td> <td>1320</td> <td>2000</td> <td>1524</td>
              </tr>
              <tr>
                <td>高达佐罗模型</td> <td>1290</td> <td>4000</td> <td>1503</td>
              </tr>
              <tr>
                <td>毛熊玩偶</td> <td>934</td> <td>3000</td> <td>1553.8</td>
              </tr>
              <tr>
                <td>巨型充气猫</td> <td>901</td> <td>2500</td> <td>1530.7</td>
              </tr>
              </tbody>
            </table>
            <p>预测热销产品为：电动大卡车(电动类)(玩具车类)</p>
          </div>

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
              <div style="font-size:16px"><b>制定订货计划</b></div>
            </div>
          </div>
        </div>

        <div class="layui-col-xs12">
          <div class="layui-card">
            <div class="layui-card-body">

              <div id="dingsan" style="width:800px;height:400px;margin: auto"></div>
              <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/dinghuosan.js"></script>

            </div>
          </div>
        </div>

        <div class="layui-col-xs12">
          <div class="layui-card">
            <div class="layui-card-body">

              <div class="layui-form">
                <p>订货指数</p>
                <table class="layui-table">
                  <thead>
                  <tr>
                    <th>产品名</th><th>销量</th><th>利润</th><th>每提升100浏览量销量变化数</th><th>综合指数</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>电动大卡车</td><td>1330</td><td>299</td><td>+10</td><td>756.7</td>
                  </tr>
                  <tr>
                    <td>蜘蛛侠面具</td><td>1320</td><td>40</td><td>+4</td><td>672.8</td>
                  </tr>
                  <tr>
                    <td>高达佐罗模型</td><td>1290</td><td>219</td><td>+2</td><td>711.1</td>
                  </tr>
                  <tr>
                    <td>毛熊玩具</td><td>934</td><td>40</td><td>+6</td><td>480.2</td>
                  </tr>
                  <tr>
                    <td>巨型充气猫</td><td>901</td><td>135</td><td>+3</td><td>491.6</td>
                  </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

        <div class="layui-col-xs12">
          <div class="layui-card">
            <div class="layui-card-body">

              <div class="layui-form">
                <p>下月(2月)订货清单</p>
                <table class="layui-table">
                  <thead>
                  <tr>
                    <th>产品名</th><th>售价调整</th><th>订货数量</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>电动大卡车</td><td>可上调2%</td><td>1513</td>
                  </tr>
                  <tr>
                    <td>蜘蛛侠面具</td><td>可上调3%</td><td>1346</td>
                  </tr>
                  <tr>
                    <td>高达佐罗模型</td><td>可上调4%</td><td>1422</td>
                  </tr>
                  <tr>
                    <td>毛熊玩具</td><td>可上调3%</td><td>960</td>
                  </tr>
                  <tr>
                    <td>巨型充气猫</td><td>可上调2%</td><td>983</td>
                  </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

        <div class="layui-col-xs12">
          <div class="layui-card">
            <div class="layui-card-body">

              <div id="dinghuozhu" style="width:700px;height:400px;margin: auto"></div>
              <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/dinghuozhu.js"> </script>

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
                <a name="five"></a>
                <div style="font-size:16px"><b>制定每周目标</b></div>
              </div>
              <div class="layui-card-body">结合订货目标分析，计算平均每周目标</div>
            </div>
          </div>

          <div class="layui-col-xs6">
            <div class="layui-card" style="height: 300px;">
              <div class="layui-card-body">
                <div id="mubiaotu" style="width:400px;height:250px;margin: auto"></div>
                <script src="<?php echo \think\Config::get('web_root'); ?>javascript/shangpinxiaoliang/mubiao.js"></script>
              </div>
            </div>
          </div>

          <div class="layui-col-xs6">
            <div class="layui-card" style="height: 300px;">
              <div class="layui-card-body">
                <div class="layui-form">
                  <p>预计进货量和目标销量</p>
                  <table class="layui-table">
                    <thead>
                    <tr>
                      <th>产品名</th>
                      <th>预计进货量</th>
                      <th>目标销量</th>
                      <th>成单率</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>电动大卡车</td>
                      <td>378</td>
                      <td>340</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>蜘蛛侠面具</td>
                      <td>337</td>
                      <td>303</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>高达佐罗模型</td>
                      <td>356</td>
                      <td>320</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>毛熊玩具</td>
                      <td>240</td>
                      <td>216</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>巨型充气猫</td>
                      <td>246</td>
                      <td>221</td>
                      <td>90%</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
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