<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-tap-highlight" content="no">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="author" content="RMA" />
    <title>RMA 共和都市設計</title>
    <meta name="Keywords" content="共和都市設計,銳意設計,黃永才設計師,酒吧會所設計,辦公設計,酒店設計,song吧,宋吧,D-force">
    <meta name="description" content="共和都市設計,銳意設計,黃永才設計師,酒吧會所設計,辦公設計,酒店設計,song吧,宋吧,D-force" />
    <!-- apple devices fullscreen -->
    <link href="{{ asset("assets/css/swiper.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/mobile.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/iconfont/iconfont.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/zxx.lib-min.css") }}" rel="stylesheet">
    <script>
        (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if(clientWidth>=750){
                        docEl.style.fontSize = '100px';
                    }else{
                        docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
                    }
                };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
    @yield('style')
</head>

<body>

    <!-- loading -->
    <div id="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- wrapper end -->
    <div class="menuBar fadeOut_left" style="background: url({{ cdn_url("assets/images/index_bg_navi.jpg",500,900,'!500x900r') }}) center center no-repeat; background-size: cover">
        <div class="menuInner">
            <div class="menu-list">
                <ul>
                    <li><a href="{{ url('workList') }}">@lang("navi.work")</a></li>
                    <li><a href="{{ url('about') }}">@lang("navi.about")</a></li>
                    <li><a href="{{ url('serve') }}">@lang("navi.serve")</a></li>
                    <li><a href="{{ url('belief') }}">@lang("navi.brief")</a></li>
                    <li><a href="{{ url('careers') }}">@lang("navi.careers")</a></li>
                    <li><a href="{{ url('contact') }}">@lang("navi.contact")</a></li>
                </ul>
                <!--<span class="icon-ds-squiggle"></span>-->
                <span class="menu-share"><br />
                    <em>stay turned in</em><br />
                <a class="iconfont2 icon-wechat" href="javascript:;" onclick="wechat()"></a>
                <a class="iconfont2 icon-weibo" href="#"></a>
                <a class="iconfont2 icon-linkedin" href="#"></a>
                </span>
            </div>
        </div>
    </div>

    @yield('content')
    

<?php /*========================================================临时改成本地脚本，没读cdn=============================================================*/ ?>
    <!-- code -->
    <!--<script src="{{ source_url("assets/js/jquery.min.js") }}"></script>--><script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <!--<script src="{{ source_url("assets/js/jqnav_mobile.js") }}"></script>--><script src="{{ asset("assets/js/jqnav_mobile.js") }}"></script>
    <!--<script src="{{ source_url("assets/js/swiper.min.js") }}"></script>--><script src="{{ asset("assets/js/swiper.min.js") }}"></script>
    <!-- [if lt IE 9]><script src=”http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js”></script><![endif]-->
    <!--<script src="{{ source_url("assets/js/minigrid.js") }}"></script>--><script src="{{ asset("assets/js/minigrid.js") }}"></script>
    <script src="{{ asset("assets/layer/layer.js") }}"></script>
    <script>
        function wechat(){
            layer.open({
                type: 1,
                shade: true,
                title: false, //不显示标题
                content: '<div class="qrcode"><img src="{{ asset("assets/images/ewm.png") }}" alt=""></div>', //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
                cancel: function(){
                    
                }
            });
        }
    </script>
    @yield('script')


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e9e894f2f07aae34389a9351060f44f6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>

</html>