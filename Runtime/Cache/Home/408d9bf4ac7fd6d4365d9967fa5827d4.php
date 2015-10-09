<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/jiehuo/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/jiehuo/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/jiehuo/Public/static/bootstrap/css/docs.css" rel="stylesheet">
<link href="/jiehuo/Public/static/bootstrap/css/onethink.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/jiehuo/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/jiehuo/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/jiehuo/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/jiehuo/Public/static/bootstrap/js/bootstrap.min.js"></script>
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="<?php echo U('index/index');?>">解惑</a>
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li>
                            <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="nav-collapse collapse pull-right">
                <?php if(is_login()): ?><ul class="nav" style="margin-right:0">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0"><?php echo get_username();?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo U('User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('User/logout');?>">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="nav" style="margin-right:0">
                        <li>
                            <a href="<?php echo U('User/login');?>">登录</a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/register');?>" style="padding-left:0;padding-right:0">注册</a>
                        </li>
                    </ul><?php endif; ?>
            </div>
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<!-- 主体 -->
	
<link rel="stylesheet" href="/jiehuo/Public/Home/css/info.css">
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2>源自相同起点，演绎不同精彩！</h2>
            <p class="lead"></p>
        </div>
    </header>

<div id="main-container" class="container">
    <div class="row">
        <!---->
        <!--&lt;!&ndash; 左侧 nav================================================== &ndash;&gt;-->
            <!--<div class="span3 bs-docs-sidebar">-->
                <!---->
                <!--<ul class="nav nav-list bs-docs-sidenav">-->
                    <!--<?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>-->
                <!--</ul>-->
            <!--</div>-->
        <!---->
        
    <div class="content">
        <h1>
            <span>谈笑间学会javascript（最易入门的JS课程）</span>
        </h1>
        <h4>发布时间：2015.1.1</h4>
        <div class="text">

            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件
            JS与DOM的关系变量控制结构对象操作window对象开关灯泡找对象操作对象 暴力操作节点联动菜单定时器 setTimeout定时器 setInterval常见事件







        </div>





    </div>








    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
<!-- 底部
================================================== -->
<footer class="footer">
    <div class="container">
        <p> 本站由 <strong><a href="http://www.5151jh.com" target="_blank">解惑网</a></strong> 强力驱动</p>
        <p>
            <strong><a href="http://www.5151jh.com" target="_blank">关于解惑</a></strong>&nbsp;&nbsp;
            <strong><a href="http://www.5151jh.com" target="_blank">web开发者网站</a></strong>&nbsp;&nbsp;
            <strong><a href="http://www.5151jh.com" target="_blank">中国软件联盟</a></strong>
        </p>
    </div>
</footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/jiehuo", //当前网站地址
		"APP"    : "/jiehuo/index.php?s=", //当前项目地址
		"PUBLIC" : "/jiehuo/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
    
</div>

	<!-- /底部 -->
</body>
</html>