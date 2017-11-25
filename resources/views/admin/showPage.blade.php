@extends('layouts.admin_common')

@section("content")
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
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

            <p>
                <span id="addPage" href="{{url('editPage')}}" class="btn radius btn-primary">新增</span>
            </p>
            <table class="table table-border table-bordered table-hover">
                <tbody>
                    <tr class="firstRow">
                        <td width="172" valign="top" style="word-break: break-all;">创建时间</td>
                        <td width="172" valign="top" style="word-break: break-all;">名称</td>
                        <td width="172" valign="top" style="word-break: break-all;">链接</td>
                        <td width="172" valign="top" style="word-break: break-all;">PC端/移动端</td>
                        {{--<td width="172" valign="top" style="word-break: break-all;">是否启用</td>--}}
                        <td width="172" valign="top" style="word-break: break-all;">操作</td>
                    </tr>
                    <?php $uedit = include(base_path("routes").'/uedit_web.php');foreach($uedit as $key=>$value){?>
                    <tr>
                        <td width="172" valign="top" style="word-break: break-all;">{{date("Y-m-d H:i:s",$value['create_time'])}}</td>
                        <td width="172" valign="top"><a target="_blank" href="{{$value['url']}}">查看</a></td>
                        <td width="172" valign="top">{{$value['new_page_title']}}</td>
                        <td width="172" valign="top">{{$value['new_page_type']}}</td>
                        {{--<td width="172" valign="top">{{$value['istate']}}</td>--}}
                        <td width="172" valign="top"><a class="editPage" href="javascript:;" data="<?php echo $key==0?0:$key;?>">编辑</a>
                            <a class="delPage" href="javasript:;" data="<?php echo $key==0?0:$key;?>">删除</a></td>
                    </tr>
                    <?php }?>

                </tbody>
            </table>

        </form>

    </section>

    <script>
        (function ($) {
            $("#addPage").on("click", function () {
                layer.open({
                    type: 2,
                    title: '添加页面',
                    shadeClose: true,
//                    shade: 0.8,
                    area: ['1000px', '90%'],
                    content:'{{url('editPage')}}' //iframe的url
                });
            })
            $(".editPage").on("click", function () {
                var id =$(this).attr("data");
                layer.open({
                    type: 2,
                    title: '编辑页面',
                    shadeClose: true,
//                    shade: 0.8,
                    area: ['1000px', '90%'],
                    content: '/editPage?id='+id //iframe的url
                });
            })
            $(".delPage").on("click", function () {
                var id =$(this).attr("data");
                var r=confirm("确定要删除该页面？");
                if (r==true)
                {
                    $.ajax({
                        url:'/delPage',
                        type:'post',
                        data:{"id":id},
                        success:function(res){
                            var res = JSON.parse(res)
                            if(res.state == '1'){
                                top.location.reload();
                            }
                        }
                    })
                }
            })
        })(jQuery)
    </script>
