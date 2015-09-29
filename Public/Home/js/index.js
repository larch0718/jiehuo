/**
 * Created by chens on 2015/9/22.
 */
// JavaScript Document
$(document).ready(function(){
    $(".brand_list li:eq(0)").addClass("brand_active")
    $(".nav_ul li:eq(0)").addClass("cur")
    $(".brand_list li:eq(0)").find('b').attr('class','icon11');
    $(".box_cont ul:eq(0)").show();
    /* 设置第一张图片 */
    $(".banner .bannercont li").first().before($(".banner .bannercont li").last());

    /* 鼠标悬停箭头按钮显示 */
    $(".banner").hover(function(){
        $(this).find(".arrow").stop(true,true).fadeIn(300)
    },function(){
        $(this).find(".arrow").fadeOut(300)
    });

    /* 滚动切换 */
    $(".banner").slide({
        titCell:".hd ul",
        mainCell:".bannercont ul",
        effect:"leftLoop",
        autoPlay:true,
        vis:3,
        autoPage:true,
        trigger:"click"
    });

    $("#return_top").click(function(){
        $('body,html').animate({
                scrollTop: 0
            },
            1000);
        return false;
    });

    $(".shop_wrap").hover(
        function(){
            num=$(this).index();
            $(".shop_wrap").removeClass("rz_hover")
            $(this).addClass("rz_hover")
        },function(){
            $(".shop_wrap").removeClass("rz_hover")})
    $(".brand_list li").click(
        function(){
            var another=$(this).siblings();
            num=$(this).index();
            another.each(function(){
                var thisindex=$(this).index()+1;
                $(this).find('b').attr('class','icon'+thisindex);
            })
            $(this).find('b').attr('class','icon'+(num+1)+''+(num+1));
            $(".box_cont ul").hide();
            $(".box_cont ul:eq("+num+")").show();
            $(".brand_list li").removeClass("brand_active")
            $(this).addClass("brand_active"),function(){
                $(this).removeClass("brand_active")}
        })

    $("#onclick").click(
        function(){
            $("#close").show();
        })

    $(".dialog_close").click(function(){
        $("#close").hide();
    })
    $(".qu_xiao").click(function(){
        $("#close").hide();
    })
});
// function closePostera(){
// document.getElementById("remove").style.display="none";
// }