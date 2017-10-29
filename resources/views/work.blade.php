@extends('layouts.common')

@section("content")

       <!-- loading end -->
    <div class="wrapper work">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu"></span>
<!--             <div class="work-nav">
                <a class="nav-link actvie" href="#">Featured</a>
                <a class="nav-link" href="#">Clients</a>
                <a class="nav-link" href="#">Clients</a>
            </div> -->
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
        <div class="text-title">
            <h2>
                @lang("work.sub_title")
                <br /><span class="ch">@lang("work.sub_title_ch")</span>
            </h2>
            <!--<p>independent thinking,harmonization and difference independent thinking,harmonization and difference</p>-->
        </div>
        <!-- tetx-title end -->
        <!-- grid-container -->
        <div class="grid-container">
            <ul class="work clearfix">
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work.jpg') }}" alt="work"></a>
                </li>
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work-02.jpg') }}" alt="work"></a>
                </li>
                <li>
                    <a href="{{ url('workList') }}"><img src="{{ cdn_url('assets/images/work-03.jpg') }}" alt="work"></a>
                </li>
            </ul>
        </div>
        <!-- grid-container end -->
        <!-- footer -->
        @include('layouts.footer')
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

var loaded = false;
$(window).scroll(function(e){
    console.debug(1)
    if(!loaded && $(window).scrollTop() > 200){
        $(".work li").each(function(idx,item){
            (function(item){
                setTimeout(function(){
                    $(item).addClass("bounceInUp animated").show();
                },100*idx)
            })(item,idx);
        });
    }
});





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