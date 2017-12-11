@extends('layouts.common')

@section("content")
    <style>
        .header-bg div{
            margin: auto;
            width: 600px;
            line-height: 60px;

        }
        .header-bg div span{
            display:inline-block;
            width:180px;
            font-size:20px;
            text-align: center;
            font-family:'Aharoni';
        }
        .work-detail-title{
            width:100%;
            text-align:center;
            max-width:100%;
        }
        .work-detail-title{
            background:none;
            background-color:black;
        }
        .title-left h6, .com-left h6{
            font-size:12px;
        }
        .title-left h5, .com-left h5{
            font-size:23px;
        }
        .detail-com{background-color:black}
        .img_height img{
            /*height: 30em;*/
        }
    </style>

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
        <div class="header-bg">
            <div>
                <span>FEATURED</span>
                <span>CLIENTS</span>
                <span>IDUDSTRIES</span>
            </div>
        </div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($Data['banner'] as $value){ ?>
                <div class="swiper-slide">
                    <a href="{{ $value['url'] }}" style="background: url({{ $value['pic'] }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span>{{$value['sub_title']}} </span>
                            <h3 class="pb20"><?php echo $value['title'];?></h3>
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

                <h5>Aotu/Panyu Guangzhou China/廣州番禺/300 m/2017</h5>
                <h5>Servies/Interior Design/FF&E Design/Category/Club/bar/hospility</h5>
                <h6>服務範疇/室內設計/軟裝設計/標簽/俱樂部/酒吧/會所</h6>
                {{--<h6 class="pb5">Under the morden skins</h6>--}}
                {{--<h5 class="ch">現代皮囊之下</h5>--}}
                {{--<p class="pb5">Under the modern material of China</p>--}}
                {{--<p class="ch pb10">現代物料下的中國想象</p>--}}
            </div>

        </div>
        <!-- work-detail-title end -->
        <div class="wrap-bg ">
            <div class="detail-com clearfix img_height" style="overflow:hidden;">
                <div style="width:50%;float:left;">
                    <img id="xclub0" src="{{ $Data['workdetail1'] }}" alt="">
                </div>
                <div style="width:50%;overflow:hidden;float:left">
                    {{--<div style="float:left;width:50%;min-height: 320px;"><img src="{{ cdn_url('assets/images/mbpic-02.jpg',500,640,'!950x500r') }}" alt=""></div>--}}
                    {{--<div style="float:left;width:50%;min-height: 320px;"><img src="{{ cdn_url('assets/images/mbpic.jpg',500,640,'!950x500r') }}" alt=""></div>--}}
                    <div style="float:left;width:50%;"><img src="{{ $Data['workdetail2'] }}" alt=""></div>
                    <div style="float:left;width:50%;"><img src="{{ $Data['workdetail3'] }}" alt=""></div>
                </div>
            </div>
            <!-- work-detail-com end -->


            <div class="detail-com clearfix" style="overflow:hidden;padding-bottom:40px">
                <div style="float:left;width:50%;">
                    <img id="xclub_img1" src="{{ $Data['workdetail4'] }}" alt="">
                </div>
                <div style="float:left;width:50%;margin-top:20px">
                    <img src="{{ $Data['workdetail5'] }}" alt="">
                </div>
            </div>

            <div class="detail-com clearfix" style="overflow:hidden;">
                <div style="width:65%;float:left">
                    {{--<img id="dpic" src="{{ cdn_url('assets/images/dpic-02-2.jpg',1400,400,'!700x230r') }}" alt="">--}}
                    <img id="dpic" src="{{ $Data['honor1'] }}" alt="">
                </div>
                <div style="width:35%;float:left">
                    <a href="{{ url('award') }}"><img src="{{ $Data['honor2'] }}" alt=""></a>
                </div>
            </div>



            <!-- work-detail-video end -->
        <!--<div class="detail-randoms award-list clearfix">
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
            test();
            revise();
        });

        function revise(){
            var height = document.getElementById('dpic').clientHeight;
            $('#dpic').parents(".detail-com").css('height', height);
//            var xclubheight = document.getElementById('xclub0').clientHeight;
//            $('#xclub1').parents('.detail-com').css('height', xclubheight);
            var xclub_img1 = document.getElementById('xclub_img1').clientHeight;
            var next_img = $("#xclub_img1").parents(".detail-com")[0].lastElementChild.clientHeight;
            $("#xclub_img1").css('margin-top',((next_img-xclub_img1)+20));

        }

        function test() {
            var count = $("img").length;
            var num = 0;
            $("img").each(function(a, athis) {
                if (athis.complete) {
                    num++;
                }
            });
            if (count == num) {
                revise();
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