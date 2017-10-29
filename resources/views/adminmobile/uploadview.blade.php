<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/H-ui.min.css")}}" />
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/H-ui.admin.css")}}" />
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/1.0.8/iconfont.css")}}" />
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/skin.css")}}" id="skin" />
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/hui/style.css")}}" />
<link rel="stylesheet" type="text/css" href="{{ asset("assets/js/webuploader/0.1.5/webuploader.css")}}" />
<!--<script src="{{ source_url("assets/js/jquery.min.js") }}"></script>--><script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<!--<script src="{{ source_url("assets/js/jqnav_mobile.js") }}"></script>--><script src="{{ asset("assets/js/jqnav_mobile.js") }}"></script>
<!--<script src="{{ source_url("assets/js/swiper.min.js") }}"></script>--><script src="{{ asset("assets/js/swiper.min.js") }}"></script>
<!-- [if lt IE 9]><script src=”http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js”></script><![endif]-->
<!--<script src="{{ source_url("assets/js/minigrid.js") }}"></script>--><script src="{{ asset("assets/js/minigrid.js") }}"></script>
<script src="{{ asset("assets/layer/layer.js") }}"></script>

<script type="text/javascript" src="{{ asset("assets/js/hui/H-ui.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/hui/H-ui.admin.page.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/webuploader/0.1.5/webuploader.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/ueditor/1.4.3/ueditor.all.min.js") }}"></script>

<style>
    .red_border{border:1px solid red }
    .gray_border{border:1px solid gray }
</style>
<form id="upload">
    <input type="hidden" id="pic_type" value="{{$_GET['pic_type']}}">
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <div class="uploader-thum-container">
                <div id="fileList" class="uploader-list"></div>
                <div id="filePicker">添加图片</div>
                {{--<button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>--}}
            </div>
        </div>
    </div>
        <ul id="upload_pic" style="overflow: hidden">
            <?php foreach ($upload_pic as $value){?>
            <li class="gray_border" style="float:left;width: 100px;height: 100px;padding: 5px;margin:5px;overflow: hidden">
                <img style="width:100%" title="{{$value}}" src="{{asset("assets/images/uploads/$value")}}" data ="assets/images/uploads/{{$value}}">
            </li>
            <?php }?>
            <?php foreach ($image_pic as $value){?>
            <li class="gray_border" style="float:left;width: 100px;height: 100px;padding: 5px;margin:5px;overflow: hidden">
                <img style="width:100%" title="{{$value}}" src="{{asset("assets/images/$value")}}" data ="assets/images/{{$value}}">
            </li>
            <?php }?>

        </ul>
</form>

<script type="text/javascript">

    $list = $("#fileList"),
        $btn = $("#btn-star"),
        state = "pending",
        uploader;

    var uploader = WebUploader.create({
        auto: true,
        swf: 'lib/webuploader/0.1.5/Uploader.swf',

        // 文件接收服务端。
        server: '{{url('upload')}}',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
        resize: false,
        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'fileQueued', function( file ) {
        var $li = $(
                '<div id="' + file.id + '" class="item">' +
                '<div class="pic-box"><img></div>'+
                '<div class="info">' + file.name + '</div>' +
                '<p class="state">等待上传...</p>'+
                '</div>'
            ),
            $img = $li.find('img');
        $list.append( $li );

        // 创建缩略图
        // 如果为非图片文件，可以不用调用此方法。
        // thumbnailWidth x thumbnailHeight 为 100 x 100
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, 100, 100 );
    });
    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress-box .sr-only');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
        }
        $li.find(".state").text("上传中");
        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ,response) {
        $( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
        location.reload();
        $( '#'+file.id ).append("<input type='hidden' name='bannerPic[]' value='"+response['file_dir']+"' >")
    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress-box').fadeOut();
    });
    uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });
    $("#upload_pic").on("click",'li',function(){
        var pic_type = $("#pic_type").val();
        if($(this).attr('class')=='red_border'){
            $(this).children("input").remove()
            $(this).removeClass("red_border");
            $(this).addClass("gray_border");
        }else{
            $(this).append("<input type='hidden' name="+pic_type+" value= "+$(this).find("img").attr('data')+" >");
            $(this).removeClass("gray_border");
            $(this).addClass("red_border");
        }
    })
</script>