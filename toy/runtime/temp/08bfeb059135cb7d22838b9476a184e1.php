<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp64\www\toy\public/../application/index\view\toynews\newspage.html";i:1554553954;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>玩具新闻资讯</title>
    <link rel="stylesheet" href="../../../../public/static/layui/css/layui.css" media="all">
    <script src="../../../../public/static/lib/ueditor/ueditor.config.js"></script>
    <script src="../../../../public/static/lib/ueditor/ueditor.all.js"></script>
</head>
<style>
   .layui-elem-quote{
       border-left: 5px solid #0078d6;
   }
</style>
<body style="overflow: auto;background: #f1f1f1;font-family: 幼圆;">

<div class="layui-layout layui-layout-admin">
<div class="layui-header " style="background: #ffffff">
    <div class="layui-logo" style="font-size: 18px ;z-index: 999; color:#000000; width: 250px;line-height:20px; top: 10px;font-weight: bold">汕大统计<a href="newsindex.html" style="font-size: 18px;font-weight: normal">丨新闻资讯中心</a><br/><p style="font-weight: normal;font-size: 14px">玩具数据分析平台<p></div>
    <ul class="layui-nav" style="text-align: center" >
        <li class="layui-nav-item">
            <a  style="color: #0C0C0C;font-size: 16px" href="user">首页</a>
        </li>
        <li class="layui-nav-item">
            <a  style="color: #0C0C0C;font-size: 16px" href="zhibiao">数据可视化</a>
        </li>
        <li class="layui-nav-item">
            <a  style="color: #0C0C0C;font-size: 16px" href="demo">解决方案</a>
        </li>
        <li class="layui-nav-item">
            <a  style="color: #0C0C0C;font-size: 16px" href="about">关于我们</a>
        </li>
    </ul>

    <ul class="layui-nav  layui-layout-right" >
        <li class="layui-nav-item">
            <a  style="color: #0C0C0C;font-size: 16px" href="newsindex.html">返回咨询中心主页</a>
        </li>
    </ul>
</div>
<br/><br/>
<div class="layui-container" style="width: 80%">
    <div class="layui-row layui-col-space30" >
        <div class="layui-col-md9">
            <div class="layui-card">
                <div class="layui-card-header layui-container" style="height: 100px;width: 98%">
                    <div style="height: 15px"></div>
                     <a style="font-size: 24px; color: #0078d6;font-weight: bold;"><?php echo $news['tittle']; ?></a>
                    <p><?php echo $news['click']; ?>阅读&emsp;<?php echo $news['comm_num']; ?>评论&emsp;作者：<?php echo $news['author']; ?>标签:
                        <?php if(is_array($tag) || $tag instanceof \think\Collection): if( count($tag)==0 ) : echo "" ;else: foreach($tag as $key=>$vo): ?>
                        <span class="label label-default"><?php echo $vo; ?></span>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>
                </div>
                <div class="layui-card-body">
                    <div class="layui-container" style="width: 98%">
                      <br/>
                     <blockquote class="layui-elem-quote">
                    <?php echo $news['desc']; ?>
                     </blockquote>

                    <?php echo $news['content']; ?>

                    </div>
                    <br/>
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>评论区</legend>
                        <br/>
                        <div class="layui-field-box">
                            <form action="" class="layui-form" method="post">
                                <input type="hidden" name="news_id" value="<?php echo $news['id']; ?>">
                                <input type="hidden" name="user_id" value=1>

                                <div class="layui-form-item">
                                        <textarea class="layui-textarea" id="content" name="content"></textarea>
                                </div>

                                <div class="layui-form-item">
                                        <button type="submit" class="layui-btn" style="background: #0078d6;color: #ffffff" id="comm">提交评论</button>
                                </div>
                            </form>
                            <br/>
                            <?php if(is_array($comm) || $comm instanceof \think\Collection): if( count($comm)==0 ) : echo "" ;else: foreach($comm as $key=>$vo): ?>
                            <div class="clearfix"></div>
                            <div class="comment-list">
                                <div class="comment-list-item">
                                    <div class="info" style="font-weight: bold"><?php echo $vo['user_id']; ?> &emsp;&emsp;<small style="font-weight: normal"> <?php echo $vo['create_time']; ?></small></div>
                                    <div class="content"><?php echo $vo['content']; ?></div>
                                    <hr/>
                                    <br/>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </fieldset>

                 </div>
            </div>
        </div>
        <div class="layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header" style="font-size: 20px; color: #0078d6;font-weight: bold">推荐文章</div>
                <div class="layui-card-body">

                    <?php if(is_array($allnews) || $allnews instanceof \think\Collection): if( count($allnews)==0 ) : echo "" ;else: foreach($allnews as $key=>$vo): if(($vo['is_top'] ==1)): ?>

                    <a href="newspage?id=<?php echo $vo['id']; ?>" class="title">
                        <?php echo $vo['tittle']; ?><br></font>
                    </a>
                    <hr/>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p>汕大玩具新闻资讯中心</p>
</div>
</div>
<script type="text/javascript" src="../../../../public/static/js/jquery-1.9.0.min.js"></script>
<script src="../../../../public/static/layui/layui.js"></script>

<script>
    $(function(){
        $('#comm').click(function(){
            $.ajax({

                url:"<?php echo url('index/toynews/comm'); ?>",
                type:'post',
                data:$('form').serialize(),
                dataType:'json',
                success:function(data){
                    if(data.code == 1){
                        layer.msg(data.msg,{
                            icon:6,
                            time:2000
                        },function(){
                            location.href = data.url;
                        });
                    }else{
                        layer.open({
                            tittle:'评论失败',
                            content:data.msg,
                            icon:5,
                            anim:6
                        });
                    }
                }
            });

        });

    })
</script>

</body>
</html>