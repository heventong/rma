$(document).ready(function () {
    firstScreen();
    menuBox();
    careers();
    autoRandom();
    autoRandoms();
    showLogo();
    /* 首页向下滚动 */
    //   setInterval(function() {
    //     var b = $(".scroll-down-arrow");
    //     b.addClass("animated"),
    //     setTimeout(function() {
    //         b.addClass("slid-down"),
    //         setTimeout(function() {
    //             b.removeClass("animated"),
    //             setTimeout(function() {
    //                 b.addClass("slid-up").removeClass("slid-down"),
    //                 setTimeout(function() {
    //                     b.addClass("animated"),
    //                     setTimeout(function() {
    //                         b.removeClass("slid-up"),
    //                         setTimeout(function() {
    //                             b.addClass("slid-way-down"),
    //                             setTimeout(function() {
    //                                 b.removeClass("animated"),
    //                                 setTimeout(function() {
    //                                     b.addClass("slid-up").removeClass("slid-way-down"),
    //                                     setTimeout(function() {
    //                                         b.addClass("animated"),
    //                                         setTimeout(function() {
    //                                             b.removeClass("slid-up")
    //                                         })
    //                                     },
    //                                     100)
    //                                 })
    //                             },
    //                             600)
    //                         })
    //                     })
    //                 },
    //                 100)
    //             })
    //         },
    //         300)
    //     })
    //  },3000);

    /* 滚动向下有无背景 */
    if ($(".header").has("div.work-nav").length > 0) {
        $(".header-bg").show();
        $(".header .logo > a,.btn-menu").addClass("sOn");
    } else if ($(".header").has(".work-nav")) {
        $(".header-bg").slideUp();
        $(".header .logo > a,.btn-menu").removeClass("sOn");
    }

    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if ($(".header").has("div.work-nav").length > 0) {
            $(".header-bg").show();
            $(".header .logo > a,.btn-menu").addClass("sOn");
        } else {
            if (scrolltop >= 100) {
                $(".header-bg").slideDown();
                $(".header .logo > a,.btn-menu").addClass("sOn");
            } else {
                $(".header-bg").slideUp();
                $(".header .logo > a,.btn-menu").removeClass("sOn");
            }
        }
        return false;
    });

    /* belief 列表 */
    $(".belief-items li.bItems:odd").css({ "clear": "left", "float": "right" });



    isIOS();
    //document.documentElement.style.fontSize = $(document.documentElement).width()/3.2 + 'px';
    $(window).on('resize', function () { //  document.documentElement.style.fontSize = $(document.documentElement).width()/3.2 + 'px';

        isIOS();
        firstScreen();


    });


});


/* 菜单显示 */
function menuBox() {
    $(".header > .btn-menu").on("click", function () {
        if ($(this).hasClass("on")) {
            // $(this).removeClass("on icon-close");
            $(this).prev('h1').children('a').children('img').attr('src','/assets/images/RMA_black.png')
            $(this).removeClass("on");
            $(".logo > a").removeClass("on");
            $(".menuBar").addClass("fadeOut_left").removeClass("fadeIn");
            $(".back-work").fadeIn();
            $("div.work-nav").animate({
                //width:100+"%",
                left: "0%"
            }, 250);

        } else {
            // $(this).addClass("on icon-close");
            $(this).prev('h1').children('a').children('img').attr('src','/assets/images/RMA.png')
            $(this).prev('a').remove();
            $(this).addClass("on");
            $(".logo > a").addClass("on");
            $(".menuBar").removeClass("fadeOut_left").addClass("fadeIn");
            $(".back-work").fadeOut();
            $("div.work-nav").animate({
                //width:0+"%",
                left: "100%"
            }, 250);

        }
    });
}

function showLogo(){
    $(".header h1 a").html('')
    $(".header h1 a").append("<img src='/assets/images/RMA_black.png'/>");
}

