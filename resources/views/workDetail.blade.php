@extends('layouts.common')

@section("content")

     
    <!-- loading end -->
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
            <!--<div class="work-nav">
                <a class="nav-link" href="#">Featured</a>
                <a class="nav-link" href="{{ url('worklist') }}">Clients</a>
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
            </div>-->
            <div class="back-work"><a href="{{ url('workList') }}">back to work</a></div>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url("assets/images/003.jpg",1440,900,'!1440x900r') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>X-Club </span>
                            <h3 class="pb20">Walking<br />in the sky<br /><span>云端漫步</span></h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url("assets/images/004.jpg",1440,900,'!1440x900r') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>X-Club</span>
                            <h3 class="pb20">Walking<br />in the sky<br /><span>云端漫步</span></h3>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ url('workDetail') }}" style="background: url({{ cdn_url("assets/images/013.jpg",1440,900,'!1440x900r') }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>X-Club</span>
                            <h3 class="pb20">Walking<br />in the sky<br /><span>云端漫步</span></h3>
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
        <div class="work-detail-title clearfix" style="margin-top:-30px">
            <div class="title-left">
                <h6>X-Club</h6>
                <h5>1120 m<sup>2</sup></h5>
                <h6>CBD Nanning Guangxi</h6>
                <h6 class="ch">廣西南寧</h6>
                <h5>2017</h5>                
            </div>
            <div class="title-right">
                <ul>
                    <li>
                        <h4>Services</h4>
                        <h4 class="ch">服務範疇</h4>
                    </li>
                    <li>
                        <h4>interior design</h4>
                        <h4 class="ch">室內設計</h4>
                    </li>
                    <li>
                        <h4>ff/e design</h4>
                        <h4 class="ch">軟裝設計</h4>
                    </li>
                    <li>
                        <h4>Category</h4>
                        <h4 class="ch">標籤</h4>
                    </li>
                    <li>
                        <h4>club/bar/hospility</h4>
                        <h4 class="ch">俱樂部 酒吧 會所</h4>
                    </li>
                </ul>
            </div>
        </div>
        <!-- work-detail-title end -->
        <div class="wrap-bg">
            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/003.jpg',950,500,'!950x500r') }}" alt="">
            </div>
            <!-- work-detail-com end -->
            <div class="work-detail-title clearfix">
            <div class="title-left">
                    <h6 class="pb5">Walking in the sky</h6>
                    <h5 class="ch">云端漫步</h5>
                    <p class="pb5">Moon out of the mountains, vast sea of clouds</p>
                    <p class="ch pb10">明月出天山，苍茫云海间</p>
                    <p class="pb5">X-club to cloud the imagination to create space to the air to walk  on the future description of the scene. To create a surreal experience.</p>
                    <p class="ch ">以云端的诗意想象来打造空间，以空中漫步对未来景象进行描述。打造超现实的体验感。</p>
                </div>
            </div>

            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/004.jpg',950,500,'!950x500r') }}" alt="">
            </div>

            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/005.jpg',950,500,'!950x500r') }}" alt="">
            </div>
            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/008.jpg',950,500,'!950x500r') }}" alt="">
            </div>
            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/013.jpg',950,500,'!950x500r') }}" alt="">
            </div>
            <div class="detail-com clearfix">
                <img class="pct120" src="{{ cdn_url('assets/images/020.jpg',950,500,'!950x500r') }}" alt="">
            </div>
            
            <!--<div class="detail-video clearfix"  id="aplay" >
                <video id="detailVideo" width="100%"  poster="{{ cdn_url('assets/images/dpic-02-2.jpg') }}">
                        <source src="{{ cdn_url('assets/images/video.webm') }}" type="video/webm">
                        <source src="{{ cdn_url('assets/images/video.mp4') }}" type="video/mp4">
                        Your browser doesn't support HTML5 video tag.
                  </video>
            </div>-->
            <!-- work-detail-video end -->
            <!--<div class="detail-randoms clearfix">
                <h3>
                    <span class='dib vm'>Award</span>
                    <i class="splitor_white large"></i>
                    <span class="dib vm">項目獎項</span>
                </h3>
                <div class="random on" onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn"><img src="{{ cdn_url('assets/images/dpic-03.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-04.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img"><img src="{{ cdn_url('assets/images/dpic-05.jpg',320,320,'!320x320r') }}" alt=""></div>
                </div>
                <div class="random" onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn"><img src="{{ cdn_url('assets/images/dpic-04.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img"><img src="{{ cdn_url('assets/images/dpic-05.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img"><img src="{{ cdn_url('assets/images/dpic-03.jpg',320,320,'!320x320r') }}" alt=""></div>
                </div>
                <div class="random" onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn"><img src="{{ cdn_url('assets/images/dpic-05.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img"><img src="{{ cdn_url('assets/images/dpic-03.jpg',320,320,'!320x320r') }}" alt=""></div>
                    <div class="randoms-img"><img src="{{ cdn_url('assets/images/dpic-04.jpg',320,320,'!320x320r') }}" alt=""></div>
                </div>
            </div>-->
        </div>

        <!-- work-detail-randoms end -->
        <div class="detail-related clearfix" style="padding-top:70px;background-color:black;">
            <div class="related-title">
                <h4>
                    <span class='dib vm'>More like this</span>
                    <i class="splitor_white large"></i>
                    <span class="dib vm">類似項目</span>
                </h4>
            </div>

            <div class="related-links swiper-container" id="related-links">
                <div id="relate" class="swiper-wrapper detail-randoms  project-list">
                    <div class="random" onclick="location.href = $(this).find('.sOn').attr('url')">
                        <div class="randoms-img sOn" url="{{ url('workDetail?project=songclub') }}"><img src="{{ cdn_url('assets/images/DK-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=songclub') }}"><img src="{{ cdn_url('assets/images/song_club_slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=songclub') }}"><img src="{{ cdn_url('assets/images/song_club_slider2.jpg',350,480,'!350x480r') }}" alt=""></div>
                    </div>
                    <div class="random" onclick="location.href = $(this).find('.sOn').attr('url')">
                        <div class="randoms-img sOn" url="{{ url('workDetail?project=cave') }}"><img style="height: 100%" src="{{ asset('assets/images/cave_list.png') }}" alt=""></div>
                        
                        <div class="randoms-img" url="{{ url('workDetail?project=songrestaurant') }}"><img src="{{ cdn_url('assets/images/SongRestraunt-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=xclub') }}"><img src="{{ cdn_url('assets/images/xclub2-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=xclub') }}"><img src="{{ cdn_url('assets/images/Xclub-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                    </div>
                    <div class="random on" onclick="location.href = $(this).find('.sOn').attr('url')">
                        <div class="randoms-img sOn" url="{{ url('workDetail?project=aotubar') }}"><img src="{{ cdn_url('assets/images/aotu-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=dfroce') }}"><img src="{{ cdn_url('assets/images/Dfroce2-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                        <div class="randoms-img" url="{{ url('workDetail?project=dfroce') }}"><img src="{{ cdn_url('assets/images/Dfroce-slider.jpg',350,480,'!350x480r') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- work-detail-related end -->
        <!-- footer -->
        @include('layouts.footer')
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
        //     speed: 500,40
        //     pagination: '.combar-pagination',40
        //     nextButton: '.combar-next',40
        //     prevButton: '.combar-prev',
        //     paginationClickable: true,
        //     autoplayDisableOnInteraction: false40
        // });40
        /*work detail */
        // var swiper3 = new Swiper('#related-links', {
        //     paginationClickable: true,40
        //     slidesPerView: 3,40
        //     spaceBetween: 0,40
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
        aPlays();

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