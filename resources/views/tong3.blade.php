@extends('layouts.common')

@section("content")
    <style>
        .about .team-item .tgrid-item-text{padding:50px;}
        .about .text-title p{color:white!important;}
        .team-title h4, .team-item .tgrid .tgrid-item .tgrid-item-text h4{line-height: 40px;font-size:1.1em}
        .about .team-item .tgrid-item-text p.ch{font-size: 1.1em;}
        .about .team-item .tgrid-item-text p{font-size: 1.1em;}
    </style>
    <!-- loading end -->
    <div class="wrapper about">
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
                <?php foreach($Data['banner'] as $key => $value){ ?>
                <div class="swiper-slide">
                    <?php if(!empty($Data['video'])){echo '<video id="video" repeat src="{{ source_url("assets/images/preview.mp4") }}" width="100%" height="100%"><source src="{{ source_url("assets/images/preview.mp4") }}" type="video/mp4"></video>';}?>
                    <a href="{{ $value['url'] }}" style="background: url({{ $value['pic'] }}) 100% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span> <?php echo $value['sub_title']?></span>
                            <h3><?php echo $value['title']?></h3>
                            {{--<h3>@lang("home.banner.$key.desc")</h3>--}}
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
        <!-- wrap-bg -->
        <div class="wrap-bg serve-bg">
            <div class="text-title bg-black">
                <p>RMA Republic Design by Ray Wong Huang Yongcai was founded in 2013, based on the architecture, space, interior, product design industry, determined to use the philosophy of thinking system, the international design language, gathered alone thinking, together to create the ultimate design work and Experience, we are the traditional design industry silence of the jailbreak, is the new sensual ocean pirate ship</p>
                <p class="ch">RMA共和都市設計由Ray Wong黄永才于2013年創立，立足建築、空間室內、產品設計行業，立志用哲學的思考體系、國際化的設計語言，聚集孤獨者的思考，共同創造極致的設計作品和體驗，我們是傳統設計行業沉默的越獄者，是新感官海洋的海盜船</p>
            </div>
            <div class="team-item clearfix">
                <div class="firstGrid clearfix">
                    <img src="{{ $Data['founder']['pic'] }}">
                    <div class="tgrid-item-text ">


                        <h4><span class="dib vm ">
                            @lang("about.founder.title")
                        </span>
                            <i class="splitor_white large"></i>
                            <span class="dib vm ">
                            @lang("about.founder.title2")
                        </span>
                            <br/>
                            <br/>
                        </h4>
                        <h4>@lang("about.founder.name")</h4>
                        <p class="p0 pt20">
                            "@lang("about.founder.motto")"</p>
                        <br/>
                        <p class="p0 pt20">@lang("about.founder.motto_ch")</p>
                        <br/>
                        <p class="p0 pt20">@lang("about.founder.desc")</p>
                        <br/>
                        <p class="p0 pt20 ch">@lang("about.founder.desc_ch")</p>
                        <br/>
                    </div>
                </div>
                <div class="tgrid clearfix ">
                    <div class="tgrid-item ">
                        <img src="{{ $Data['sd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.sd.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.sd.name")</span>
                            </h4>
                            <p>@lang("about.sd.desc")</p>
                            <p class="ch">@lang("about.sd.desc_ch")</p>
                        </div>
                    </div>

                    <div class="tgrid-item ">
                        <img src="{{ $Data['bd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.bd.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.bd.name")</span>
                            </h4>
                            <p>@lang("about.bd.desc")</p>
                            <p class="ch">@lang("about.bd.desc_ch")</p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['dd']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.dd.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.dd.name")</span>
                            </h4>
                            <p>@lang("about.dd.desc")</p>
                            <p class="ch">@lang("about.dd.desc_ch")</p>
                        </div>
                    </div>

                    <div class="tgrid-item ">
                        <img src="{{ $Data['td']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.td.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.td.name")</span>
                            </h4>
                            <p>@lang("about.td.desc")</p>
                            <p class="ch">@lang("about.td.desc_ch")</p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['pm']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.pm.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.pm.name")</span>
                            </h4>
                            <p>@lang("about.pm.desc")</p>
                            <p class="ch">@lang("about.pm.desc_ch")</p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['ff']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.ff.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.ff.name")</span>
                            </h4>
                            <p>@lang("about.ff.desc")</p>
                            <p class="ch">@lang("about.ff.desc_ch")</p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['a']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.a.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.a.name")</span>
                            </h4>
                            <p>@lang("about.a.desc")</p>
                            <p class="ch">@lang("about.a.desc_ch")</p>
                        </div>
                    </div>
                    <div class="tgrid-item ">
                        <img src="{{ $Data['dd2']['pic'] }}">
                        <div class="tgrid-item-text ">
                            <h4>
                                <span class='dib vm'>@lang("about.dd2.title")</span>
                                <br/>
                                <span class="dib vm">@lang("about.dd2.name")</span>
                            </h4>
                            <p>@lang("about.dd2.desc")</p>
                            <p class="ch">@lang("about.dd2.desc_ch")</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container " id="combar ">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide ">
                            <a href="#" style="background: url({{ cdn_url('assets/images/about-bottom-pic.jpg') }}) 50% no-repeat; background-size: cover; "></a>
                            <img src="{{ asset('assets/images/about-bottom-pic.jpg') }}" alt=" "></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination combar-pagination "></div>
                    <!-- Add Arrows -->
                    <!--<div class="combar-next icon-right "></div>-->
                    <!--<div class="combar-prev icon-left "></div>-->
                </div>
            </div>
            <div class="serve-title serve-title2 bg-common">@lang("about.teamHonour")</div>
            <!-- title end -->
            <style type="text/css">
                .tmp-news{
                    width: 33.3%;
                    float: left;
                }
            </style>
            <div class="detail-randoms clearfix " style="min-height: 600px;" >
                <div style="overflow: hidden;min-height: 600px;" class="randoms-img sOn ">
                    <img class="tmp-news" onclick="location.href='{{ url('news') }}'" src="{{ cdn_url('assets/images/dpic-03.jpg') }}" alt=" ">
                    <img class="tmp-news" onclick="location.href='{{ url('news') }}'" src="{{ cdn_url('assets/images/dpic-04.jpg') }}" alt=" ">
                    <img class="tmp-news" onclick="location.href='{{ url('news') }}'" src="{{ cdn_url('assets/images/dpic-05.jpg') }}" alt=" ">
                </div>
                <div class="random " onclick="location.href='{{ url('news') }}'" >
                    <div class="randoms-img sOn "><img src="{{ cdn_url('assets/images/dpic-03.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-04.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-05.jpg') }}" alt=" "></div>
                </div>
                <div class="random " onclick="location.href='{{ url('news') }}'">
                    <div class="randoms-img sOn "><img src="{{ cdn_url('assets/images/dpic-04.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-05.jpg') }}" alt=" "></div>
                    <div class="randoms-img "><img src="{{ cdn_url('assets/images/dpic-03.jpg') }}" alt=" "></div>
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
    @include('layouts.footer')
    <!-- footer end-->
    </div>

