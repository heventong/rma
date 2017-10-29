@extends('layouts.admin_common')

@section("content")
    <style>
        .layui-layer{background:white}
        .Hui-article-box{overflow:auto}
        .form>div {border:1px solid #ccc;padding:20px}
        .form>div>.title{position:relative;display:block;top:-35px;background:white;width:120px;text-align:center}
        .uploader-list{overflow: hidden;width:100%;height:180px}
        .uploader-list .upload-state-success{float:left}
        .uploader-list img{width:100px;height:100px}
        .info img{width: 100px;max-height: 100px}
        .info .pic-box{width: 30%;float: left}
    </style>

    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页

            <span class="c-gray en">&gt;</span>
            网页管理
            <span class="c-gray en">&gt;</span>
            新增页面
            <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>

        </nav>
        <form action="{{url('update')}}" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" >

            <div class="row cl">
                <span class='title'>模板</span>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">选择使用的模板：</label>
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                        <select id="model_change" name="model">
                            <option value="index">index</option>
                            <option value="about">about</option>
                            <option value="belief">belief</option>
                            <option value="contact">contact</option>
                            <option value="home">home</option>
                            <option value="news">news</option>
                            <option value="award">award</option>
                            <option value="serve">serve</option>
                            <option value="belief">belief</option>
                            <option value="careers">careers</option>
                            <option value="xclub">detail</option>
                        </select>
                    </div>

                    <label class="form-label col-xs-4 col-sm-2">页面标识：</label>
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

                        <input name="new_page_name" value="">
                    </div>
                </div>
            </div>




            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i>提交</button>
                    <button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                    {{--<a target="_blank"  href="{{url('about')}}">打开当前编辑的页面</a>--}}
                </div>
            </div>

        </form>

    </section>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript">
        function article_save(){
            var data = $("form").serialize();
            layer.confirm('确认要更新页面吗？',function(index){

                $.ajax({
                    type: 'POST',
                    url: '{{url('addupdate')}}',
                    dataType: 'json',
                    data:data,
                    success: function(data){
//                    $(obj).parents("tr").remove();
                        layer.msg('提交完成');
                        layer.close(index);
//                    layer.msg('已删除!',{icon:1,time:1000});
                    },
                    error:function(data) {
                        layer.close(index);
                    }
                });
            });

        }


        $(function () {

            var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档
            var thumbnailHeight = 100;
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });


            //var ue = UE.getEditor('editor');
        })
    </script>
    <!--/请在上方写此页面业务相关的脚本-->

    <!--此乃百度统计代码，请自行删除-->
    <script>



        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!--/此乃百度统计代码，请自行删除-->
    </body>
    </html>

@stop


@section("script")
    <script>

        $("#loading").hide();
        $(".wrapper").css({
            opacity: '1',
            filter: ' alpha(opacity=100)'
        });
    </script>
@stop