@extends('layouts.mobile_common')

@section("content")
    <style>
        .dib{display: block}
        .header .logo>a{color:white}
    </style>
    <!-- loading end -->
    <div class="wrapper about">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
            <!-- <div class="work-nav">
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
            </div>
            <div class="back-work"><a href="{{ url('worklist') }}">back to work</a></div> -->
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($Data['banner'] as $value){?>
                <div class="swiper-slide">
                    <a href="{{$value['url']}}" style="background: url({{ $value['pic'] }}) 50% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span><?php echo $value['sub_title']?></span>
                            <h3><?php echo $value['title']?></h3>
                            <!--<p>independent thinking,harmonization and dmerence</p>-->
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper1 end -->
        <!--<div class="scroll-down-arrow animated"></div>-->
        <!-- wrap-bg -->
        <div class="wrap-bg serve-bg">
            <div class="text-title bg-common">
                <p style="text-align: left"><?php echo $Data['page_title_en']?></p>
                <p class="ch" style="text-align: left;line-height:26px"><?php echo $Data['page_title_zh']?></p>
            </div>
            <!-- tetx-title end -->
            <!-- about img -->
            <!--<div class="about-img clearfix">
                <a href="#" class="aw2"><img src="{{ cdn_url('assets/images/apic-02.jpg',375,700,'!375x700r') }}" alt="about"></a>
                <a href="#"><img src="{{ cdn_url('assets/images/apic.jpg',375,350,'!375x350r') }}" alt="about"></a>
                <a href="#"><img src="{{ cdn_url('assets/images/apic-03.jpg',375,350,'!375x350r') }}" alt="about"></a>
            </div>-->
            <!-- about img end  -->
            <!-- team-title -->
            <!--<div class="team-title clearfix h5">
                <h4>leadership team</h4>
                <p>Our business is built on relationships - it sounds cliche, but it’s true. We believe that repeat business and growth stem from great work that keep our clients coming back - NOT on sales and spin, but true partnership with measurable results.
                    This is why many of our clients have been with us for over 10 years.</p>
            </div>-->
            <!-- team-title end  -->
            <div class="team-item bg-common clearfix">
                <div class="firstGrid clearfix">
                    <img src="{{ $Data['founder']['pic'] }}">

                </div>
                <div class="tgrid-item-text">
                    <h4><span class="dib vm ">
                            <?php echo $Data['founder']['title'];?>
                        </span>
                        <span class="dib vm ">
                            <?php echo $Data['founder']['title2']?>
                        </span>
                        <span class="dib vm ">
                            <?php echo $Data['founder']['name']?>
                        </span>
                        <span class="dib vm ">
                            <?php echo $Data['founder']['motto']?>
                        </span>
                        <span class="dib vm ">
                            <?php echo $Data['founder']['motto_ch']?>
                        </span>
                    </h4>
                    <p class="p0 pt20"><?php echo $Data['founder']['desc']?></p>
                    <p class="p0 pt20 ch"><?php echo $Data['founder']['desc_ch']?></p>
                </div>
                <div class="tgrid clearfix ">
                    <div class="tgrid-item ">
                        <img src="{{ $Data['bd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['bd']['title']?></span>

                                <span class="dib vm"><?php echo $Data['bd']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['bd']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['bd']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['dd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['dd']['title']?></span>

                                <span class="dib vm"><?php echo $Data['dd']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['dd']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['dd']['desc_ch']?></p>
                        </div>
                    </div>
                    {{--<div class="tgrid-item ">--}}
                    {{--<img src="{{ cdn_url('assets/images/person-04.jpg',750,700,'!750x700r') }}">--}}
                    {{--<div class="tgrid-item-text ">--}}
                    {{--<h4>--}}
                    {{--<span class='dib vm'>@lang("about.pm_title")</span>--}}

                    {{--<span class="dib vm">@lang("about.pm_name")</span>--}}
                    {{--</h4>--}}
                    {{--<br/>--}}
                    {{--<p>@lang("about.pm_desc")</p>--}}
                    {{--<br/>--}}
                    {{--<p class="ch">@lang("about.pm_desc_ch")</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="tgrid-item ">
                        <img src="{{ $Data['sd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['sd']['title']?></span>

                                <span class="dib vm"><?php echo $Data['sd']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['sd']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['sd']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['pm']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['pm']['title']?></span>

                                <span class="dib vm"><?php echo $Data['pm']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['pm']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['pm']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['td']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['td']['title']?></span>

                                <span class="dib vm"><?php echo $Data['td']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['td']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['td']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['dd2']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['dd2']['title']?></span>

                                <span class="dib vm"><?php echo $Data['dd2']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['dd2']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['dd2']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['ff']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['ff']['title']?></span>

                                <span class="dib vm"><?php echo $Data['ff']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['ff']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['ff']['desc_ch']?></p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['a']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'><?php echo $Data['a']['title']?></span>

                                <span class="dib vm"><?php echo $Data['a']['name']?></span>
                            </h4>
                            <br/>
                            <p>“<?php echo $Data['a']['desc']?>”</p>
                            <br/>
                            <p class="ch"><?php echo $Data['a']['desc_ch']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team-item bg-common end -->
            <!-- title end -->

            <div class="team-item bg-common clearfix">
                <div class="firstGrid clearfix">
                    <img src="{{ cdn_url('assets/images/about-p0.jpg',750,700,'!750x700r') }}">
                </div>
            </div>
            <div class="serve-title serve-title2 bg-common">@lang("about.teamHonour")</div>
            <!-- title end -->
            <div class="detail-randoms clearfix ">
                <div class="random " onclick="location.href='{{ url('news') }}'" >
                    <div class="randoms-img sOn "><img src="{{ cdn_url('assets/images/dpic-03.jpg',750,700,'!750x700r') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-04.jpg',750,700,'!750x700r') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-05.jpg',750,700,'!750x700r') }}" alt=" "></div>
                </div>
                <div class="random " onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn "><img src="{{ cdn_url('assets/images/dpic-04.jpg',750,700,'!750x700r') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-05.jpg',750,700,'!750x700r') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-03.jpg',750,700,'!750x700r') }}" alt=" "></div>
                </div>
                <div class="random " onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn "><img src="{{ cdn_url('assets/images/dpic-05.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-03.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-04.jpg') }}" alt=" "></div>
                </div>
            </div>
            <!-- work-detail-randoms end -->


        </div>
        <!-- wrap-bg end-->


        <!-- grid-container end -->
        <!-- footer -->
        @include('layouts.mobile_footer')
                <!-- footer end-->
    </div>

@stop


@section("script")
    <script>

        $(function(){
            $('.ban-text').css("bottom","20px");
        })
        /*work detail */
        var swiper3 = new Swiper('#related-links', {
            paginationClickable: true,
            slidesPerView: 3,
            spaceBetween: 0,
            breakpoints: {
                770: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    </script>
    <script type="text/javascript ">
        //   document.onreadystatechange = loading;
        // function loading(){
        //         if(document.readyState == "complete ")
        //         {
        //             $("#loading ").hide().remove();
        //             $("#content ").css({
        //                 opacity: '1',
        //                 filter: ' alpha(opacity=100)'
        //             });

        //         }
        //         }

        // $(function() {
        //     test();
        // });

        // function test() {
        //     var count = $("img ").length;
        //     var num = 0;
        //     $("img ").each(function(a, athis) {
        //         if (athis.complete) {
        //             num++;
        //         }
        //     });
        //     if (count == num) {
        //         $("#loading ").hide();
        //         $(".wrapper ").css({
        //             opacity: '1',
        //             filter: ' alpha(opacity=100)'
        //         });
        //     } else {
        //         setTimeout(test, 20);
        //     }
        // }
        $("#loading ").hide();
        $(".wrapper ").css({
            opacity: '1',
            filter: ' alpha(opacity=100)'
        });
    </script>
    <!-- about item-gird  -->
    <script>
        // (function() {
        //     setTimeout(function() {
        //         minigrid('.tgrid', '.tgrid-item', 0, null,
        //             function() {
        //                 var d = document.querySelector('.tgrid-item');
        //                 d.style.opacity = 1;
        //             }
        //         );
        //     }, 100);

        //     window.addEventListener('resize', function() {
        //         minigrid('.tgrid', '.tgrid-item');
        //     });
        // })();
    </script>
@stop