@extends('layouts.common')

@section("content")

     
    <!-- loading end -->
    <div class="news wrapper">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div class="banner bg-common-white ">
            <div class="w1400">
                <div class="col col-1 mt100">
                    <h1>@lang("news.banner_title")</h1>
                    <p>@lang("news.banner_title_ch")</p>
                </div>
                <div class="col col-2 mt100">
                    <h1>@lang("news.banner_title2")</h1>
                    <p>@lang("news.banner_title2_ch")</p>
                </div>
            </div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>
       
        <div>
            <video width="100%" src="{{ $Data['news']['pic'] }}" controls="controls">
                your browser does not support the video tag
            </video>
        </div>
        <!-- news-detail-title end -->
        <div class="wrap-bg">
            <div class="detail-com p20 clearfix">
                <!-- <img class="" src="{{ cdn_url('assets/images/award-pic.jpg') }}" alt=""> -->
            </div>
            <div class="news-detail-title clearfix">
            <br/>
            <br/>
            <br/>
            <br/>
            
                <p>@lang("news.content")</p>
                <p class="ch">@lang("news.content_ch")</p>
            </div>
            <div class="detail-com clearfix">
                            <img class="" src="{{ $Data['news2']['pic'] }}" alt="">
            </div>
        </div>

        <!-- work-detail-related end -->
        <!-- footer -->
        @include('layouts.footer')
        <!-- footer end-->
    </div>
@stop


@section("script")
   
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

        $(function(){
            $('.ban-text').css("bottom","20px");
        });
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
    </script>
@stop