@extends('layouts.mobile_common')

@section("content")
    <style>
        .header{background:#fff}
        .work-nav .nav-link .links{background:#fff}
        .work-detail-title{
            text-align:left;
            background:#000 url({{ cdn_url("assets/images/bg_db.png",752,752,'!752x752r') }})  no-repeat right;
            color:#FFF;
        }
        .title-right li{text-align:left}
        .detail-com {
            overflow: hidden;}
    </style>

    <!-- loading end -->
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
            <div class="work-nav">
                <a class="nav-link" href="#">Featured</a>
                <a class="nav-link" href="{{ url('workList') }}">Clients</a>
                <div class="nav-link">
                    <i>industries</i>
                    <span class="links">
                        <a href="#">industries-1</a>
                        <a href="#">industries-2</a>
                        <a href="#">industries</a>
                        <a href="#">industries</a>
                        <a href="#">industries</a>
                    </span>
                </div>
            </div>
            <div class="back-work"><a href="{{ url('workList') }}">back to work</a></div>
        </div>
    {{--<div class="header-bg"></div>--}}
    <!-- header end-->

        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ url('workList') }}" style="background: url({{ asset('assets/images/songre_001.jpg') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>Song's restaurant </span>
                            <h3 class="pb20">Under<br /> the morden skins<br /><span>現代皮囊之下</span></h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('workList') }}" style="background: url({{ asset('assets/images/songre_002.jpg') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>Song's restaurant</span>
                            <h3 class="pb20">Under<br /> the morden skins<br /><span>現代皮囊之下</span></h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('workList') }}" style="background: url({{ asset('assets/images/songre_004.jpg') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>Song's restaurant</span>
                            <h3 class="pb20">Under<br /> the morden skins<br /><span>現代皮囊之下</span></h3>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>
        <!-- scroll-down-arrow end-->
        <div class="work-detail-title clearfix" >
            <div class="title-left">
                {{--<h6>Song's restaurant</h6>--}}
                {{--<h5>2000 m<sup>2</sup></h5>--}}
                {{--<h6>Zhujiang Newtown Guangzhou China</h6>--}}
                {{--<h6 class="ch">廣州珠江新城</h6>--}}
                {{--<h5>2017</h5>--}}
                <h5>Song's restaurant /Zhujiang Newtown Guangzhou China/2000 m<sup>2</sup>/2017</h5>
            </div>
            <div class="title-right">
                <ul>
                    <li>
                        <h4>Services/interior design/ff&e design/Category/Club/bar/hospility</h4>
                        <h4 class="ch">服務範疇/室內設計/軟件設計/標簽/俱樂部/酒吧/會所</h4>
                    </li>

                </ul>
            </div>
            <div class="title-left">
                <h6 class="pb5">Under the morden skins</h6>
                <h5 class="ch">現代皮囊之下</h5>
                <p class="pb5">Under the modern material of China</p>
                <p class="ch pb10">現代物料下的中國想象</p>
            </div>
        </div>
    </div>
    <!-- work-detail-title end -->
    <div class="wrap-bg">
        {{--<div class="detail-com h12 clearfix">--}}
        {{--<img class="pct120" src="{{ cdn_url('assets/images/songre_006-r.jpg',600,900,'!600x900r') }}" alt="">--}}
        {{--</div>--}}
        {{--<div class="detail-com h12 clearfix">--}}
        {{--<img class="pct120" src="{{ cdn_url('assets/images/songre_016-r.jpg',600,900,'!600x900r') }}" alt="">--}}
        {{--</div>--}}
        {{--<div class="detail-com h12 clearfix">--}}
        {{--<img class="pct120" src="{{ cdn_url('assets/images/songre_017.jpg',600,900,'!600x900r') }}" alt="">--}}
        {{--</div>--}}
        <div class="detail-com  clearfix">
            <img class="pct120" src="{{ asset('assets/images/songre_001.jpg') }}" alt="">
        </div>
        <div class="detail-com  clearfix" style="height: 4.7rem;">
            <img class="pct120" src="{{ asset('assets/images/songre_002.jpg') }}" alt="">
            <div style="width:40%;height:4px;position: relative;top: -7rem;float: right;background-color:white;overflow:hidden;"></div>
            <div style="float:left;width: 4px;height: 47em;background: white;position: relative;top: -47em;left: 15.4em;"></div>
        </div>
        {{--<div class="detail-com  clearfix" style="height: 9.5rem;">--}}
            {{--<img class="pct120" src="{{ asset('assets/images/songre_003.jpg') }}" alt="">--}}
            {{--<div style="width:40%;height:4px;position: relative;top: -7rem;float: left;background-color:white;overflow:hidden;"></div>--}}
            {{--<div style="float:left;width: 4px;height: 47em;background: white;position: relative;top: -47em;left: 0em;"></div>--}}
        {{--</div>--}}
        <div class="detail-com  clearfix">
            <img class="pct120" src="{{ asset('assets/images/songre_004.jpg') }}" alt="">
        </div>
        <div class="detail-com  clearfix">
            <img class="pct120" src="{{ asset('assets/images/songre_005.jpg') }}" alt="">
        </div>
    </div>
    {{--<video width="100%" src="{{url('assets/images/songre_006.mp4')}}" controls="controls">--}}
        {{--您的浏览器不支持 video 标签。--}}
    {{--</video>--}}

    <div class="detail-randoms clearfix">
        <h4>
            <span class='dib vm'>Award</span>
            <i class="splitor_white large"></i>
            <span class="dib vm">項目獎項</span>
        </h4>
    </div>
    <div class="detail-related clearfix">
        <div class="related-links swiper-container" id="related-links">
            <div class="swiper-wrapper">
                <div class="swiper-slide h7"><a href="{{ url('award') }}" style="background: url({{ cdn_url('assets/images/dpic-05.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"><!-- <img src="{{ cdn_url('assets/images/banner.jpg') }}" alt=""> --></a></div>
                <div class="swiper-slide h7">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url('assets/images/013.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"></a>
                </div>
                <div class="swiper-slide h7">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url('assets/images/020.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-randoms clearfix">
        <h4>
            <span class='dib vm'>More like this</span>
            <i class="splitor_white large"></i>
            <span class="dib vm">類似項目</span>
        </h4>
    </div>
    <!-- work-detail-randoms end -->
    <div class="detail-related clearfix">
        <div class="related-links swiper-container" id="related-links">
            <div class="swiper-wrapper">
                <div class="swiper-slide h7"><a href="{{ url('workDetail') }}" style="background: url({{ cdn_url('assets/images/008.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"><!-- <img src="{{ cdn_url('assets/images/banner.jpg') }}" alt=""> --></a></div>
                <div class="swiper-slide h7">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url('assets/images/013.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"></a>
                </div>
                <div class="swiper-slide h7">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url('assets/images/020.jpg',750,700,'!750x700r') }}) 50% no-repeat; background-size: cover;"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- work-detail-related end -->
    <!-- footer -->
    @include('layouts.mobile_footer')
    <!-- footer end-->
    </div>
@stop


@section("script")
    <script>
        var swiper = new Swiper('#banner', {
            autoplay: 4000,
            speed: 1500,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,
            autoplayDisableOnInteraction: false
        });
        /* */
        // var swiper2 = new Swiper('#combar', {
        //     autoplay: 4000,
        //     speed: 500,
        //     pagination: '.combar-pagination',
        //     nextButton: '.combar-next',
        //     prevButton: '.combar-prev',
        //     paginationClickable: true,
        //     autoplayDisableOnInteraction: false
        // });

        /*work detail */
        // var swiper3 = new Swiper('#related-links', {
        //     paginationClickable: true,
        //     slidesPerView: 3,
        //     spaceBetween: 0,
        //     breakpoints: {
        //         770: {
        //             slidesPerView: 1,
        //             spaceBetween: 10
        //         }
        //     }
        // });
    </script>
    <script type="text/javascript">
        //   document.onreadystatechange = loading;
        // function loading(){
        //         if(document.readyState == "complete")
        //         {
        //             $("#loading").hide().remove();
        //             $("#content").css({
        //                 opacity: '1',
        //                 filter: ' alpha(opacity=100)'
        //             });

        //         }
        //         }

        $(function() {
            test();;
        });

        function test() {
            var count = $("img").length;
            var num = 0;
            $("img").each(function(a, athis) {
                if (athis.complete) {
                    num++;
                }
            });
            if (count == num) {
                $("#loading").hide();
                $(".wrapper").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });
            } else {
                setTimeout(test, 20);
            }

        }
        // aPlays();
        $(".header .btn-menu").click(function(){
            var on = $(this).prev('.logo').children("a").attr('class');
            if(on.indexOf('on')>=0) {
                $(this).parents(".header").css('background', '#fff');
            }else{
                $(this).parents(".header").css('background', 'none');
            }
        });
        function aPlays() {
            var vplay = document.getElementById("detailVideo");
            var btna = document.getElementById("aplay");
            btna.onclick = function() {
                $(btna).addClass("played")
                if (vplay.paused) {
                    vplay.play();
                    $(".video-text").css({
                        display: "none"
                    });
                } else {
                    vplay.pause();
                    $(".video-text").css({
                        display: "block"
                    });
                }
            }


        }
    </script>
@stop