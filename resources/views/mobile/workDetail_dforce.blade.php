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
                <?php foreach($Data['banner'] as $value){?>
                <div class="swiper-slide">
                    <a href="{{$value['url']}}" style="background: url({{ $value['pic'] }}) 50% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>{{$value['sub_title']}} </span>
                            <h3 class="pb20"><?php echo $value['title']?></h3>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>
        <!-- scroll-down-arrow end-->
        <div class="work-detail-title clearfix" >
            <div class="title-left">
                <h5><?php echo $Data['page_title']?></h5>
            </div>
            <div class="title-right">
                <ul>
                    <li>
                        <h4><?php echo $Data['service']?></h4>
                        <h4 class="ch"><?php echo $Data['service_zh']?></h4>
                    </li>

                </ul>
            </div>
            <div class="title-left">
                <?php echo $Data['page_content']?>
                </div>
            </div>
        </div>
        <!-- work-detail-title end -->
        <div class="wrap-bg">
            <div class="detail-com  clearfix">
                <img class="pct120" src="{{ $Data['workdetail1'] }}" alt="">
            </div>
            <div class="detail-com  clearfix" style="height: 9.5rem;">
                <img class="pct120" src="{{ $Data['workdetail2'] }}" alt="">
                <div style="width:40%;height:4px;position: relative;top: -7rem;float: right;background-color:white;overflow:hidden;"></div>
                <div style="float:left;width: 4px;height: 47em;background: white;position: relative;top: -47em;left: 15.4em;"></div>
            </div>
            <div class="detail-com  clearfix" style="height: 9.5rem;">
                <img class="pct120" src="{{ $Data['workdetail3'] }}" alt="">
                <div style="width:40%;height:4px;position: relative;top: -7rem;float: left;background-color:white;overflow:hidden;"></div>
                <div style="float:left;width: 4px;height: 47em;background: white;position: relative;top: -47em;left: 0em;"></div>
            </div>
            <div class="detail-com  clearfix">
                <img class="pct120" src="{{ $Data['workdetail4'] }}" alt="">
            </div>
            <div class="detail-com  clearfix">
                <img class="pct120" src="{{ $Data['workdetail5'] }}" alt="">
            </div>
        </div>
        <video width="100%" src="{{$Data['honor1']}}" controls="controls">
        您的浏览器不支持 video 标签。
        </video>

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
                    <div class="swiper-slide h7"><a href="{{ url('award') }}" style="background: url({{ $Data['honor2'] }}) 50% no-repeat; background-size: cover;"><!-- <img src="{{ cdn_url('assets/images/banner.jpg') }}" alt=""> --></a></div>
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
        $(".header .btn-menu").click(function(){
            var on = $(this).prev('.logo').children("a").attr('class');
            if(on.indexOf('on')>=0) {
                $(this).parents(".header").css('background', '#fff');
            }else{
                $(this).parents(".header").css('background', 'none');
            }
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