/* 首页全屏显示 belief 列表*/
function firstScreen() {
    var sW = $(window).width();
    var sH = $(window).height();
    $("#banner .swiper-wrapper a").css({ "width": sW, "height": sH });
    $(".scroll-down-arrow").on("click", function () { $("html,body").stop().animate({ scrollTop: sH }, 500); });
    $(".footer .back-top").on("click", function () { $("html,body").stop().animate({ scrollTop: 0 }, 500); });
    /*video*/
    var aspect_ratio = $(window).width() / $(window).height();
    if (aspect_ratio >= 1.6) {
        $("#video").css({ "height": "auto", "width": "100%" });
    } else {
        $("#video").css({ "height": "100%", "width": "auto" });
    }
    /**/
    var sh = $(".grid-container .grid-items .grid-item-image").height();
    // $(".grid-container .grid-items .grid-item-culture").css({height: sh-2});



    /* about */
    /*back to work */
    if (sW <= 560) {
        $(".about-img a").css({ "height": sW / 2 });
        //$(".about-img a.aw2").css({"height":sW });
    } else {
        $(".about-img a").css({ "height": "auto" });
    }

    /*nav link subar show */
    if (sW < 770) {
        $(".nav-link").unbind();
        $(".nav-link").off();
        $(".nav-link i").on("click", function () {
            $(".nav-link").unbind();
            $(".nav-link").off();
            if (!$(this).hasClass("iup")) {
                $(this).addClass("iup").next(".links").stop().slideDown();
                return false;
            } else {
                $(this).removeClass("iup").next(".links").stop().slideUp();
            }

        });
    } else {
        $(".nav-link").hover(function () {
            // console.log("hover")
            $(this).children("i").addClass("iup").end().children(".links").stop().slideDown();
            return false;
        }, function () {
            $(this).children("i").removeClass("iup").end().children(".links").stop().slideUp();
            return false;
        });

    }


    /*back to work */
    if (sW <= 770) {
        $(".work-nav").css({ "margin-top": "48px", "background": "rgba(181,181,181,0.9)" });
    } else {
        $(".work-nav").css({ "margin-top": "0", "background": "none" });
    }


    /*work detail */
    if (sW <= 750) {
        $("#related-links .swiper-slide a").css({ "height": sW });
    } else if (sW > 750 && sW <= 950) {
        $("#related-links .swiper-slide a").css({ "height": sW / 4 });
    } else if (sW > 950 && sW <= 1200) {
        $("#related-links .swiper-slide a").css({ "height": 1200 / 4 });
    } else {
        //   $("#related-links .swiper-slide a").css({"height":950 / 4});
        $("#related-links .swiper-slide a").css({ "height": 500 });
    }

    if (sW <= 560) {
        $(".award-list .random").css({ "height": sW });
    } else if (sW > 560 && sW <= 950) {
        $(".award-list .random").css({ "height": 320 });
    } else {
        $(".award-list .random").css({ "height": 320 });
    }


    if (sW <= 560) {
        $(".project-list .random").css({ "height": sW });
    } else if (sW > 560 && sW <= 950) {
        $(".project-list .random").css({ "height": sW / 4 * 480 / 350 });
    } else {
        $(".project-list .random").css({ "height": sW / 4 * 480 / 350 });
    }

    /* belief 列表 */
    // if(sW <= 560){
    //   $(".belief-items li").css({"height":"auto","width":"100%"}).not(".bItems").children("a").css({"height":sW/2 - 28}).children().css({"width":"50%"});
    // }else if(sW > 560 && sW <= 790){
    //  $(".belief-items li").css({"height":sW/2 - 86,"width":"50%"}).not(".bItems").children("a").css({"height":(sW/2 - 86)/2}).children().css({"width":"50%"});
    // }else if(sW > 790 && sW <= 1120){
    //     $(".belief-items li").css({"height":sW/2 - 186}).not(".bItems").children("a").css({"height":(sW/2 - 186)/2}).children().css({"width":"50%"})
    // }else if(sW > 1120 && sW <= 1460){
    //     $(".belief-items li").css({"height":sW/3 - 86}).not(".bItems").children("a").css({"height":(sW/3 - 86)/2}).children().css({"width":"50%"})
    //     $(".belief-items li").not(".bItems").find("img").css({"width":"calc(50% - 40px)"}).end().find(".belief-text").css({"width":"calc(50% + 40px)"});
    // }else{
    //     // $(".belief-items li").css({"height":sW/3 - 186}).not(".bItems").children("a").css({"height":(sW/3 - 186)/2})
    //     $(".belief-items li").css({"height":sW/3 - 270}).not(".bItems").children("a").css({"height":(sW/3 - 270)/2})
    //     $(".belief-items li").not(".bItems").find("img").css({"width":"calc(50% - 60px)"}).end().find(".belief-text").css({"width":"calc(50% + 60px)"});
    // }
}


/*------------  careers -------------*/
function careers() {
    $(".careers-lists li h3 .btn-view").on("click", function () {
        var view = $(this).parent("h3");
        if (view.hasClass("cView")) {
            view.removeClass("cView").next(".careers-text").slideUp();
            $(this).html("<i class='icon-add'></i>");
        } else {
            view.addClass("cView").next(".careers-text").slideDown();
            $(this).html("<i class='icon-minus'></i>");
        }
    });
}

/*IOS input css fixed*/
function isIOS() {
    var isIOS = (/iphone|ipad/gi).test(navigator.appVersion);
    if (isIOS) {
        $(".index").on("focus", "input", function () {
            $(".header,.footer").addClass("pos-rel");
            $(".index").addClass("pads");
        }).on("focusout", "input", function () {
            $(".header,.footer").removeClass("pos-rel");
            $(".index").removeClass("pads");
        });
    }
}


/* random gird */
function randomPlay() {
    $(this).addClass("on").siblings(".random").removeClass("on");
}
function autoRandom() {
    var next = $('.detail-randoms .on').next();
    if (next.length == 0) {
        next = $('.detail-randoms .random:first');
    }
    randomPlay.call(next);
    setTimeout(function () {
        autoRandom();
    }, 4000);
}
$(".detail-randoms  .random").click(function () {
    randomPlay.call(this);
});

function randomPlays() {
    var _prev = $(this).prev();
    var Arr = ["translate3d(0,80%,0)", "translate3d(0,-80%,0)", "translate3d(80%,0,0)", "translate3d(-80%,0,0)"];
    var n = Math.floor(Math.random() * Arr.length + 1) - 1;

    $(this).addClass("sOn").siblings(".randoms-img").removeClass("sOn");
    if (_prev.length == 0) {
        _prev = $(".on .randoms-img:last");
    }

    _prev.css({ "z-index": "10", "transform": Arr[n] });
    setTimeout(function () {
        _prev.css({ "z-index": "0", "transform": "translate3d(0,0,0)" });
    }, 1000);


}
function autoRandoms() {
    var sNext = $('.on .sOn').next();
    if (sNext.length == 0) {
        sNext = $('.on .randoms-img:first');
    }
    randomPlays.call(sNext);
    setTimeout(function () {
        autoRandoms();
    }, 4000);
}
