<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-tap-highlight" content="no">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="author" content="RMA" />
    <title>RMA 共和都市設計</title>
    <meta name="Keywords" content="共和都市設計,銳意設計,黃永才設計師,酒吧會所設計,辦公設計,酒店設計,song吧,宋吧,D-force">
    <meta name="description" content="共和都市設計,銳意設計,黃永才設計師,酒吧會所設計,辦公設計,酒店設計,song吧,宋吧,D-force" />
    
	
	<html>
	<!--H-ui 引入-->
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="Bookmark" href="favicon.ico" >
	<link rel="Shortcut Icon" href="favicon.ico" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="lib/html5.js"></script>
	<script type="text/javascript" src="lib/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/H-ui.min.css")}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/H-ui.admin.css")}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/1.0.8/iconfont.css")}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/skin.css")}}" id="skin" />
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/style.css")}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/js/webuploader/0.1.5/webuploader.css")}}" />
	<!--[if IE 6]>
	<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<!--/meta 作为公共模版分离出去-->
<?php /*========================================================临时改成本地脚本，没读cdn=============================================================*/ ?>
    <!-- code -->
    <!--<script src="{{ source_url("assets/js/jquery.min.js") }}"></script>--><script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <!--<script src="{{ source_url("assets/js/jqnav_mobile.js") }}"></script>--><script src="{{ asset("assets/js/jqnav_mobile.js") }}"></script>
    <!--<script src="{{ source_url("assets/js/swiper.min.js") }}"></script>--><script src="{{ asset("assets/js/swiper.min.js") }}"></script>
    <!-- [if lt IE 9]><script src=”http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js”></script><![endif]-->
    <!--<script src="{{ source_url("assets/js/minigrid.js") }}"></script>--><script src="{{ asset("assets/js/minigrid.js") }}"></script>
    <script src="{{ asset("assets/layer/layer.js") }}"></script>
	
	<script type="text/javascript" src="{{ asset("assets/js/hui/H-ui.js") }}"></script> 
	<script type="text/javascript" src="{{ asset("assets/js/hui/H-ui.admin.page.js") }}"></script>
	<script type="text/javascript" src="{{ asset("assets/js/webuploader/0.1.5/webuploader.min.js") }}"></script>

    <script>
        (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if(clientWidth>=750){
                        docEl.style.fontSize = '100px';
                    }else{
                        docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
                    }
                };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
    @yield('style')
</head>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="{{url('admin')}}">Rma.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs"></span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			{{--<nav class="nav navbar-nav">--}}
				{{--<ul class="cl">--}}
					{{--<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>--}}
						{{--<ul class="dropDown-menu menu radius box-shadow">--}}
							{{--<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>--}}
							{{--<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>--}}
							{{--<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>--}}
							{{--<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
		{{--</ul>--}}
	{{--</nav>--}}
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							{{--<li><a href="#">切换账户</a></li>--}}
							<li><span style="cursor:pointer" id="logout">退出</span></li>
				</ul>
			</li>

				</ul>
			</li>
		</ul>
	</nav>
</div>
</div>
</header>
<!--/_header 作为公共模版分离出去-->


<body>
	<style>
		.formControls input{width: 100%}
	</style>
    <!-- loading -->
    <div id="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
<aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> PC端管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>

					<li><a href="{{url('/manage?manage=pc&edit=home')}}" title="PC端管理">主页</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=index')}}" title="PC端管理">入口页面</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=about')}}" title="PC端管理">我们</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=workList')}}" title="PC端管理">作品</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=belief')}}" title="PC端管理">信念</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=serve')}}" title="PC端管理">专业</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=careers')}}" title="PC端管理">同路</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=contact')}}" title="PC端管理">联系</a></li>

					<li><a href="{{url('/manage?manage=pc&edit=award')}}" title="PC端管理">荣耀</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=news')}}" title="PC端管理">news</a></li>

					<li><a href="{{url('/manage?manage=pc&edit=xclub')}}" title="PC端管理">xclub管理</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=dforce')}}" title="PC端管理">dforce管理</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=songclub')}}" title="PC端管理">songclub管理</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=cave')}}" title="PC端管理">cave详情</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=gangyi')}}" title="PC端管理">gangyi管理</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=songrestaurant')}}" title="PC端管理">songrestaurant管理</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=dakang')}}" title="PC端管理">dkang详情</a></li>
					<li><a href="{{url('/manage?manage=pc&edit=aotubar')}}" title="PC端管理">aotubar详情</a></li>
{{--					<li><a href="{{url('/manage?manage=pc&edit=workDetail_songclub')}}" title="PC端管理">songclub</a></li>--}}
					<?php $newpage = include(base_path('routes')).'/route.php';foreach($newpage as $key => $value){?>
						<li><a href="{{url('/manage?manage=pc&edit='.$key)}}" title="<?php echo $value?>"><?php echo $value?></a></li>
					<?php }?>

		</ul>
	</dd>
