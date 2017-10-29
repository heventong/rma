@extends('layouts.mobile_common')

@section("content")

    <!-- loading end -->
    <div class="wrapper">
        <!-- header -->
        <!--<div class="header" style="background:transparent">
            <h1 class="logo"><a class="" href="{{ url('index') }}" style="color:#fff">RMA</a></h1>
        </div>-->
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <a href="{{ url('home') }}" style="background: url({{ $Data['home']['pic'] }}) center center no-repeat; background-size: cover ">
                        <div class="index-name" >
                            <h3><img src="{{ cdn_url("assets/images/big_logo.png") }}" style="width:80%" /></h3>
                            <span> <?php echo $Data['page_title']['sub_title']?></span>
                            <br/>
                            <span> The sensory revolution of thought</span>
                            <br/>
                            <span>
                                <span class="iconfont2 icon-wechat" href="javascript:;" onclick="wechat()"> </span>
                                <span class="iconfont2 icon-weibo" href="#"> </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop


@section("script")
<script>
       
                $("#loading").hide();
                $(".wrapper").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });
    </script>
@stop