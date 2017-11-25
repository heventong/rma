@extends('layouts.common')

@section("content")
<style type="text/css">
    .text-title h2{width: 95%}
    .grid-item-culture aside h6 span{font-family: "Renogare";letter-spacing:2px;font-size: 12px}
    .grid-item-culture aside h5{font-weight: 200}
    aside .ch {font-size: 12px;}
    .grid-item-culture aside h6.ch span{font-family: FZShuSong-Z01T}
    .grid-item-culture aside h6 span{letter-spacing: 4px}
    .grid-item-culture aside h5.ch{font-size: 15px;font-family: FZShuSong-Z01T}
    .caree h6[class='ch'] span,.blive h6[class='ch'] span{font-size: 15px!important}
</style>
    <!-- loading end -->
    <div class="home wrapper">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper ">
                <?php foreach($Data['banner'] as $key => $value){ ?>
                <div class="swiper-slide">
                    <?php if(!empty($Data['video'])){echo '<video id="video" repeat src="{{ source_url("assets/images/preview.mp4") }}" width="100%" height="100%"><source src="{{ source_url("assets/images/preview.mp4") }}" type="video/mp4"></video>';}?>
                    <a href="{{ $value['url'] }}" style="background: url({{ $value['pic'] }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span> @lang("home.banner.$key.sub_title")</span>
                            <h3>@lang("home.banner.$key.title")</h3>
                            {{--<h3>@lang("home.banner.$key.desc")</h3>--}}
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
        <!-- text-title -->
        <div class="text-title">
            <!--<span class="icon-ds-squiggle"></span>-->
            <h2>
                @lang("home.page_title_en")
                <br /><span class="ch">@lang("home.page_title_zh")</span>
            </h2>
        </div>
        <!-- tetx-title end -->
        <!-- grid-container -->
        <div class="grid-container clearfix">
            <div class="work-wrapper effect-2">
                <div class="grid-item">
                    <a href="{{ asset($Data['dforce']['url']) }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['dforce']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['dforce']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items ">
                    <a href="{{ asset($Data['songclub']['url']) }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['songclub']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songclub']['title'];?></span></h6>
                            </div>
                            
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ asset($Data['songclub_award']['url']) }}"  class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['songclub_award']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songclub_award']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset($Data['songrestaurant']['url']) }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['songrestaurant']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songrestaurant']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items " style="background:url({{ cdn_url("assets/images/bg_db.png",750,750,'!750x750r') }})  no-repeat right;background-size:auto 100%;">
                    <a href="{{ asset($Data['dforce_award']['url']) }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['dforce_award']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['dforce_award']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ url('careers') }}" class="grid-item-culture" >
                        <aside class="caree">
                            @lang('home.caree_title')
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items " style="background:#000 url({{ cdn_url("assets/images/bg_db.png",752,752,'!752x752r') }})  no-repeat right;background-size:auto 100%;">
                    <a href="{{ asset($Data['cave']['url'])  }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['cave']['pic'])  }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['cave']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ url('belief') }}" class="grid-item-culture" >
                        <aside class='blive'>
                            @lang("home.blive_title")
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ asset($Data['xclub']['url']) }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ asset($Data['xclub']['pic']) }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6><span class="title"><?php echo $Data['xclub']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>

            </div>
        </div>
        <!-- grid-container end -->
        
        <a href="{{ url('about') }}" class="media-intro" style="background: url({{ cdn_url("assets/images/home_bottom_bg.jpg",1440,400,'!1440x400r') }}) no-repeat center center;background-size:cover;" href="">
            <aside class="ds-padded-text">
                <p>@lang('home.award_en')</p>
                <p class="ch" >@lang('home.award_zh')</p>
                <i class="icon-right"></i>
            </aside>
        </a>
        @include('layouts.footer')
    </div>

@stop


@section("script")
<script>
    
        var video = $("#video");
        var swiper = new Swiper('#banner', {
            autoplay: 4000,
            speed: 1500,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: false,
            autoplayDisableOnInteraction: false,
            onSlideChangeStart: function(swiper){
                if( swiper.activeIndex == 0 ){
//                    video.show();
//                    video.get(0).play();
                    swiper.stopAutoplay();
                }else{
                    swiper.startAutoplay();
                }
            }
        });
//        video.show();
//        video.get(0).play();
        swiper.stopAutoplay();
//        video.get(0).onended = function(){
//            swiper.slideNext();
//            swiper.startAutoplay();
//        }
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
        });
        var loaded = false;
        $(window).scroll(function(e){
            if(!loaded && $(window).scrollTop() > 200){
                loaded = true;
                $(".grid-item").each(function(idx,item){
                    var mt_rand = Math.ceil(Math.random() * 9) * 50;
                    (function(rand,item,index){
                        setTimeout(function(){
                            $(item).addClass("animate")
                        },index*100 + rand);
                    })(mt_rand,item,idx);
                });
            }
        })

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
    </script>
    <!-- index item-gird -->
    <script>
        (function() {
            setTimeout(function() {
                minigrid('.work-wrapper', '.grid-item', 0, null,
                    function() {
                        var d = document.querySelector('.grid-container');
                        d.style.opacity = 1;
                    }
                );
            }, 100);

            window.addEventListener('resize', function() {
                minigrid('.work-wrapper', '.grid-item');
            });
        })();
    </script>
@stop
