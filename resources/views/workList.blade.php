@extends('layouts.common')

@section("content")

<style type="text/css">
    .grid-item-culture aside h6 span{font-family: "Renogare";letter-spacing:2px;font-size: 12px}
    .grid-item-culture aside h5{font-weight: 200}
    aside .ch {font-size: 12px;}
    .grid-item-culture aside h6.ch span{font-family: FZShuSong-Z01T}
    .grid-item-culture aside h6 span{letter-spacing: 4px}
    .grid-item-culture aside h5.ch{font-size: 15px;font-family: FZShuSong-Z01T}
    .caree h6[class='ch'] span,.blive h6[class='ch'] span{font-size: 15px!important}
</style>

    <!-- loading end -->
    <div class="wrapper worklist">
        <!-- header -->
        <div class="header">
            <h1 class="logo"><a class="" href="{{ url('index') }}">RMA</a></h1>
            <span class="btn-menu icon-menu "></span>
        </div>
        <!-- header end-->
        <div class="header-bg"></div>
        <div id="banner" class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($Data['banner'] as $key => $value){ ?>
                    <div class="swiper-slide">
                        <a href="#" style="background: url({{ $value['pic'] }}) 50% no-repeat; background-size: cover;">
                            <div class="ban-text">
                                <span><?php echo $Data['banner'][$key]['sub_title'];?></span>
                                <h3><?php echo $Data['banner'][$key]['title'];?></h3>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- scroll-down-arrow end-->
        <div class="text-title">
            <h2>
                @lang("work.list.text_title")
                <i class="splitor_white large"></i><span class="ch">@lang("work.list.text_title_ch")</span>
            </h2>
        </div>
        <!-- tetx-title end -->
        <!-- grid-container -->
        <div class="grid-container" style="background: #000;">
            <div class="work-wrapper">
                <div class="grid-item">
                    <a href="{{ $Data['dforce']['url'] }}" class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['dforce']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6>
                                    <span class="title"><?php echo $Data['dforce']['title']?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items ">
                    <a href="{{ $Data['cave']['url'] }}" class="grid-item-image">
                        <div class="image"><img src=" {{ $Data['cave']['pic'] }} " alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6>
                                    <span class="title"><?php echo $Data['cave']['title']?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ $Data['songclub']['url'] }}"  class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['songclub']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6>
                                    <span class="title"><?php echo $Data['songclub']['title']?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['songrestaurant']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['songrestaurant']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['songrestaurant']['title']?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items " style="background:#FFF url({{ cdn_url("assets/images/bg_db.png",750,750,'!750x750r') }})  no-repeat right;background-size:auto 100%;">
                    <a href="{{ $Data['dforce2']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['dforce2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['dforce2']['title'];?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ url('careers') }}" class="grid-item-culture" style="padding-top: 1em">
                        <aside class="caree">
                            <h6><span>CAREE</span></h6>
                            <h5 >WITH A REVOLUTIONARY,<br> PIONEERING, EXPERIMENTAL SPIRIT<br> UNINHIBITED LOVE OF THE BRAVE</h5>
                            <h6 class="ch" style="font-size: 12px"><span>我們正在召集：</span></h6>
                            <h5 class="ch">具有革命性、先鋒性、實驗性精神<br>不羈愛思考的勇者</h5>
                        </aside>
                    </a>
                </div>

                <div class="grid-item grid-items ">
                    <a href="{{ $Data['aotubar']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['aotubar']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['aotubar']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ $Data['xclub']['url'] }}"  class="grid-item-image">
                        <div class="image pc"><img src="{{ $Data['xclub']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container ">
                                <h6><span class="title"><?php echo $Data['xclub']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['cave2']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['cave2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6>
                                    <span class="title"><?php echo  $Data['cave2']['title']?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['dforce3']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['dforce3']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">

                                <h6>
                                    <span class="title"><?php echo $Data['dforce3']['title'];?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['songclub2']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['songclub2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6><span class="title"><?php echo $Data['songclub2']['title']?>

                                    </span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['xclub2']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['xclub2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6><span class="title"><?php echo $Data['xclub2']['title']?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item grid-items">
                    <a href="{{ $Data['songrestaurant2']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['songrestaurant2']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6><span class="title">
                                        <?php echo $Data['songrestaurant2']['title']?>
                                    </span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                    <a href="{{ $Data['dkang']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['dkang']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">
                                <h6><span class="title"><?php echo $Data['dkang']['title'];?></span></h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['dforce4']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['dforce4']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">

                                <h6>
                                    <span class="title"><?php echo  $Data['dforce4']['title'];?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ $Data['gangyi']['url'] }}" class="grid-item-image">
                        <div class="image"><img src="{{ $Data['gangyi']['pic'] }}" alt=""></div>
                        <aside>
                            <div class="title-container">

                                <h6>
                                    <span class="title"><?php echo  $Data['gangyi']['title'];?>
                                    </span>
                                </h6>
                            </div>
                            <i class="ds-cross"></i>
                        </aside>
                    </a>
                </div>

            </div>
        </div>
        <!-- grid-container end -->

        <!-- footer -->
    @include('layouts.footer')
    <!-- footer end-->
    </div>
@stop


@section("script")
    <script>


        //        var video = $("#video");
        var swiper = new Swiper('#banner', {
            autoplay: 4000,
            speed: 1500,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: false,
            autoplayDisableOnInteraction: false,
            onSlideChangeStart: function(swiper){
                if( swiper.activeIndex == 0 ){
                    video.show();
                    video.get(0).play();
                    swiper.stopAutoplay();
                }else{
                    swiper.startAutoplay();
                }
            }
        });
        //        video.show();
        //        video.get(0).play();
        //        swiper.stopAutoplay();
        //        video.get(0).onended = function(){
        //            swiper.slideNext();
        //            swiper.startAutoplay();
        //        }
    </script>
    <script type="text/javascript">
        //   document.onreadystatechange = loading;
        // function loading(){
        //         if(document.readyState == "complete")
        //         {
        //             $("#loading").hide().remove();
        //             $("#content").css({
        //                 opacity: '1',
        //                 filter: ' alpha(opacity=100)'
        //             });

        //         }
        //         }

        $(function() {
            test();
        });

        function test() {
            var count = $("img").length;
            var num = 0;
            $("img").each(function(a, athis) {
                if (athis.complete) {
                    num++;
                }
            });
            if (count == num) {
                $("#loading").hide();
                $(".wrapper").css({
                    opacity: '1',
                    filter: ' alpha(opacity=100)'
                });
            } else {
                setTimeout(test, 20);
            }

        }
    </script>
    <!-- index item-gird -->
    <script>
        (function() {
            setTimeout(function() {
                minigrid('.work-wrapper', '.grid-item', 0, null,
                    function() {
                        var d = document.querySelector('.grid-container');
                        d.style.opacity = 1;
                    }
                );
            }, 100);

            window.addEventListener('resize', function() {
                minigrid('.work-wrapper', '.grid-item');
            });
        })();
    </script>
@stop