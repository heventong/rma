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
		PC管理
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>

	</nav>
	<form action="{{url('update')}}" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" >

		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<input type="hidden" name="page_name" value="workdetailsongclub" />
        <div class="row cl">
            <span class='title'>banner轮播图</span>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                <div  style="overflow: hidden">
                    <div class="btn btn-secondary" onclick='upload(this,"banner")'>修改</div>
                    <br/>
                    <div class="info">
                        <?php foreach($Data['banner'] as $key=>$value){ ?>
                        <div class="pic-box"><img  src="{{asset($value['pic'])}}">
                            <p class="state">原图</p>
                            <p>title:</p>
                            <input type="hidden" name="banner[{{$key}}][pic]" value="{{$value['pic']}}">
                            <p><input type="text" name="banner[{{$key}}][title]" value="{{$value['title']}}"/></p>
                            <p>sub_title:<input type="text" name="banner[{{$key}}][sub_title]" value="{{$value['sub_title']}}"/></p>
                            <span>链接</span>
                            <select name="banner[{{$key}}][url]">
                                <?php foreach($url as $v){ ?>
                                <option {{$value['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div>
                <label class="form-label col-xs-4 col-sm-2">页面说明：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea style="width:800px;height:100px" type="text" name="page_title" class="input-text" >{{$Data['page_title']}}</textarea>

                </div>
            </div>
        </div>

        <div class="row cl">
            <span class='title'>展示</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"workdetail1",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['workdetail1'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="workdetail1" value="{{$Data['workdetail1']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>展示2</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"workdetail2",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['workdetail2'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="workdetail2" value="{{$Data['workdetail2']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>展示3</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"workdetail3",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['workdetail3'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="workdetail3" value="{{$Data['workdetail3']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>展示4</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"workdetail4",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['workdetail4'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="workdetail4" value="{{$Data['workdetail4']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>展示5</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"workdetail5",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['workdetail5'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="workdetail5" value="{{$Data['workdetail5']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>荣誉1</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"honor1",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['honor1'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="honor1" value="{{$Data['honor1']}}">
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>荣誉2</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"honor2",1,1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['honor2'])}}">
                        <p class="state">原图</p>
                        <input type="hidden" name="honor2" value="{{$Data['honor2']}}">
                    </div>
                </div>
            </div>

        </div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				{{--<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>--}}
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i>提交修改页面</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                <a target="_blank"  href="{{url('workDetail?project=songclub')}}">打开当前编辑的页面</a>
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
                url: '{{url('update')}}',
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
    function upload(view,type,count=0,links=0){
        layer.open({
            title:'修改图片',
            type: 2,
            area: ['700px', '530px'],
            fix: false, //不固定
            maxmin: true,
            content: 'uploadview?pic_type='+type,
            btn: ['确定', '关闭'] ,
            yes: function(index,layero){
                //console.log($(layero).find("iframe")[0].contentWindow)
                var upload_value = $(layero.find("iframe")[0].contentWindow.document.getElementById("upload")).serializeArray();
                upload_value = count==0?upload_value:upload_value[0];
                clean_upload(view);
                var contact = set_upload(upload_value,type,count,links);
                $(view).parent("div").find('.info').append(contact);
                layer.close(index);
            },btn2: function(){
                top.view = $(this);
            },
            end:function(){
            }
        });
    }
    function clean_upload(view){
        $(view).parent("div").find(".info").children('div').remove();
    }

    function set_upload(upload_value,type,count=0,link_type=0) {
        var tmp = '';
        var result = '';
        var lang = $("input[name=page_name]").val();
        $.ajax({
            url:'{{url('getlang')}}',
            data:{'lang_name':lang+'.php'},
            async: false,
            success:function (data) {
                tmp=JSON.parse(data);
            }
        });
        var arrs_length = count==1?1:tmp['data'][type].length;
        if(count == 1){
            var contact = "<div class='pic-box upload_pic'><input name='"+upload_value.name+"' type='hidden' value='"+upload_value.value+"'>" +
                "<img style='width: 100px;max-height: 100px' name='"+upload_value.name+"' src='"+upload_value.value+"' value='"+upload_value.value+"'/>";
            result+=contact;
            return result;
        }
        for(var i in upload_value){
            var contact = "<div class='pic-box upload_pic'><input name='"+upload_value[i].name+"["+i+"][pic]' type='hidden' value='"+upload_value[i].value+"'>" +
                "<img style='width: 100px;max-height: 100px' name='"+upload_value[i].name+"' src='"+upload_value[i].value+"' value='"+upload_value[i].value+"'/>"+
                "<p>title:<input type='text' name='"+upload_value[i].name+"["+i+"][title]' value='"+(arrs_length > i?tmp['data'][type][i]['title']:tmp['data'][type][0]['title'])+"'></p>"+
                "<p>sub_title:<input type='text' name='"+upload_value[i].name+"["+i+"][sub_title]' value='"+(arrs_length > i?tmp['data'][type][i]['sub_title']:tmp['data'][type][0]['sub_title'])+"'></p>";
            var links = "<p>点击链接：<select name='"+upload_value[i].name+"["+i+"][url]'>";
            for(var j in tmp['data']['links']){
                links += "<option "+((arrs_length > i?tmp['data'][type][i]['url']:'')==tmp['data']['links'][j]['url']?'selected':'')+" value="+tmp['data']['links'][j]['url']+">"+tmp['data']['links'][j]['title']+"</option>";
            }
            contact+=links+"</select></p></div>";
            result+=contact;
        }
        return result;
    }
                $("#loading").hide();
                $(".wrapper").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });
    </script>
@stop