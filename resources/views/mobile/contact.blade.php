@extends('layouts.mobile_common')

@section("content")
<style>
.header .logo>a{color:white}
</style>
<!-- loading end -->
<div class="wrapper">
  <!-- header --> 
  <div class="header">
      <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
      <span class="btn-menu icon-menu"></span>
  </div>
  <!-- header end-->
  <!-- contact -->
  <div class="contact-bg">
    <div class="contact">
        <h2 class="pb20">CONTACT US &nbsp;&nbsp;&nbsp;&nbsp;聯繫我們</h2>
        <address class="address">@lang('contact.address')</address>
        <address class="address ch pb10">中國廣州天河區天河南二路六運六街33號</address>
        <a target="_blank" href="{{ $address_url }}" class="view-map ">
            <h2>@lang('contact.map')<i class='splitor_white '></i> <span>地圖導航</span></h2>
        </a>
        <ul class="mails clearfix">
            <li>
                <h3>@lang('contact.generalInquiries')<br /><span class="ch">整體郵箱</span></h3>
                <a href="mailto:{{ $email_general }}"><span>{{ $email_general }}</span></a>
                <h3 class="pt20">@lang('contact.newBusiness')<br /><span class="ch">新業務郵箱</span><br /></h3>
                <a href="mailto:{{ $email_biz }}"><span>{{ $email_biz }}</span></a>
                <h3 class="pt20">@lang('contact.careers')<br /><span class="ch">招聘</span></h3>
                <a href="mailto:{{ $email_hr }}"><span>{{ $email_hr }}</span></a>
                <h3 class="pt20">@lang('contact.metrail')<br /><span class="ch">供應商</span></h3>
                <a href="mailto:{{ $email_ms }}"><span>{{ $email_ms }}</span></a>
            </li>
            <li>
                <h3>Phone<br /><span class="ch">聯繫電話</span></h3>
                <a href="tel:02037638510"><span>020-37638510</span></a><br/><a href="tel:02087317366"><span>020-87317366</span></a>
            </li>
        </ul>
      <!--<span class="contact-share">
                <a class="iconfont2 icon-wechat"  href="javascript:;" onclick="wechat()"></a>
                <a class="iconfont2 icon-weibo" href="#"></a>
                <a class="iconfont2 icon-linkedin" href="#"></a>
          </span>-->
    </div>
  </div>  
  <!-- contact end-->
</div>
@stop


@section("script")
<script type="text/javascript">
 $(function () {
  test();
});
function test() {
  var count = $("img").length;
  var num = 0;
    var height = document.body.clientHeight;
    $(".contact-bg").css('height',height);
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