<!-- footer -->
<div class="footer">
    <div class="footer-inner clearfix">
        <div class="column one">
            <a class="f-logo" href="{{ url('home') }}">
                <img src="{{ asset("assets/images/bottom_logo.png") }}" alt="RMA共和都市 Repubilc Metropolis Architecture"></a>
            <span class="f-share">
                <a class="iconfont2 icon-linkedin" href="#"></a>
                <a class="iconfont2 icon-weibo" href="#"></a>
                </span>
        </div>
        <div class="column two">
            <a href="#"><img src="{{ asset("assets/images/ewm.png") }}" alt=""></a>
        </div>
        <div class="column three">
            <h4><span>WALK</span><i class="splitor"></i><span class="ch">地圖</span></h4>
            <a class="walk" target="_blank" href="{{ $address_url }}">
            <address>No33, Street Six, Liuyun, Tianhe South No.2 Road, Tianhe District, Guangzhou, Guangdong, China</address>
            <address class="ch">中國/廣東省/廣州市/天河區/天河南二路/六運六街/33號</address> 
            <span>View On Map</span> <br /><span class="ch">在地圖上顯示</span>
            </a>
        </div>
        <div class="column four">
            <h4>TALK<i class="splitor"></i><span class="ch">聯繫我們</span></h4>
            <ul class="talk">
                <li>Email:<a href="mailto:{{ $email_general }}"><span>{{ $email_general }}</span></a><i class="splitor"></i><span class="ch">整體郵箱</span></li>
                <li>Email:<a href="mailto:{{ $email_ms }}"><span>{{ $email_ms }}</span></a><i class="splitor"></i><span class="ch">供應商郵箱</span></li>
                <li>Email:<a href="mailto:{{ $email_biz }}"><span>{{ $email_biz }}</span></a><i class="splitor"></i><span class="ch">新業務郵箱</span></li>
                <li>Email:<a href="mailto:{{ $email_hr }}"><span>{{ $email_hr }}</span></a><i class="splitor"></i><span class="ch">招聘郵箱</span></li>
                <li class="pt10">Phone:<br/><span>聯繫電話</span><br/><a href="tel:02037638510"><span>020-37638510</span></a><br/><a href="tel:02087317366"><span>020-87317366</span></a></li>
            </ul>
        </div>
        <!-- <div style="width:300px;margin:20px auto; padding-top:30px; ">
            <a target="_blank" href=" " style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><p style="float:right;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">粤公网安备 44010602002627号</p ><img style="width: 20px!important;height: 20px;display: inline-block;margin-top:-4px" src="{{ asset("assets/images/copyright.png") }}" style="float:left;"/></ a>
        </div> -->
        <div class="back-top">
            <span class="icon-up"></span>
        </div>
    </div>
</div>
<!-- footer end-->