@extends('layouts.common')

@section("content")
    <style type="text/css">
        .ban-text h3 span{background: none}
        .splitor_white{
            font-weight:bold;}
        .small_font{font-size: 7px;}
        .careers-last-lists{
            background-color: white;
            color:black;
            padding: 0 calc(6% + 10px);
        }

        .careers-last-lists h2{
            margin: 0 calc(6% + 10px);
        }
        .careers-lists li .careers-text p{
            padding-bottom:2%;
        }
        .careers .text-title p.ch{
        	font-family: FZShuSong-Z01T;
        }
        .careers .text-title p{
        	font-family: Metrosant; 
        }
        .award-title h2 .ch{
            font-family: FZShuSong-Z01T;
        }
        .bg-white p{line-height: 1.5em}
    </style>
    <!-- loading end -->
    <div class="wrapper careers">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <?php foreach($Data['banner'] as $value){?>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" style="background: url({{ $value['pic'] }}) 50% no-repeat; background-size: cover;">
                        <div class="ban-text">
                            <span><?php echo $value['sub_title']?></span>
                            <h3><?php echo $value['title']?></h3>
                        </div>
                    </a>
                </div>
            </div>
                <?php }?>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper1 end -->
        <div class="scroll-down-arrow animated"></div>
        <!--  scroll-down-arrow end-->
        <!-- wrap-bg -->
        <div class="wrap-bg">
            <div class="text-title bg-white bg-common">
                <!--<span class="icon-ds-squiggle"></span>-->
                <p>@lang("careers.ti_desc")</p>
                <p class="pt20 ch">@lang("careers.ti_desc_ch")</p>
            </div>
            <!-- tetx-title end -->
            <!-- careers -->
            <div class="careers clearfix">
                <div style="overflow: hidden;width:60%;float:left;">
                    <div class="careers-list bg-common pt100" >
                        <div class="careers-lists">
                            <h2>@lang("careers.in_title")</h2>
                            <ul>
                                <?php $careers = DB::connection('sqlite')->select("select * from careers");
                                ?>
                                @if ($careers)
                                @foreach($careers as $key => $value)
                                <li>
                                    <h3><?php echo $value->title?> <span class="btn-view"><i class="icon-add"></i></span></h3>
                                    <div class="careers-text">
                                        <?php echo $value->content?>
                                        <a class="btn-app" href="#">Apply for this poistion</a>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                                <li>
                                </li>
                            </ul>
                        </div>
                        <div class="careers-lists">
                            <h2>@lang("careers.ff_title")</h2>
                            <ul>
                                <?php $careers2 = DB::connection('sqlite')->select("select * from careers2");
                                ?>
                                @foreach($careers2 as $key => $value)
                                <li @if ($key == count($careers2)-1) class="border-tb" style="color:black" @endif >
                                    <h3><?php echo $value->title?><span class="btn-view"><i class="icon-add"></i></span></h3>
                                    <div class="careers-text">
                                        <?php echo $value->content?>
                                        <a class="btn-app" href="#">Apply for this poistion</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
                <a class="ban-small" href="#"><img src="{{ cdn_url('assets/images/careersr.jpg') }}" alt="careers banner small"></a>

                <div style="overflow: hidden;width:60%;float:left;">
                    <div class="award-title">
                        <h2 style="font-family: 'Renogare';font-size: 1.4em;letter-spacing: 4px">@lang("careers.aw_title")</h2>
                    </div>
                    <div class="careers-list bg-common pt100 careers-award-list" >

                        <div class="careers-lists">
                            <h2>@lang("careers.in_title")</h2>
                            <?php $careers_award = DB::connection('sqlite')->select('select * from careers_award');?>
                            <ul>
                                @if ($careers_award)
                                    @foreach($careers_award as $value)
                                <li>
                                    <h3><?php echo $value->title?> <span class="btn-view"><i class="icon-add"></i></span></h3>
                                    <div class="careers-text">
                                        <?php echo $value->content;?>
                                        <a class="btn-app" href="#">Apply for this poistion</a>
                                    </div>
                                </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="careers-person clearfix">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ $Data['person1']['pic'] }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>enuice wong<br>founder/creative diretor</h4>-->
                                    <p><?php echo $Data['person1']['title']?></p>
                                    <p class="ch"><?php echo $Data['person1']['sub_title']?></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ $Data['person2']['pic'] }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>james wu<br>founder/creative diretor</h4>-->
                                    <p><?php echo $Data['person2']['title']?></p>
                                    <p class="ch"><?php echo $Data['person2']['sub_title']?></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ $Data['person3']['pic'] }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>bell wei<br>founder/creative diretor</h4>-->
                                    <p><?php echo $Data['person3']['title']?></p>
                                    <p class="ch"><?php echo $Data['person3']['sub_title']?></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- careers end-->

        </div>
        <!-- wrap-bg end-->
        <!-- footer -->
    @include('layouts.footer')
    <!-- footer end-->

    </div>
@stop


@section("script")
    <script>
        // var swiper = new Swiper('#banner', {
        //     autoplay: 4000,
        //     speed: 1500,
        //     pagination: '.swiper-pagination',
        //     paginationClickable: true,
        //     loop: true,
        //     autoplayDisableOnInteraction: false
        // });
        $(function(){
            $('.ban-text').css("bottom","20px");
        })
    </script>
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
                    filter: 'alpha(opacity=100)'
                });
            } else {
                setTimeout(test, 20);
            }

        }
    </script>
@stop