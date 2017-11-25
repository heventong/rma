
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/login/reset.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/css/login/supersized.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/css/login/style.css")}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body oncontextmenu="return false">

<div class="page-container">
    <h1>Login</h1>
    <form id="login" action="" method="post">
        <div>
            <input type="text" name="user" class="username" placeholder="Username" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="Password" oncontextmenu="return false" onpaste="return false" />
        </div>
        <button id="submit" type="button">Sign in</button>
    </form>
    <div class="connect">

    </div>
</div>
<div class="alert" style="display:none">
    <h2>消息</h2>
    <div class="alert_con">
        <p id="ts"></p>
        <p style="line-height:70px"><a class="btn">确定</a></p>
    </div>
</div>

<!-- Javascript -->
{{--<script src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>--}}
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/login/supersized.3.2.7.min.js")}}"></script>
<script src="{{ asset("assets/js/login/supersized-init.js")}}"></script>
<script>
    $(".btn").click(function(){
        is_hide();
    })
    var u = $("input[name=username]");
    var p = $("input[name=password]");
    $("#submit").on('click',function(){
        var data = $("#login").serializeArray();
        if(u.val() == '' || p.val() =='')
        {
            $("#ts").html("用户名或密码不能为空~");
            is_show();
            return false;
        }
        else{
            $.ajax({
                url:"{{ url('loginCheck') }}",
                data:data,
                type:'post',
                success:function(res){
                    var res =   JSON.parse(res)
                    if(res.state){
                        $("#ts").html("登录成功，3秒后自动跳转！");
                        is_show();
                        setTimeout(function(){
                            window.location.href = "/admin";
//                            location.reload();
                        },3000)
                    }else{
                        $("#ts").html("用户名或密码有误");
                        is_show();
                    }
                }
            })
        }
    });
    window.onload = function()
    {
        $(".connect p").eq(0).animate({"left":"0%"}, 600);
        $(".connect p").eq(1).animate({"left":"0%"}, 400);
    }
    function is_hide(){ $(".alert").animate({"top":"-40%"}, 300) }
    function is_show(){ $(".alert").show().animate({"top":"45%"}, 300) }
</script>
</body>

</html>

