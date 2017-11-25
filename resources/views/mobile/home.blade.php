@extends('layouts.mobile_common')

@section("content")
    <style>
        .text-title .ch{margin-top: 10px}
        .ban-text div{background-color: black;margin-bottom:10px;}
        .grid-item-culture aside h5{line-height: 19px}
    </style>
    <!-- loading end -->
    <div class="wrapper home">
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
                <?php foreach ($Data['banner'] as $value ){?>
                <div class="swiper-slide">
                    <a href="{{ $value['url'] }}" style="background: url({{ $value['pic'] }}) 50% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span> <?php echo $value['sub_title']?></span>
                            <h3><?php echo $value['title']?></h3>
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
        <div class="text-title bg-common">
            <!--<span class="icon-ds-squiggle"></span>-->
            <h2><?php echo $Data['text_title_mobile']?><br /><br /><span class="ch"><?php echo $Data['text_title_ch_mobile'];?></span></h2>
        </div>
        <!-- tetx-title end -->
        <!-- grid-container -->
        <div class="grid-container clearfix">
            <div class="work-wrapper effect-2">
                <div class="grid-item">

                    <a href="{{ $Data['dforce']['url'] }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['dforce']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['dforce']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ $Data['dforce2']['url'] }}" class="grid-item-image ">
                        <div class="image h12"><img src="{{ $Data['dforce2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['dforce2']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items ">
                    <a href="{{ $Data['songclub']['url'] }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['songclub']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songclub']['title']?></h6>
                            </div>
                            
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ $Data['xclub']['url'] }}"  class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['xclub']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['xclub']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items ">
                    <a href="{{ $Data['cave']['url'] }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['cave']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['cave']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
		
                <div class="grid-item">
                    <a href="{{ $Data['songrestaurant']['url'] }}" class="grid-item-image">
                        <div class="image h12"><img src="{{ $Data['songrestaurant']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songrestaurant']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items " style="background:url({{ cdn_url("assets/images/bg_db.png") }})  no-repeat right;background-size:cover">
                    <a href="{{ url('serve') }}" class="grid-item-culture  h7">
                        <aside>
                            <h6><span>CAREE</span></h6>
                            <h5>WITH A REVOLUTIONARY,<br /> PIONEERING, EXPERIMENTAL SPIRIT<br /> UNINHIBITED LOVE OF THE BRAVE</h5>
                            <h6 class="ch">我們正在召集：</h6>
                            <h5 class="ch">具有革命性、先鋒性、實驗性精神<br />不羈愛思考的勇者</h5>
                        </aside>
                    </a>
                </div>

                <div class="grid-item grid-items ">
                    <a href="{{ $Data['careers']['url'] }}"  class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['careers']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['careers']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items " style="background:#000 url({{ cdn_url("assets/images/bg_db.png") }})  no-repeat right;background-size:cover">
                    <a href="{{ url('serve') }}" class="grid-item-culture h9">
                        <aside>
                            <h6><span>BLIVE</span></h6>
                            <h5>DIVERSITY IS NOT A<br/>CHARACTERISTIC OF LIFE, IT IS A<br/>NECESSARY CONDITION FOR LIFE,<br/>LIKE AIR AND WATER IN GENERAL,<br/>STANDARDIZED AS A BRUTAL<br/>GROWTH OF COMMERCIAL<br/>CONSPIRACY</h5>
                            <h6  class="ch">我們信條：</h6>
                            <h5  class="ch">多樣性不是生活的特色，它是生活的必要條件，像空氣和水壹般，標準化如壹場野蠻生長的商業陰謀</h5>
                        </aside>
                    </a>
                </div>

            </div>
        </div>
        <!-- grid-container end -->
        
        <a href="{{ url('about') }}" class="media-intro" style="background: url({{ cdn_url("assets/images/home_bottom_bg.jpg",400,700,'!400x700r') }}) no-repeat center center;background-size:cover;" href="">
            <aside class="ds-padded-text">
                <p>Republican city has been founded, with innovative, creative spirit for the community to provide a variety of design products, covering construction, clubs, restaurants, office, residential and other space, innovative bold design for the space into the new vitality, during the harvest of 21 works Global Top Design Competition Award</p>
                <p class="ch">共和都市創辦至今，以革新的、創造的精神為社會提供多樣性的設計產品，<br />涵蓋建築、會所、餐飲、辦公、住宅等空間，創新大膽的設計為空間註入新的活力，<br />期間作品收獲21個全球頂尖設計賽事獎</p>
                {{--<i class="icon-right"></i>--}}
            </aside>
        </a>
        @include('layouts.mobile_footer')
    </div>

@stop


@section("script")
<script>
        var swiper = new Swiper('#banner', {
            autoplay: 5000,
            speed: 800,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,
            autoplayDisableOnInteraction: false,
            onSlideChangeStart: function(swiper){
                // if( swiper.activeIndex == 2 )
                    // $("#video").show();
                    // $("#video").get(0).play();
            }
        });
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
@stop