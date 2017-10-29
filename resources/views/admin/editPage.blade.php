{{--@extends('layouts.admin_common')--}}

{{--@section("content")--}}

<!-- 加载编辑器的容器 -->
<style>
    html{background: white}
</style>
<html>
<body>
<input type="hidden" name="id" value="<?php echo $index ?>">
名称：<input type="text" name="new_page_title" value="<?php echo !empty($data)?$data['new_page_title']:''?>">
网址：<input type="text" name="new_page_name" value="<?php echo !empty($data)?$data['new_page_name']:''?>">

<br/>
展示类型：<label><input type="radio" name="new_page_type" <?php echo !empty($data)?($data['new_page_type']=='PC'?"checked":""):''?> value="PC">PC</label><label><input type="radio" name="new_page_type" <?php echo !empty($data)?($data['new_page_type']=='mobile'?"checked":""):''?> value="mobile">移动端</label>
<script id="container" name="content" type="text/plain">
    <?php echo !empty($data)?$data['data']:''?>
    </script>
<button id="submit_form" onclick="getContent()">提交</button>
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<!-- 配置文件 -->
<script src="<?php echo e(asset("assets/js/ueditor/1.4.3/ueditor.config.js")); ?>"></script>
<!-- 编辑器源码文件 -->
<script src="<?php echo e(asset("assets/js/ueditor/1.4.3/ueditor.all.js")); ?>"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{
//        initialFrameWidth : 600,
        initialFrameHeight: 600
    });

    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('container').getContent());
//        alert(arr.join("\n"));
        $.ajax({
            url:'{{url('addPage')}}',
            data:{'data':UE.getEditor('container').getContent(),'new_page_name':$("input[name=new_page_name]").val(),'new_page_type':$("input[name='new_page_type']:checked").val(),'new_page_title':$("input[name=new_page_title]").val(),'id':$("input[name=id]").val()},
            type:'post',
            success:function(res){
                res = JSON.parse(res);
                if(res.state=='1'){
                    top.location.reload();
                }else{
                    alert(res.msg);
                }
            }
        })
    }

</script>
</body>
</html>