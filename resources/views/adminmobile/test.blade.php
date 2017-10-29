@extends('layouts.admin_common')

@section("content")
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <section class="Hui-article-box">
        <div>
            <ul class="SR_wrap_pic"></ul>
            <button type="button" class="btn btn-xs btn-primary SR_btn_pic" onclick="addWebUpload_current(this)">
                <i class="fa fa-upload"></i> Upload
                <span class="uploadBtn_pic"></span>
            </button>
        </div>
        <div>
            <ul class="SR_wrap_pic"></ul>
            <button type="button" class="btn btn-xs btn-primary SR_btn_pic" onclick="addWebUpload_current(this)">
                <i class="fa fa-upload"></i> Upload
                <span class="uploadBtn_pic"></span>
            </button>
        </div>
    </section>
<script>
    function addWebUpload_current(obj) {
        $(".webUpload_current").removeClass("webUpload_current");//先全部移除
        $(obj).parent().addClass("webUpload_current");//添加当前标识
    }
    $(function () {

        var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档
        var thumbnailHeight = 100;
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });


        $list = $("#fileList"),
        $btn = $("#btn-star"),
        state = "pending",
        uploader;
        var uploader = WebUploader.create({
            auto: true,
            swf: 'lib/webuploader/0.1.5/Uploader.swf',
            server: '{{url('upload')}}',
            pick: '.uploadBtn_pic',
            resize: false,
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
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress-box .sr-only');
            if ( !$percent.length ) {
                $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
            }
            $li.find(".state").text("上传中");
            $percent.css( 'width', percentage * 100 + '%' );
        });
        uploader.on( 'uploadSuccess', function( file ,response) {
            $(".webUpload_current").append( $li );
            $(  '#'+file.id).addClass('upload-state-success').find(".state").text("已上传");
            $(  '#'+file.id).append("<input type='hidden' name='bannerPic[]' value='"+response['file_dir']+"' >")
        });
        uploader.on( 'uploadError', function( file ) {
            $( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
        });
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

        var uploader1 = WebUploader.create({
            auto: true,
            swf: 'lib/webuploader/0.1.5/Uploader.swf',
            server: '{{url('upload')}}',
            pick: '#filePicker1',
            formData: {
                id: $(this).attr('id')
            },
            resize: false,
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
    })
</script>