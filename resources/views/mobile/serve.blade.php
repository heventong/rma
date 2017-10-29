@extends('layouts.mobile_common')

@section("content")
<style type="text/css">

.vision .inner h3{margin:auto 0px;}
.header{background:#fff}
.ban-text h3{
    color:#231816;
}
.ban-text span{
    color: white;
    background: #231816;
}
.icon-menu {color:#332c2a;}
.vision .inner h4{margin-bottom: 0px}
.serve-item .sItem h4{background-color:black!important}
.serve-item .sItem p{background-color:black!important}
.bg-common{background: url(http://images-1253411363.picgz.myqcloud.com/index_bg_navi.jpg?imageMogr2/thumbnail/!1300x700r/interlace/1|imageMogr2/gravity/center/crop/1300x700/quality/70);padding-top: 60px"}

</style>
    <!-- loading end -->
    <div class="wrapper">
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
            <div class="swiper-wrapper" style="background:url({{$value['pic']}}) center center no-repeat; background-size: cover ">
                <div class="swiper-slide">
                    <a href="{{$value['url']}}" >
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
        <!-- vision -->

        
        
        <!-- vision end-->
        <!-- wrap-bg -->
        <div class="wrap-bg serve-bg bg-common">
            <div class="serve-item  clearfix">
			<section class="vision  clearfix">
			
				<div class="inner bg-common">
					<div style="margin:0px 10%;background:black;padding:20px 0;">
						<h3>Our Vision <br/> 願景</h3>
						<h5><?php echo $Data['content']?></h5>
						<h4><?php echo $Data['content_ch']?></h4>
					</div>
				</div>
			</section>
			
                <div class="sItem-title "><?php echo $Data['ad_title']?></div>
				
				<div class="sItem two">

                    <h4><?php echo $Data['cr_title']?></h4>
                    <p><?php echo $Data['cr_desc']?></p>
                    <p class="ch"><?php echo $Data['cr_desc_ch']?></p>
				</div>
				
                <div class="sItem two">

                    <h4><?php echo $Data['im_title']?></h4>
                    <p><?php echo $Data['im_desc']?></p>
                    <p class="ch"><?php echo $Data['im_desc_ch']?></p>
                    </div>
                <div class="sItem three">

                    <h4><?php echo $Data['di_title']?></h4>
                    <p><?php echo $Data['di_desc']?></p>
                    <p class="ch"><?php echo $Data['di_desc_ch']?></p>
                </div>
                <!--<div class="sItem four h7"><img src="{{ cdn_url('assets/images/spic.jpg') }}" alt=" "></div>-->
            </div>
            <!-- serve-item end -->
            <div class="p20">
                <div class="p20" style="background:black">
                    <div class="serve-title"><?php echo $Data['se_title']?></div>
                        <div class="serve-list  clearfix ">
                            <ul>
                                <li>
                                    <h3><?php echo $Data['ar_title']?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $Data['cl_title']?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $Data['re_title']?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $Data['wo_title']?></h3>
                                </li>
                                <li>
                                    <h3><?php echo $Data['ho_title']?></h3>
                                </li>
                                <li>
                                    <h3>&nbsp;</h3>
                                </li>
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
                    </div>
                </div>
            </div>
        <!-- wrap-bg end-->


        <!-- footer -->
        @include('layouts.mobile_footer')
        
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