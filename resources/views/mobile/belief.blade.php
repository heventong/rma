@extends('layouts.mobile_common')

@section("content")
    <style>
        .header .logo>a{color:white}
        .header .btn-menu{color:white}
        .header .logo>a.sOn, .sOn{color:#332c2a!important}
    </style>
    <!-- loading end -->
    <div class="wrapper belief">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
            <!--<div class="work-nav">
                <a class="nav-link actvie" href="#">Featured</a>
                <a class="nav-link" href="#">Clients</a>
                <a class="nav-link" href="#">Clients</a>
            </div>-->
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($Data['banner'] as $value){ ?>
                <div class="swiper-slide" >
                    <a href="{{ $value['url'] }}" style="background: url({{$value['pic']}}) center center no-repeat;background-size: cover">
                        <div class="ban-text"  style="bottom:20px">
                            <span>{{$value['sub_title']}}</span>
                            <h3><?php echo $value['title']?></h3>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="scroll-down-arrow animated"></div>
        <!--  scroll-down-arrow end-->
        <div class="wrap-bg">
            <!-- careers -->
            <div class="belief bg-common clearfix">
                <div class="belief-brief clearfix">
                    <div class="brief-left bg-common" style=" background:url({{ cdn_url('assets/images/belief-01.jpg') }}) no-repeat; ">

                        <a href="{{ url('news') }}" class="h7">
                            <div style="position:absolute;bottom:60px">
                                <h3><span><?php echo $Data['it']['title']?></span></h3>
                                <h4><span><?php echo $Data['it']['title_ch']?></span></h4>
                            </div>
                        </a>
                    </div>
                    <div class="brief-right" style="text-align:center">
                        <a href="{{ url('news') }}" class="">
                            <h3><?php echo $Data['ae_title']?></h3>
                            <h4><?php echo $Data['ae_title_ch']?></h4>
                            <p class="pt30"><?php echo $Data['ae_desc']?></p>
                            <p class="ch pt30"><?php echo $Data['ae_desc_ch']?></p>
                        </a>
                    </div>
                </div>
                <!-- 
          默认： 小图向右，文字背景第一种 
          加类 a.fl：小图向左，文字背景 加类 a.bg9f 
           -->
                <ul class="belief-items">
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                            <!--<h3><span>@lang("belief.it1_title")</span>@lang("belief.it1_desc")</h3>
                                 <h4><span>@lang("belief.it1_title_ch")</span>@lang("belief.it1_desc_ch")</h3>-->
                            </div>
                            <img src="{{ $Data['it1']['pic'] }}" alt="belief">
                        </a>
                    </li>

                    <li class="bBox">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it2_title")</span>@lang("belief.it2_desc")</h3>
                                <h4><span>@lang("belief.it2_title_ch")</span>@lang("belief.it2_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-03.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it3_title")</span>@lang("belief.it3_desc")</h3>
                                <h4><span>@lang("belief.it3_title_ch")</span>@lang("belief.it3_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-04.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it4_title")</span>@lang("belief.it4_desc")</h3>
                                <h4><span>@lang("belief.it4_title_ch")</span>@lang("belief.it4_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-05.jpg',750,700,'!750x700r') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bBox">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it5_title")</span>@lang("belief.it5_desc")</h3>
                                <h4><span>@lang("belief.it5_title_ch")</span>@lang("belief.it5_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-06.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it6_title")</span>@lang("belief.it6_desc")</h3>
                                <h4><span>@lang("belief.it6_title_ch")</span>@lang("belief.it6_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-07.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                            <!--<h3><span>@lang("belief.it7_title")</span>@lang("belief.it7_desc")</h3>
                                 <h4><span>@lang("belief.it7_title_ch")</span>@lang("belief.it7_desc_ch")</h3>-->
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-08.jpg',750,700,'!750x700r') }}" alt="belief">
                        </a>
                    </li>

                    <li class="bBox">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it8_title")</span>@lang("belief.it8_desc")</h3>
                                <h4><span>@lang("belief.it8_title_ch")</span>@lang("belief.it8_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-09.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it9_title")</span>@lang("belief.it9_desc")</h3>
                                <h4><span>@lang("belief.it9_title_ch")</span>@lang("belief.it9_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-10.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it10_title")</span>@lang("belief.it10_desc")</h3>
                                <h4><span>@lang("belief.it10_title_ch")</span>@lang("belief.it10_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-12.jpg',750,700,'!750x700r') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bBox">
                        <a href="{{ url('news') }}" class="fl">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it11_title")</span>@lang("belief.it11_desc")</h3>
                                <h4><span>@lang("belief.it11_title_ch")</span>@lang("belief.it11_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-11.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it12_title")</span>@lang("belief.it12_desc")</h3>
                                <h4><span>@lang("belief.it12_title_ch")</span>@lang("belief.it12_desc_ch")</h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-13.jpg',375,350,'!375x350r') }}" alt="belief">
                        </a>
                    </li>

                </ul>


            </div>
            <!-- belief end-->

        </div>
        <!-- wrap-bg end-->

        <!-- footer -->
    @include('layouts.mobile_footer')
    <!-- footer end-->
    </div>
@stop


@section("script")
    <script>
        $("#loading").hide();
        $(".wrapper").css({
            opacity: '1',
            filter: ' alpha(opacity=100)'
        });
        // $(function() {
        //     test();
        // });

        // function test() {
        //     var count = $("img").length;
        //     var num = 0;
        //     $("img").each(function(a, athis) {
        //         if (athis.complete) {
        //             num++;
        //         }
        //     });
        //     if (count == num) {
        //         $("#loading").hide();
        //         $(".wrapper").css({
        //             opacity: '1',
        //             filter: ' alpha(opacity=100)'
        //         });
        //     } else {
        //         setTimeout(test, 20);
        //     }

        // }
    </script>
@stop