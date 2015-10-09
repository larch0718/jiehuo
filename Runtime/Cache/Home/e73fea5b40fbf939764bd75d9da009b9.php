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
	
    <link rel="stylesheet" href=" /jiehuo/Public/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href=" /jiehuo/Public/Home/css/video.css">

    <script src="/jiehuo/Public/Home/js/bootstrap.min.js"></script>
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
        
    <div class="title">
        <h2>C语言也能干大事之C语言</h2>
    </div>
    <div class="clearfix"></div>
    <div class="container pmb-container">
        <div class="row" id="tab1">
            <div class="col-md-8 col-sm-7 pmb-table">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" myname="chapter" data-parent="#accordion" href="http://www.rupeng.com/Courses/Index/34#collapse_162" aria-expanded="true" aria-controls="collapse_162">
                                    第一章：HTML基础
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_162" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">

                                <ul>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1712" target="_blank">第 1 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1712" target="_blank">1-学前说明</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1713" target="_blank">第 2 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1713" target="_blank">2-学习路线图</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1714" target="_blank">第 3 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1714" target="_blank">3-VS新建html文件的办法</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1715" target="_blank">第 4 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1715" target="_blank">4-html入门介绍</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1716" target="_blank">第 5 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1716" target="_blank">5-常用标签：字体和特殊字符</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" myname="chapter" data-parent="#accordion" href="http://www.rupeng.com/Courses/Index/34#collapse_163" aria-expanded="true" aria-controls="collapse_163" class="collapsed">
                                    第二章：C语言编写第一个网站
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_163" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">

                                <ul>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1723" target="_blank">第 1 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1723" target="_blank">1-网站原理：请求处理响应</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1724" target="_blank">第 2 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1724" target="_blank">2-开发动态网站需要什么</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1725" target="_blank">第 3 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1725" target="_blank">3-apache配置</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1726" target="_blank">第 4 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1726" target="_blank">4-编写第一个CGI程序</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1727" target="_blank">第 5 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1727" target="_blank">5-编写CGI可能遇到的问题</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" myname="chapter" data-parent="#accordion" href="http://www.rupeng.com/Courses/Index/34#collapse_164" aria-expanded="true" aria-controls="collapse_164" class="collapsed">
                                    第三章：Http协议和指针
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_164" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">

                                <ul>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1730" target="_blank">第 1 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1730" target="_blank">1-练习常见问题</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1731" target="_blank">第 2 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1731" target="_blank">2-什么是通讯协议</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1732" target="_blank">第 3 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1732" target="_blank">3-Http协议（会有微晕）</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1733" target="_blank">第 4 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1733" target="_blank">4-Http协议实验和重定向</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1734" target="_blank">第 5 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1734" target="_blank">5-CGI程序的调试</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" myname="chapter" data-parent="#accordion" href="http://www.rupeng.com/Courses/Index/34#collapse_166" aria-expanded="true" aria-controls="collapse_166" class="collapsed">
                                    第四章：C语言网站开发框架
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_166" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">

                                <ul>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1777" target="_blank">第 1 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1777" target="_blank">1-CGIC框架简介</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1778" target="_blank">第 2 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1778" target="_blank">2-CGIC原理揭秘</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1779" target="_blank">第 3 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1779" target="_blank">3-cgiFormString及案例</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1780" target="_blank">第 4 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1780" target="_blank">4-cgiHeaderLocation及常见错误</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1781" target="_blank">第 5 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1781" target="_blank">5-表单提交1</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" myname="chapter" data-parent="#accordion" href="http://www.rupeng.com/Courses/Index/34#collapse_168" aria-expanded="true" aria-controls="collapse_168" class="collapsed">
                                    第五章：模板引擎
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_168" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">

                                <ul>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1792" target="_blank">第 1 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1792" target="_blank">1-没有模板引擎的痛苦</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1793" target="_blank">第 2 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1793" target="_blank">2-模板引擎是什么</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1794" target="_blank">第 3 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1794" target="_blank">3-给模板参数赋值</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1795" target="_blank">第 4 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1795" target="_blank">4-模板引擎案例：计算器</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>
                                    <li class="d">
                                        <div class="count col-md-2"><a href="http://www.rupeng.com/Segments/Index/1796" target="_blank">第 5 节</a></div>
                                        <div class="lt col-md-9">
                                            <a href="http://www.rupeng.com/Segments/Index/1796" target="_blank">5-模板引擎中的循环参数</a>

                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    </ul>
                </div>
            </div>
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