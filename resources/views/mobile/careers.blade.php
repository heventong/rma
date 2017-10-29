@extends('layouts.mobile_common')

@section("content")
<style>
.header .logo>a{color:white}
.careers .text-title p{text-align:left}
.award-title{text-align:center;background:white;color:black}
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
                                <span>{{$value['sub_title']}}</span>
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
            <div class="text-title bg-common">
                <!--<span class="icon-ds-squiggle"></span>-->
                <p>@lang("careers.ti_desc")</p>
                <p class="pt20 ch">@lang("careers.ti_desc_ch_mobile")</p>
            </div>
            <!-- tetx-title end -->
            <!-- careers -->
            <div class="careers clearfix">
			<div style="min-height:800px">
                <div class="careers-list bg-common" >
                    <div class="careers-lists">
                        <h2>@lang("careers.in_title")</h2>
                        <ul>
                            <li>
                                <h3>@lang("careers.se_title") <span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.de_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.ju_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.ju1_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </div>
                    <div class="careers-lists">
                        <h2>@lang("careers.ff_title")</h2>
                        <ul>
                            <li>
                                <h3>@lang("careers.de1_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the s</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li style="background:white;color:black">
                                <h3 style="background:white;color:black">Junior designer / 實習生助理<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text" style="background:white;color:black"> 
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    
                    
                </div>
			</div>
				<div class="careers-list bg-common">
					<div class="award-title">
                        <h2>@lang("careers.aw_title")</h2>
                    </div>
                    <div class="careers-lists" style="padding:40px 0px 30px 0px">
                        <h2>@lang("careers.in_title")</h2>
                        <ul>
                            <li>
                                <h3>@lang("careers.se_title") <span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.de_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.ju_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                                <h3>@lang("careers.ju1_title")<span class="btn-view">View <i class="icon-add"></i></span></h3>
                                <div class="careers-text">
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>about the role</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <h4>responsiblities</h4>
                                    <p>some images just stick with you,and Aster Hung's illustrations will do this--the fusion of beauty and horror is both compelling and ...Some images just</p>
                                    <a class="btn-app" href="#">Apply for this poistion</a>
                                </div>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </div>
                    
                    
                    
                </div>
                <!--<a class="ban-small" href="#"><img src="{{ cdn_url('assets/images/careersr.jpg') }}" alt="careers banner small"></a>-->
                <div class="careers-person clearfix bg-common">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ cdn_url('assets/images/person-05.jpg',750,700,'!750x700r') }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>enuice wong<br>founder/creative diretor</h4>-->
                                    <p>RMA Republic of the city from the uncompromising, adhere to the dream of people together, we built a purely business environment, advocating self-confidence, sunshine, inclusive, good values, we believe that the Republic is a beautiful and ideal design If you Lofty, determined to work hard to create value, then join it! Here, with more insights, with more like-minded counterparts!</p>
                                    <p class="ch">RMA 共和都市由从不妥协、坚持梦想的人聚合而成,我们构建了纯粹的企业环境，崇尚自信、阳光、包容、善良的价值观,我们相信共和是个美好并可实现的设计理想</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ cdn_url('assets/images/person-06.jpg',750,700,'!750x700r') }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>james wu<br>founder/creative diretor</h4>-->
                                    <p>RMA Republic of the city from the uncompromising, adhere to the dream of people together, we built a purely business environment, advocating self-confidence, sunshine, inclusive, good values, we believe that the Republic is a beautiful and ideal design If you Lofty, determined to work hard to create value, then join it! Here, with more insights, with more like-minded counterparts!</p>
                                    <p class="ch">RMA 共和都市由从不妥协、坚持梦想的人聚合而成,我们构建了纯粹的企业环境，崇尚自信、阳光、包容、善良的价值观,我们相信共和是个美好并可实现的设计理想</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="careers-person-img"><img src="{{ cdn_url('assets/images/person-07.jpg',750,700,'!750x700r') }}" alt="careers person"></div>
                                <div class="careers-person-text">
                                    <!--<h4>bell wei<br>founder/creative diretor</h4>-->
                                    <p>RMA Republic of the city from the uncompromising, adhere to the dream of people together, we built a purely business environment, advocating self-confidence, sunshine, inclusive, good values, we believe that the Republic is a beautiful and ideal design If you Lofty, determined to work hard to create value, then join it! Here, with more insights, with more like-minded counterparts!</p>
                                    <p class="ch">RMA 共和都市由从不妥协、坚持梦想的人聚合而成,我们构建了纯粹的企业环境，崇尚自信、阳光、包容、善良的价值观,我们相信共和是个美好并可实现的设计理想</p>
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
        @include('layouts.mobile_footer')
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
                    filter: ' alpha(opacity=100)'
                });
            } else {
                setTimeout(test, 20);
            }

        }
    </script>
@stop