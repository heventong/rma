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

        <input type="hidden" name="page_name" value="{{$_GET['edit']}}" />
        <input type="hidden" name="page_type" value="mobile" />
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
                            <p><input type="text" name="banner[{{$key}}][sub_title]" value="{{$value['sub_title']}}"/></p>
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

        </div>

        <div class="row cl">
            <span class='title'>作品展示</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"dforce",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['dforce']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="dforce[title]" type="text" value="{{$Data['dforce']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="dforce[pic]" value="{{$Data['dforce']['pic']}}">
                        <select name="dforce[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['dforce']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示1</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"cave",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['cave']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="cave[title]" type="text" value="{{$Data['cave']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="cave[pic]" value="{{$Data['cave']['pic']}}">
                        <select name="cave[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['cave']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示2</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"songclub",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['songclub']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="songclub[title]" type="text" value="{{$Data['songclub']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="songclub[pic]" value="{{$Data['songclub']['pic']}}">
                        <select name="songclub[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['songclub']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示3</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"dforce2",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['dforce2']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="dforce2[title]" type="text" value="{{$Data['dforce2']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="dforce2[pic]" value="{{$Data['dforce2']['pic']}}">
                        <select name="dforce2[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['dforce2']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示4</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"songrestaurant",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['songrestaurant']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="songrestaurant[title]" type="text" value="{{$Data['songrestaurant']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="songrestaurant[pic]" value="{{$Data['songrestaurant']['pic']}}">
                        <select name="songrestaurant[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['songrestaurant']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示4</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"aotubar",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['aotubar']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="aotubar[title]" type="text" value="{{$Data['aotubar']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="aotubar[pic]" value="{{$Data['aotubar']['pic']}}">
                        <select name="aotubar[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['aotubar']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示5</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"xclub",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['xclub']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="xclub[title]" type="text" value="{{$Data['xclub']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="xclub[pic]" value="{{$Data['xclub']['pic']}}">
                        <select name="xclub[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['xclub']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示6</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"cave2",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['cave2']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="cave2[title]" type="text" value="{{$Data['cave2']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="cave2[pic]" value="{{$Data['cave2']['pic']}}">
                        <select name="cave2[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['cave2']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示7</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"songclub2",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['songclub2']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="songclub2[title]" type="text" value="{{$Data['songclub2']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="songclub2[pic]" value="{{$Data['songclub2']['pic']}}">
                        <select name="songclub2[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['songclub2']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <div class="row cl">
            <span class='title'>作品展示8</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"xclub2",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['xclub2']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="xclub2[title]" type="text" value="{{$Data['xclub2']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="xclub2[pic]" value="{{$Data['xclub2']['pic']}}">
                        <select name="xclub2[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['xclub2']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示9</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"songrestaurant2",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['songrestaurant2']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="songrestaurant2[title]" type="text" value="{{$Data['songrestaurant2']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="songrestaurant2[pic]" value="{{$Data['xclub2']['pic']}}">
                        <select name="songrestaurant2[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['xclub2']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>


        <div class="row cl">
            <span class='title'>作品展示10</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"dkang",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['dkang']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="dkang[title]" type="text" value="{{$Data['dkang']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="dkang[pic]" value="{{$Data['dkang']['pic']}}">
                        <select name="dkang[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['dkang']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示11</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"dforce3",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['dforce3']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="dforce3[title]" type="text" value="{{$Data['dforce3']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="dforce3[pic]" value="{{$Data['dforce3']['pic']}}">
                        <select name="dforce3[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['dforce3']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示12</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"dforce4",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['dforce4']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="dforce4[title]" type="text" value="{{$Data['dforce4']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="dforce4[pic]" value="{{$Data['dforce4']['pic']}}">
                        <select name="dforce4[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['dforce4']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row cl">
            <span class='title'>作品展示13</span>
            <label class="form-label col-xs-4 col-sm-2">编辑：</label>
            <div  style="overflow: hidden">
                <div class="btn btn-secondary" onclick='upload(this,"gangyi",1)'>修改</div>
                <br/>
                <div class="info">
                    <div class="pic-box"><img  src="{{asset($Data['gangyi']['pic'])}}">
                        <p class="state">原图</p>
                        <p>title:</p>
                        <p><input name="gangyi[title]" type="text" value="{{$Data['gangyi']['title']}}"/></p>
                        <span>链接</span>
                        <input type="hidden" name="gangyi[pic]" value="{{$Data['gangyi']['pic']}}">
                        <select name="gangyi[url]">
                            <?php foreach($url as $v){ ?>
                            <option {{$Data['gangyi']['url']==$v['url']?'selected':''}} value="{{$v['url']}}">{{$v['title']}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				{{--<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>--}}
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i>提交修改页面</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                <a target="_blank"  href="{{url('workList')}}">打开当前编辑的页面</a>
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
    function upload(view,type,count=0){
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
                var contact = set_upload(upload_value,type,count);
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

    function set_upload(upload_value,type,count=0) {
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
            var contact = "<div class='pic-box upload_pic'><input name='"+upload_value.name+"[pic]' type='hidden' value='"+upload_value.value+"'>" +
                "<img style='width: 100px;max-height: 100px' name='"+upload_value.name+"' src='"+upload_value.value+"' value='"+upload_value.value+"'/>"+
                "<p>title:<input type='text' name='"+upload_value.name+"[title]' value='"+tmp['data'][type]['title']+"'></p>";
            var links = "<p>点击链接：<select name="+upload_value.name+"[url]>";
//            console.log(upload_value.name);return false;
            for(var j in tmp['data']['links']){
                links += "<option "+(tmp['data'][type]['url']==tmp['data']['links'][j]['url']?'selected':'')+" value="+tmp['data']['links'][j]['url']+">"+tmp['data']['links'][j]['title']+"</option>";
            }
            contact+=links+"</select></p></div>";
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