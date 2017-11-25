@extends('layouts.common')

@section("content")

    <!-- loading end -->
    <div class="wrapper">
        <!-- header -->
        <div class="header" style="background:transparent">
            <h1 class="logo"><a class="" href="{{ url('index') }}" style="/*color:#fff*/">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <a href="{{ url('home') }}" style="background: url({{ $Data['home']['pic'] }}) center center no-repeat; background-size: cover ">
                        <div class="index-name" >
                            <h3><img src="{{ cdn_url("assets/images/big_logo_new.png") }}" style="width:585px" /></h3>
                            <span style="margin:auto;margin-top:38px;display: block;width: 300px;height: 30px;line-height: 30px;">@lang('index.page_title.sub_title')</span>

                            <span class="title-en">The sensory revolution of thought</span>

                            <div class="index-tool" style="">
                                <span class="iconfont2 icon-wechat" href="javascript:;" onclick="wechat()"> </span>
                                <span class="iconfont2 icon-weibo" href="#"> </span>
                                <!-- <span class="iconfont2 icon-linkedin" href="#"></span> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop


@section("script")
    <script>
        function showLogo(){
            $(".header h1 a").html('')
            $(".header h1 a").append("<img src='/assets/images/RMA.png'/>");
        }
        showLogo();
        $("#loading").hide();
        $(".wrapper").css({
            opacity: '1',
            filter: ' alpha(opacity=100)'
        });
    </script>
@stop