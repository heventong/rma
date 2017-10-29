@extends('layouts.mobile_common')

@section("content")
    <style>
        .header .logo>a,.header .btn-menu,.header .logo>a.sOn, .sOn{color:red;}

    </style>

    <!-- loading end -->
    <div class="news wrapper">
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
        <!--<div class="back-work"><a href="{{ url('worklist') }}">back to work</a></div>-->
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div class="banner bg-common-white ">
            <div class="w1400">
                <div class="col col-1 mt100">
                    <h1><?php echo $Data['banner_title']?></h1>
                    <p><?php echo $Data['banner_title_ch']?></p>
                </div>
                <div class="col col-2 mt10">
                    <h1><?php echo $Data['banner_title2']?></h1>
                    <p><?php echo $Data['banner_title2_ch']?></p>
                </div>
            </div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>

        <!-- news-detail-title end -->
        <div class="wrap-bg">
            <div class="detail-com p20 clearfix">
                <img class="" src="{{ cdn_url('assets/images/award-pic.jpg') }}" alt="">
            </div>
            <div class="news-detail-title clearfix">
                <p><?php echo $Data['content']?></p>
                <p class="ch"><?php echo $Data['content_ch']?></p>
            </div>
            <div class="detail-com clearfix">
                <img class="" src="{{ $Data['news']['pic'] }}" alt="">
            </div>
        </div>

        <!-- work-detail-related end -->
        <!-- footer -->
    @include('layouts.mobile_footer')
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