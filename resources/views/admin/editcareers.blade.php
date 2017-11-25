
<?php
use Illuminate\Support\Facades\DB;

        switch($_GET['type']){
            case '1':
                $table = 'careers';
                break;
            case '2':
                $table = 'careers2';
                break;
            case '3':
                $table = 'careers_award';
                break;
        }
if (array_key_exists('id',$_GET) && $_GET['id'])$info = DB::connection('sqlite')->select('select * from '.$table.' where id = ? ',[$_GET['id']])[0];
?>

<!-- 加载编辑器的容器 -->
<style>
    html{background: white}
</style>
<html>
<body>
招聘条目：<input type="text" name="title" value="<?php echo !empty($info)?$info->title:''?>">
<input type="hidden" name="id" value="<?php echo !empty($info)?$info->id:''?>">
<input type="hidden" name="type" value="<?php echo $_GET['type']?>">
<br/>
<script id="container" name="content" type="text/plain">
    <?php echo !empty($info)?$info->content:''?>
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
        $.ajax({
            url:'{{url('addsavecareers')}}',
            data:{'data':UE.getEditor('container').getContent(),'title':$("input[name=title]").val(),'id':$("input[name=id]").val(),'page_type':'all','page_name':'careers','type':$('input[name=type]').val()},
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