@stop


@section("script")
    <script>
        /*var swiper = new Swiper('#banner', {
         autoplay: 4000,
         speed: 1500,
         pagination: '.swiper-pagination',
         paginationClickable: true,
         loop: true,
         autoplayDisableOnInteraction: false
         });*/
        /* */

        $(function(){
            $('.ban-text').css("bottom","20px");
        })
        var swiper2 = new Swiper('#combar', {
            autoplay: 4000,
            speed: 500,
            pagination: '.combar-pagination',
            nextButton: '.combar-next',
            prevButton: '.combar-prev',
            paginationClickable: true,
            autoplayDisableOnInteraction: false
        });

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
        document.onreadystatechange = loading;
        function loading(){
            if(document.readyState == "complete ")
            {
                $("#loading ").hide().remove();
                $("#content ").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });

            }
        }

        $(function() {
            test();
        });

        function test() {
            var count = $("img ").length;
            var num = 0;
            $("img ").each(function(a, athis) {
                if (athis.complete) {
                    num++;
                }
            });
            if (count == num) {
                $("#loading ").hide();
                $(".wrapper ").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });
                showminigrid()
            } else {
                setTimeout(test, 20);
            }
        }
        $("#loading ").hide();
        $(".wrapper ").css({
            opacity: '1',
            filter: ' alpha(opacity=100)'
        });
        function showminigrid(){
            minigrid('.tgrid', '.tgrid-item', 0, null,
                function() {
                    var d = document.querySelector('.tgrid-item');
                    d.style.opacity = 1;
                }
            );
        }
    </script>
    <!-- about item-gird  -->
    <script>
        (function() {
            setTimeout(function() {
                minigrid('.tgrid', '.tgrid-item', 0, null,
                    function() {
                        var d = document.querySelector('.tgrid-item');
                        d.style.opacity = 1;
                    }
                );
            }, 1000);

            window.addEventListener('resize', function() {
                minigrid('.tgrid', '.tgrid-item');
            });
        })();
    </script>
@stop