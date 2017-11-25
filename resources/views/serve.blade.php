@extends('layouts.common')

@section("content")

    <!-- loading end -->
    <div class="wrapper">
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
            <div class="back-wo rk">
                <a href="{{ url('worklist') }}">back to work</a></div>-->
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <!-- Swiper 1-->
        <div id="banner" class="swiper-container">
            <?php foreach($Data['banner'] as $value){?>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" style="background-color:#EFEFEF">
                        <div class="ban-text">
                            <span style="background-color:#221816; "><?php echo $value['sub_title'];?></span>
                            <h3 style="color: #221816"><?php echo $value['title'];?></h3>
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
    
        <!-- wrap-bg -->
        <div class="wrap-bg serve-bg " style="background: url(http://images-1253411363.picgz.myqcloud.com/index_bg_navi.jpg?imageMogr2/thumbnail/!1300x700r/interlace/1|imageMogr2/gravity/center/crop/1300x700/quality/70);padding-top: 60px">

        <section class="vision  clearfix">
            <div class="inner bg-black" >
            <br/>
            
                <h3>Our Vision <i class="splitor_white large"></i> 願景</h3>
                <h5>@lang("serve.content")</h5>
                <h4>@lang("serve.content_ch")</h4>
            
            </div>
        </section>

            <div class="serve-item  clearfix">
                <div class="sItem-title ">@lang("serve.ad_title")</div>
                <div class="sItem one">
                    <div class="bg-black" style="padding: 60px 180px;text-align: center;">   
                        <h4>@lang("serve.cr_title")</h4>
                        <p>@lang("serve.cr_desc")</p>
                        <p class="ch">@lang("serve.cr_desc_ch")</p>
                        <!-- <div class="sItem-img">
                            <div class="img-inner"><img src="{{ cdn_url('assets/images/spic_01.jpg') }}" alt=""></div>
                            <div class="img-inner"><img src="{{ cdn_url('assets/images/spic_02.jpg') }}" alt=""></div>
                        </div> -->
                    </div>  
                </div>
                <div class="sItem two">
                    <div class="bg-black" style="padding: 60px 180px;text-align: center;">  
                        <h4>@lang("serve.im_title")</h4>
                        <p>@lang("serve.im_desc")</p>
                        <p class="ch">@lang("serve.im_desc_ch")</p>
                        </div>
                    </div>  
                <div class="sItem three">
                    <div class="bg-black" style="padding: 60px 180px;text-align: center;">  
                        <h4>@lang("serve.di_title")</h4>
                        <p>@lang("serve.di_desc")</p>
                        <p class="ch">@lang("serve.di_desc_ch")</p>
                    </div>
                </div>
                <!-- <div class="sItem four">
                    <img src="{{ cdn_url('assets/images/spic.jpg') }}" alt=" "></div> -->
            </div>
            <!-- serve-item end -->
            <div style="overflow: hidden;">
                <div class="serve-title bg-black">@lang("serve.se_title")</div>
                <div class="serve-list clearfix bg-black">
                    <ul style="width: 80%;overflow: hidden;margin: auto;">
                        <!-- <li>
                            <h3>@lang("serve.ar_title")</h3>
                        </li>
                        <li>
                            <h3>@lang("serve.cl_title")</h3>
                        </li>
                        <li>
                            <h3>@lang("serve.re_title")</h3>
                        </li>
                        <li>
                            <h3>@lang("serve.wo_title")</h3>
                        </li>
                        <li>
                            <h3>@lang("serve.ho_title")</h3>
                        </li> -->
                        <li>
                            <h3>Architecture</h3>
                        </li>
                        <li>
                            <h3>Club/hosplitly</h3>
                        </li>
                        <li>
                            <h3>Restaurant</h3>
                        </li>
                        <li>
                            <h3>Workplace</h3>
                        </li>
                        <li>
                            <h3>House</h3>
                        </li>
                    </ul>
                    <ul style="width: 80%;overflow: hidden;margin: auto;">
                        <li>
                            <h3>建築</h3>
                        </li>
                        <li>
                            <h3>酒吧會所</h3>
                        </li>
                        <li>
                            <h3>餐飲</h3>
                        </li>
                        <li>
                            <h3>辦公場所</h3>
                        </li>
                        <li>
                            <h3>住宅</h3>
                        </li>
                    </ul>
                </div>
                <br/>
                    
                
            </div>
        </div>
        <!-- wrap-bg end-->


        <!-- footer -->
        @include('layouts.footer')
        
        <!-- footer end-->
    </div>
@stop


@section("script")
<script type="text/javascript">

$(function(){
    $('.ban-text').css("bottom","20px");
});
 $(function () {
  test();
});
function test() {
  var count = $("img").length;
  var num = 0;
   $("img").each(function (a, athis) {
    if (athis.complete) { num++;} });
    if (count == num) {
        $("#loading").hide();
        $(".wrapper").css({
                opacity: '1',
                filter: ' alpha(opacity=100)'
            });
            } else {
                setTimeout(test,20);
            }
            
        }    

</script>
@stop