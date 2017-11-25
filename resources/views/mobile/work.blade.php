@extends('layouts.mobile_common')

@section("content")

       <!-- loading end -->
    <div class="wrapper work">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu"></span>
             <div class="work-nav">
                <a class="nav-link actvie" href="#">FEATURED</a>
                <a class="nav-link" href="#">CLIENTS</a>
                <a class="nav-link" href="#">IDUDSTRIES</a>
            </div> 
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" style="background: url({{ cdn_url('assets/images/banner.jpg') }}) 50% no-repeat; background-size: cover;">
                        <!--<div class="ban-text">
                            <span>song's restaurant</span>
                            <h3>under the morden skins</h3>
                            <p>independent thinking,harmonization and dmerence</p>
                        </div>-->
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>
        <!--  scroll-down-arrow end-->
        <div class="text-title h7 bg-common" style="padding:1.2rem .5rem">
            <!--<span class="icon-ds-squiggle"></span>-->
            <h2>@lang("work.sub_title")</h2>
            <h2 class="pt20">@lang("work.sub_title_ch")</h2>
            <!--<p>independent thinking,harmonization and difference independent thinking,harmonization and difference</p>-->
        </div>
        <!-- tetx-title end -->
        <!-- grid-container -->
        <div class="grid-container">
            <ul class="work clearfix">
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work.jpg',750,900,'!750x900r') }}" alt="work"></a>
                </li>
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work-02.jpg',750,900,'!750x900r') }}" alt="work"></a>
                </li>
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work-03.jpg',750,900,'!750x900r') }}" alt="work"></a>
                </li>
            </ul>
        </div>
        <!-- grid-container end -->
        <!-- footer -->
        @include('layouts.mobile_footer')
        <!-- footer end-->
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
            autoplayDisableOnInteraction: false
        });
    </script>
    
    <script type="text/javascript">
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