</dl>
		<div class="menu_dropdown bk_2">
			<dl id="menu-article">
				<dt><i class="Hui-iconfont">&#xe616;</i> 移动端管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
				<dd>
					<ul>
						<li><a href="{{url('/manage?manage=mobile&edit=home')}}" title="移动端管理">主页</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=index')}}" title="移动端管理">入口页面</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=about')}}" title="移动端管理">我们</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=workList')}}" title="移动端管理">作品</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=belief')}}" title="移动端管理">信念</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=serve')}}" title="移动端管理">专业</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=careers')}}" title="移动端管理">同路</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=contact')}}" title="移动端管理">联系</a></li>

						<li><a href="{{url('/manage?manage=mobile&edit=award')}}" title="移动端管理">荣耀</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=news')}}" title="移动端管理">news</a></li>

						<li><a href="{{url('/manage?manage=mobile&edit=xclub')}}" title="移动端管理">xclub管理</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=dforce')}}" title="移动端管理">dforce管理</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=songclub')}}" title="移动端管理">songclub管理</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=cave')}}" title="移动端管理">cave详情</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=gangyi')}}" title="移动端管理">gangyi管理</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=songrestaurant')}}" title="移动端管理">songrestaurant管理</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=dakang')}}" title="移动端管理">dkang详情</a></li>
						<li><a href="{{url('/manage?manage=mobile&edit=aotubar')}}" title="移动端管理">aotubar详情</a></li>
						<?php $newpage = include(base_path('routes')).'/route.php';foreach($newpage as $key => $value){?>
							<li><a href="{{url('/manage?manage=mobile&edit='.$key)}}" title="<?php echo $value?>"><?php echo $value?></a></li>
						<?php }?>
		</ul>
	</dd>
</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 新增页面<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="{{url('add')}}" title="模块添加">模块添加</a></li>
					<li><a href="{{url('showPage')}}" title="模块添加">富文本列表</a></li>
		</ul>
	</dd>
</dl>
		{{----}}
		{{--<dl id="menu-admin">--}}
			{{--<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>--}}
			{{--<dd>--}}
				{{--<ul>--}}
					{{--<li><a href="admin-role.html" title="角色管理">角色管理</a></li>--}}
					{{--<li><a href="admin-permission.html" title="权限管理">权限管理</a></li>--}}
					{{--<li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>--}}
		{{--</ul>--}}
	{{--</dd>--}}
{{--</dl>--}}
		{{--<dl id="menu-tongji">--}}
			{{--<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>--}}
			{{--<dd>--}}
				{{--<ul>--}}
					{{--<li><a href="charts-1.html" title="折线图">折线图</a></li>--}}
					{{--<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>--}}
					{{--<li><a href="charts-3.html" title="区域图">区域图</a></li>--}}
					{{--<li><a href="charts-4.html" title="柱状图">柱状图</a></li>--}}
					{{--<li><a href="charts-5.html" title="饼状图">饼状图</a></li>--}}
					{{--<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>--}}
					{{--<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>--}}
		{{--</ul>--}}
	{{--</dd>--}}
{{--</dl>--}}
		{{--<dl id="menu-system">--}}
			{{--<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>--}}
			{{--<dd>--}}
				{{--<ul>--}}
					{{--<li><a href="system-base.html" title="系统设置">系统设置</a></li>--}}
					{{--<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>--}}
					{{--<li><a href="system-data.html" title="数据字典">数据字典</a></li>--}}
					{{--<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>--}}
					{{--<li><a href="system-log.html" title="系统日志">系统日志</a></li>--}}
		{{--</ul>--}}
	{{--</dd>--}}
{{--</dl>--}}
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
  

    @yield('content')
    


	
    <script>
        function wechat(){
            layer.open({
                type: 1,
                shade: true,
                title: false, //不显示标题
                content: '<div class="qrcode"><img src="{{ asset("assets/images/ewm.png") }}" alt=""></div>', //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
                cancel: function(){
                    
                }
            });
        }
    </script>
    @yield('script')


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
    $("#logout").on("click",function(){
        var r=confirm("确定要退出？");
        if (r==true){
            $.ajax({
                url:'logout',
                success:function(){
                    location.reload();
                }
            })
        }
        else{
        }
	});
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e9e894f2f07aae34389a9351060f44f6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>

</html>