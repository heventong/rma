@extends('layouts.common')

@section("content")
    <style type="text/css">
        .ban-text{
            color: black
        }
        .ban-text span{
            background-color: black;
            color: #878787
        }
        .belief-items li.bBox a img{
            width: 100%;
        }
        .belief-items li .belief-text{
            padding: 10em 9em 0;
        }
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
                <?php foreach($Data['banner'] as $key => $value){ ?>
                <div class="swiper-slide">
                    <a href="{{ $value['url'] }}" style="background-color:#848484">
                        <div class="ban-text" >
                            <span>{{$value['sub_title']}}</span>
                            <h3><?php echo $value['title'];?></h3>
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
                    <div class="brief-left bg-common" >
                        <a href="{{ url('news') }}">
                            <div class="belief-text" style="position: absolute;bottom: 40px;left: 46px;padding: 15px;width: 100%;color: #fff;">
                                 <h3><span>@lang("belief.it1.title")</span></h3>
                                 <h4><span>@lang("belief.it1.title_ch")</span></h4>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-01.jpg') }}" alt="belief">
                        </a>

                    </div>
                    <div class="brief-right" style="background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAJBAMAAAD5iKAgAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAeUExURSIiIl9fXzAwMFhYWEdHRyoqKiUlJT4+Pk9PTzY2Nn4lXf8AAAA+SURBVAjXYxDlKFBmY1BmE2VxYGBxUGQQYkgwYm8IZGgITLBkZ+jkNEhMYEgMaOc0YGAySAxwZ1BwYRJgBADleQkgd0xZkQAAAABJRU5ErkJggg==')">
                        <a href="{{ url('news') }}">
                            <h3>@lang("belief.ae_title")</h3>
                            <h4>@lang("belief.ae_title_ch")</h4>
                            <p>@lang("belief.ae_desc")</p>
                            <p class="ch pt100" style="line-height:34px;letter-spacing:5px">@lang("belief.ae_desc_ch")</p>
                        </a>
                    </div>
                </div>
                <!--
          默认： 小图向右，文字背景第一种
          加类 a.fl：小图向左，文字背景 加类 a.bg9f
           -->
                <ul class="belief-items">
                    <li class="bItems">
                        <a class="test0" href="{{ url('news') }}">
                            <div class="belief-text">
                                 <h3><span>@lang("belief.it1.title")</span></h3>
                                 <h4><span>@lang("belief.it1.title_ch")</span></h4>
                            </div>
                            <img src="{{ $Data['it1']['pic'] }}" alt="belief">
                        </a>
                    </li>

                    <li class="bBox">
                        <a class="test1" href="{{ url('news') }}" style="overflow: hidden;">
                            <div class="belief-text" style="float: left;width: 50%;">
                                <h3><span>@lang("belief.it2.title")</span></h3>
                                <h3><span>@lang("belief.it2.title_ch")</span></h3>
                            </div>
                            <div style="float: left;width: 50%;padding: none">
                                <img src="{{ cdn_url('assets/images/belief-03.jpg') }}" alt="belief" style="">
                            </div>
                        </a>
                        <a class="test2" href="{{ url('news') }}" class="fl bg9f" style="overflow: hidden;">
                            <div class="belief-text" style="float: right;width: 50%;">
                                <h3><span>@lang("belief.it3.title")</span></h3>
                                <h3><span>@lang("belief.it3.title_ch")</span></h3>
                            </div>
                            <div style="float: right;width: 50%;padding: none">
                                <img src="{{ cdn_url('assets/images/belief-04.jpg') }}" alt="belief">
                            </div>
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it4.title")</span></h3>
                                <h3><span>@lang("belief.it4.title_ch")</span></h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-05.jpg') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bBox">
                        <a href="{{ url('news') }}" style="overflow: hidden;">
                            <div class="belief-text" style="float: left;width: 50%;">
                                <h3><span>@lang("belief.it5.title")</span></h3>
                                <h3><span>@lang("belief.it5.title_ch")</span></h3>
                            </div>
                            <div style="float: left;width: 50%;">
                                <img src="{{ cdn_url('assets/images/belief-06.jpg') }}" alt="belief" style="">
                            </div>
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f" style="overflow: hidden;">
                            <div class="belief-text" style="float: right;width: 50%;">
                                <h3><span>@lang("belief.it6.title")</span></h3>
                                <h3><span>@lang("belief.it6.title_ch")</span></h3>
                            </div>
                            <div style="float: right;width: 50%;padding: none">
                                <img src="{{ cdn_url('assets/images/belief-07.jpg') }}" alt="belief">
                            </div>
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}" >
                            <div class="belief-text">
                                <h3><span>@lang("belief.it7.title")</span></h3>
                                <h3><span>@lang("belief.it7.title_ch")</span></h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-08.jpg') }}" alt="belief">
                        </a>
                    </li>

                    <li class="bBox">
                        <a href="{{ url('news') }}" style="overflow: hidden;">
                            <div class="belief-text" style="float: left;width: 50%;">
                                <h3><span>@lang("belief.it8.title")</span></h3>
                                <h3><span>@lang("belief.it8.title_ch")</span></h3>
                            </div>
                            <div style="float: left;width: 50%;">
                                <img src="{{ cdn_url('assets/images/belief-09.jpg') }}" alt="belief" style="">
                            </div>
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f" style="overflow: hidden;">
                            <div class="belief-text" style="float: right;width: 50%">
                                <h3><span>@lang("belief.it9.title")</span></h3>
                                <h3><span>@lang("belief.it9.title_ch")</span></h3>
                            </div>
                            <div style="float: right;width: 50%;padding: none">
                                <img src="{{ cdn_url('assets/images/belief-10.jpg') }}" alt="belief">
                            </div>
                        </a>
                    </li>
                    <li class="bItems">
                        <a href="{{ url('news') }}">
                            <div class="belief-text">
                                <h3><span>@lang("belief.it10.title")</span></h3>
                                <h3><span>@lang("belief.it10.title_ch")</span></h3>
                            </div>
                            <img src="{{ cdn_url('assets/images/belief-12.jpg') }}" alt="belief">
                        </a>
                    </li>
                    <li class="bBox">
                        <a href="{{ url('news') }}" class="fl">
                            <div class="belief-text" style="padding:0;padding-top: 10em;">
                                <h3><span>@lang("belief.it11.title")</span></h3>
                                <h3><span>@lang("belief.it11.title_ch")</span></h3>
                            </div>
                            <img style="width: 408px;height: 100%;" src="{{ cdn_url('assets/images/belief-11.jpg') }}" alt="belief">
                        </a>
                        <a href="{{ url('news') }}" class="fl bg9f">
                            <div class="belief-text" style="padding:0;padding-top: 10em;">
                                <h3><span>@lang("belief.it12.title")</span></h3>
                                <h3><span>@lang("belief.it12.title_ch")</span></h3>
                            </div>
                            <img style="width: 408px;height: 100%;" src="{{ cdn_url('assets/images/belief-13.jpg') }}" alt="belief">
                        </a>
                    </li>

                </ul>


            </div>
            <!-- belief end-->

        </div>
        <!-- wrap-bg end-->

        <!-- footer -->
    @include('layouts.footer')
    <!-- footer end-->
    </div>
@stop


@section("script")
    <script>
        var height = $(".bBox img").parents("a")[0].clientHeight;
        $(".bBox img").css("height",height);
        $(".ban-text").addClass("b20");
        $(window).scroll(function(e){

            if(document.documentElement.scrollTop > 100){
                $(".brief-left,.brief-right").each(function(idx,item){
                    (function(item){
                        setTimeout(function(){
                            $(item).addClass("bounceInUp animated").show();
                        },100*idx)
                    })(item,idx);
                });
            }
            if(document.documentElement.scrollTop > 700){
                $(".bItems,.bBox").each(function(idx,item){
                    (function(item){
                        setTimeout(function(){
                            $(item).addClass("bounceInUp animated").show();
                        },100*idx)
                    })(item,idx);
                });
            }
        });

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