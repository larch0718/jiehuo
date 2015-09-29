<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">
<link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>
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
            <a class="brand" href="<?php echo U('index/index');?>">OneThink</a>
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
	
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" href="/Public/Home/css/base-1.css">
    <script src="/Public/Home/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/Home/js/superslide.2.1.js"></script>
    <script src="/Public/Home/js/index.js"></script>
<!--顶部banner图-->
    <div class="banner">
        <div class="bannercont">
            <ul>
                <li><img src="/Public/Home/images/a1.jpg"></li>
                <li><img src="/Public/Home/images/a2.jpg"></li>
                <li><img src="/Public/Home/images/a3.jpg"></li>
                <li><img src="/Public/Home/images/a4.jpg"></li>
            </ul>

        </div>
        <div class="hd">
            <ul>
            </ul>
        </div><!--圆点-->
        <div class="pnBtn prev">
            <a class="arrow" href="javascript:void(0)"></a>
        </div>
        <div class="pnBtn next">
            <a class="arrow" href="javascript:void(0)"></a>
        </div>
    </div>


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
        <h3>section1</h3>
        <ul>
            <!--<?php if(is_array($section1)): $i = 0; $__LIST__ = $section1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<li><?php echo ($vo["id"]); ?>.-->
                    <!--<a href="#" title="" target="_blank"><?php echo ($vo["title"]); ?></a>-->
                <!--</li>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
            <li ><a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a>
                <a>detail--detail--detail--detail--detail--detail--detail--detail--detail--</a>
            </li>


        </ul>
        <a href="#" class="list_hover" target="_blank">more>></a>
    </div>
    <div class="sections">
        <h3>section2</h3>
        <ul>
            <!--<?php if(is_array($section2)): $i = 0; $__LIST__ = $section2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<li><?php echo ($vo["id"]); ?>.-->
                    <!--<a href="#" title="" target="_blank"><?php echo ($vo["title"]); ?></a>-->
                <!--</li>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <li >1. <a href="<?php echo U('Info/detail?id='.$vo['id']);?>">1111111111111111111111111</a></li>
            <a href="#" class="list_hover" target="_blank">more>></a>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<!--<div class="video_all">-->
    <!--<div class="video">-->
        <!--<img src="" alt="">-->
        <!--<a href="#">{vi.title}</a>-->
    <!--</div>-->
     <!--<div class="video">-->
        <!--<img src="" alt="">-->
        <!--<a href="#">{vi.title}</a>-->
    <!--</div>-->

    <!--<div class="clearfix"></div>-->

    <!--<p href="#" target="_blank" id="return_top">返回顶部</p>-->
<!--</div>-->
    <!--视频-->
    <div><h1>视频推荐！！</h1></div>
    <div class="">


        <section id="portfolio">

            <div class="row items">

                <div class="twelve columns">

                    <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>" target="_blank">
                                    <img src="/Public/Home/images/portfolio/grizzly.jpg" alt="Grizzly">
                                    <div class="overlay"></div>
                                    <div class="portfolio-item-meta">
                                        <h5>Grizzly</h5>
                                        <p>Photography</p>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/hotel.jpg" alt="Hotel Sign">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Hotel Sign</h5>
                                            <p>Webdesign</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/beetle.jpg" alt="Beetle">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Beetle</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/banjo-player.jpg" alt="Banjo Player">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Banjo Player</h5>
                                            <p>Videography</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/coffee.jpg" alt="Coffee Cup">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Coffee Cup</h5>
                                            <p>Photography</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/farmerboy.jpg" alt="Farmerboy">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Farmerboy</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/judah.jpg" alt="Judah">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Judah</h5>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="<?php echo U('Video/detail?id='.$vo['id']);?>">
                                    <img src="/Public/Home/images/portfolio/embossed-paper.jpg" alt="Embossed Paper">
                                    <div class="overlay">
                                        <div class="portfolio-item-meta">
                                            <h5>Embossed Paper</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>  <!-- item end -->

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
          <p> 本站由 <strong><a href="http://www.onethink.cn" target="_blank">OneThink</a></strong> 强力驱动</p>
      </div>
    </footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
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