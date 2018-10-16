(function($){
    // $(".navs>ul>li").click(function(){
    //     var index=$(this).index();
    //     localStorage.index = index;
    //
    // });
    // $('.navs>ul>li').eq(localStorage.index).addClass('activ0').siblings().removeClass('activ0');

    $.fn.num4 = function(){
        n1 = $(this).width();
        h1 = $(this).height();

        $(this).hover(function(){
            var becurr = "background:#fe3e4e;position:absolute;"
            // top边框
            var divTop ="<div style='"+becurr+"top:-2px;left:-2px;width:0px;height:1px' class='divTop'></div>";

            // right边框
            var divRight ="<div style='"+becurr+"top:-2px;right:-2px;width:1px;height:0px;' class='divRight'></div>";

            // Bottom边框
            var divBottom ="<div style='"+becurr+"bottom:-2px;right:-2px;width:0px;height:1px' class='divBottom'></div>";

            // Left边框
            var divLeft ="<div style='"+becurr+"bottom:-2px;left:-2px;width:1px;height:0px;' class='divLeft'></div>";

            $(this).append(divTop,divRight,divBottom,divLeft);

            $(this).find("div").eq(0).stop().animate({width:n1+3.5},200,function(){
                $(this).parent().find("div").eq(1).stop().animate({height:h1+3.5},150,function(){
                    $(this).parent().find("div").eq(2).stop().animate({width:n1+3.5},150,function(){
                        $(this).parent().find("div").eq(3).stop().animate({height:h1+3.5},150)
                    });
                });
            })
        },function(){
            $(this).find("div").stop();
            $(this).find("div").eq(3).stop().animate({height:0},200,function(){
                $(this).parent().find("div").eq(2).stop().animate({width:0},100,function(){
                    $(this).parent().find("div").eq(1).stop().animate({height:0},100,function(){
                        $(this).parent().find("div").eq(0).stop().animate({width:0},100,function(){
                            $(".num4 .divTop,.num4 .divRight,.num4 .divBottom,.num4 .divLeft").remove()
                        })
                    });
                });
            })

        })
    }
})(jQuery);

// 适用移动端
$(function () {
    //判断屏幕宽度(判断是PC还是移动端)
    var count=$(document).width();

    //点击显示移动端导航栏
    $('#hearter-phone .leftbtn>a').click(function () {
        var src=$(this).children('img').attr('src');
        if(src.substr(src.length-5,5)==='n.png'){
            $(this).children('img').css("height","22");
            $('#hearter-phone .listphon').slideDown(200);
            src=$(this).children('img').attr('src').replace('left-btn.png','left-btn2.png');
        }else {
            $(this).children('img').css("height","17");
            $('#hearter-phone .listphon').slideUp(200);
            src=$(this).children('img').attr('src').replace('left-btn2.png','left-btn.png');
        }
        $(this).children('img').attr('src',src);

    })
    //点击显示移动端导航栏结束！
    //点击显示移动端导航栏结束！
    //鼠标点击改变导航条样式
    $('#hearter-phone .listphon li').click(function () {
        $(this).addClass('activer').siblings().removeClass('activer');


    });
    //移动端二级动画开始
    $("#hearter-phone .listphon .down_1").click(function(){
        if($(this).siblings().css("display") == "none"){
            $(this).siblings().slideDown();
            $(this).addClass("animate");
        }else{
            $(this).siblings().slideUp();
            $(this).removeClass("animate");
        }
    })
    //移动端二级动画结束

    //点击按钮回到顶部

    $(window).scroll(function () {
        if(count<960){
            if($(this).scrollTop()>=700){
                $('#backtop').css('display','block').click(function () {
                    $(window).scrollTop(0);
                });
            }
            else {
                $('#backtop').css('display','none');
            }

        }

    })
    //点击按钮回到顶部结束
})
// 适用移动端结束

$(function () {
    //鼠标移上去改变导航条样式
    $('.navs>ul>li').mouseenter(function () {
        $(this).addClass('activ0').siblings().removeClass('activ0');
        $(this).children('ul.sec').css("visibility","visible").addClass("ani-fip");
    }).mouseleave(function () {
        $(this).children('ul.sec').css("visibility","hidden").removeClass("ani-fip");
    });
// 依然标记首页
    $('.navs').mouseleave(function () {
        $('.navs>ul>li:nth-child(1)').addClass('activ0').siblings().removeClass('activ0');
    })
    //切换语言
    function stopPropagation(e) {
        if (e.stopPropagation)
            e.stopPropagation();//停止冒泡  非ie
        else
            e.cancelBubble = true;//停止冒泡 ie
    }
    $(document).bind('click',function(){
        $('.language ul').slideUp(300);
    });
    $('.language').bind('click',function(e){
        //写要执行的内容..
        $('.language ul').slideToggle(300);
        stopPropagation(e);//调用停止冒泡方法,阻止document方法的执行
    });
    //切换语言结束
    //固定导航样式
    $(window).scroll(function(){
        //scrollTop是浏览器滚动条的top位置，
        var scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
        if( scrollTop >= 220){
            $('.fixed0').css('background','rgba(46,48,54,0.8)');
        }else {
            $('.fixed0').css('background','');
        }
    })


    //添加h5动画
    $("li>div.tutu").mouseenter(function(){
        $(this).children('img').stop(false, true).animate({
            width: '+=20px'
        })
    }).mouseleave(function () {
        $(this).children('img').stop(false, true).animate({
            width: '-=20px'
        })
    });

    $(".works-center>div dl").num4()
    $(".works-center>div dl").mouseenter(function () {
        $(this).addClass('bgdong')
    });




})