<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<meta charset="utf-8">
<meta name="keywords" content="有猿（有缘）网,编程,文艺青年,文学艺术,编程入门">
<meta name="description" content="有猿(有缘)网是面向编程初学者,即将学习编程的同学和热爱文学的青年的类容分享网站,
                                  她由软件工程师肖丛胜先生牵头创办。就目前国内的技术论坛来看，大部分都是属于培训机构的附庸，
                                  都是用来作为宣传手段，用来打广告的，没有一家真正的面向程序猿，网络工程师的类容分享网站
                                  有缘网的目标是做一个单纯的、干净的、让程序员热爱的、让文艺青年喜欢的内容分享网站！  ">
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
            <a class="brand" href="<?php echo U('index/index');?>">有猿</a>
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
	
    <link rel="stylesheet" href="/jiehuo/Public/Home/css/index.css">
    <link rel="stylesheet" href="/jiehuo/Public/Home/css/base-1.css">
    <script src="/jiehuo/Public/Home/js/jquery-1.10.2.min.js"></script>
    <script src="/jiehuo/Public/Home/js/superslide.2.1.js"></script>
    <script src="/jiehuo/Public/Home/js/index.js"></script>
    <block name="header">
        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <h2>努力做一个很干净的类容分享网站！</h2>
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
        
    <div class="news">
        <div class="sections">
            <h3>技术天地</h3>
            <ul>
                <?php if(is_array($code)): $i = 0; $__LIST__ = $code;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$code_data): $mod = ($i % 2 );++$i;?><li >
                        <h4>
                            <a href="<?php echo U('Article/detail?id='.$code_data['id']);?>"><?php echo ($code_data["title"]); ?></a>
                        </h4>
                        <a  ><?php echo ($code_data["description"]); ?></a>
                        <a  ><?php echo (get_username($code_data["uid"])); ?> 于 <?php echo (date('Y-m-d H:i',$code_data["create_time"])); ?> 发表在  阅读( <?php echo ($code_data["view"]); ?> )</a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul>
                <li>
                    <a href="<?php echo U('Article/index?category=code');?>" class="list_hover" target="_blank">more>></a>
                </li>
            </ul>
        </div>
        <div class="sections">
            <h3>文艺天地</h3>
            <ul>
                <?php if(is_array($default_blog)): $i = 0; $__LIST__ = $default_blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><li >
                        <h4>
                            <a href="<?php echo U('Article/detail?id='.$blog['id']);?>"><?php echo ($blog["title"]); ?></a>
                        </h4>
                        <a ><?php echo ($blog["description"]); ?></a>
                        <a><?php echo (get_username($blog["uid"])); ?> 于 <?php echo (date('Y-m-d H:i',$blog["create_time"])); ?> 发表在  阅读( <?php echo ($blog["view"]); ?> )</a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <ul>
                <li>
                    <a href="<?php echo U('Article/index?category=default_blog');?>" class="list_hover" target="_blank">more>></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div><h1>视频推荐！！</h1></div>
    <div class="">
        <section id="portfolio">
            <div class="row items">
                <div class="twelve columns">
                    <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">
                        <div class="bgrid item">
                            <div class="item-wrap">
                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>" target="_blank">
                                    <img src="/jiehuo/Public/Home/images/vedio/videoc.png" alt="Grizzly">
                                    <div class="overlay"></div>
                                    <div class="portfolio-item-meta">
                                        <h5>C语言视频</h5>
                                        <p>C语言也能干大事儿</p>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- /item -->




                    </div> <!-- /portfolio-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Portfolio -->

    </div>
    <div class="clearfix"></div>


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
        <p> 本站由 <strong><a href="http://www.5151jh.com" target="_blank">有猿（缘）网</a></strong> 强力驱动</p>
        <p>
            <strong><a href="http://www.5151jh.com" target="_blank">关于有猿</a></strong>&nbsp;&nbsp;
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