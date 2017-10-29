<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	function getUploadDir(){
		return dirname(dirname(dirname(__DIR__))).'/public/assets/images/uploads/';
	}
	
	function getLangEn(){
		return dirname(dirname(dirname(__DIR__)))."/resources/lang/en/";
	}

    function getLangMobile(){
        return dirname(dirname(dirname(__DIR__)))."/resources/lang/mobile/";
    }
	function getLangZh(){
		return dirname(dirname(dirname(__DIR__)))."/resources/lang/zh/";
	}

	function getAllUrl(){
        return array(
            array('title'=>'首页','title_en'=>'home','lang_file'=>'home.php','file'=>'home.blade.php','url'=>'home'),
            array('title'=>'我们','title_en'=>'about','lang_file'=>'about.php','file'=>'about.blade.php','url'=>'about'),
            array('title'=>'信念','title_en'=>'belief','lang_file'=>'belief.php','file'=>'belief.blade.php','url'=>'belief'),
            array('title'=>'作品列表','title_en'=>'workList','lang_file'=>'worklist.php','file'=>'workList.blade.php','url'=>'workList'),
            array('title'=>'专业','title_en'=>'serve','lang_file'=>'serve.php','file'=>'serve.blade.php','url'=>'serve'),
            array('title'=>'同路','title_en'=>'careers','lang_file'=>'careers.php','file'=>'careers.blade.php','url'=>'careers'),
            array('title'=>'联系','title_en'=>'contact','lang_file'=>'contact.php','file'=>'contact.blade.php','url'=>'contact'),
            array('title'=>'入口','front_name'=>'homeindex','title_en'=>'index','lang_file'=>'index.php','file'=>'index.blade.php','url'=>'index'),
            array('title'=>'新闻','title_en'=>'news','lang_file'=>'news.php','file'=>'news.blade.php','url'=>'news'),
            array('title'=>'荣誉','title_en'=>'award','lang_file'=>'award.php','file'=>'award.blade.php','url'=>'award'),
            array('title'=>'作品详情','title_en'=>'workDetail','lang_file'=>'workdetail.php','file'=>'workDetail.blade.php','url'=>'workDetail'),
            array('title'=>'cave详情','front_name'=>'cave','title_en'=>'workDetail_cave','lang_file'=>'workdetailcave.php','file'=>'workDetail_cave.blade.php','url'=>'workDetail?project=cave'),
            array('title'=>'dforce详情','front_name'=>'dforce','title_en'=>'workDetail_dforce','lang_file'=>'workdetaildforce.php','file'=>'workDetail_dforce.blade.php','url'=>'workDetail?project=dforce'),
            array('title'=>'dkang详情','front_name'=>'dakang','title_en'=>'workDetail_dkang','lang_file'=>'workdetaildakang.php','file'=>'workDetail_dkang.blade.php','url'=>'workDetail?project=dkang'),
            array('title'=>'songclub详情','front_name'=>'songclub','title_en'=>'workDetail_songclub','lang_file'=>'workdetailsongclub.php','file'=>'workDetail_songclub.blade.php','url'=>'workDetail?project=songclub'),
            array('title'=>'songrestaurant详情','front_name'=>'songrestaurant','title_en'=>'workDetail_songrestaurant','lang_file'=>'workdetailsongrestaurant.php','file'=>'workDetail_songrestaurant.blade.php','url'=>'workDetail?project=songrestaurant'),
            array('title'=>'xclub详情','front_name'=>'xclub','title_en'=>'workDetail_xclub','lang_file'=>'workdetailxclub.php','file'=>'workDetail_xclub.blade.php','url'=>'workDetail?project=xclub'),
            array('title'=>'aotubar详情','front_name'=>'aotubar','title_en'=>'workDetail_aotubar详情','lang_file'=>'workdetailaotubar.php','file'=>'workDetail_aotubar.blade.php','url'=>'workDetail?project=aotubar'),
            array('title'=>'gangyi详情','front_name'=>'gangyi','title_en'=>'workDetail_gangyi详情','lang_file'=>'workdetailgangyi.php','file'=>'workDetail_gangyi.blade.php','url'=>'workDetail?project=gangyi'),
        );
    }
    function getCdnPic(){
	    $string ="003.jpg#004.jpg#005.jpg#007.jpg#008.jpg#013.jpg#020.jpg#AnimOnScroll.js#DK-slider.jpg#D_froce.jpg#Dfroce-slider.jpg#Dfroce2-slider.jpg#HDA.jpg#SongRestraunt-slider.jpg#SongRestraunt2-slider.jpg#Song_club.jpg#Xclub-slider.jpg#about-bottom-pic.jpg#about-p0.jpg#about.jpg#aotu-slider.jpg#apic-02.jpg#apic-03.jpg#apic.jpg#award-pic.jpg#banner.jpg#banner2.jpg#banner_2.jpg#belief-01.jpg#belief-02.jpg#belief-03.jpg#belief-04.jpg#belief-05.jpg#belief-06.jpg#belief-07.jpg#belief-08.jpg#belief-09.jpg#belief-10.jpg#belief-11.jpg#belief-12.jpg#belief-13.jpg#belief-p02.jpg#belief.jpg#bg_db.jpg#bg_db.png#bg_db3.jpg#big_logo.png#big_logo_mobile_new.png#big_logo_new.png#bottom_logo.png#careers.jpg#careers1.jpg#careers2.jpg#careers3.jpg#careersr.jpg#cave_006-r.jpg#cave_012.jpg#cave_016-r.jpg#cave_017.jpg#cave_club.jpg#classie.js#component.css#contactBg.jpg#dashed.png#dashed_white.png#dforce.mp4#dforce_01.jpg#dforce_04.jpg#dforce_05.jpg#dforce_06.jpg#dforce_07.jpg#dforce_08.jpg#dforce_09.jpg#dforce_10.jpg#dforce_11.jpg#dforce_12.jpg#dforce_13.jpg#dforce_14.jpg#dforce_15.jpg#dforce_16.jpg#dkang001.jpg#dkang002.jpg#dkang003.jpg#dkang004.jpg#dkang005.jpg#dkang006.jpg#dpic-02-2.jpg#dpic-02.jpg#dpic-03.jpg#dpic-04.jpg#dpic-05.jpg#dpic.jpg#dpic_01.jpg#dpic_02.jpg#dpic_03.jpg#ewm.png#footer_bd#footer_bd.jpg#fotter-logo.jpg#home_bottom_bg.jpg##imagesloaded.js#index.css#indexGrid-02.jpg#indexGrid-03.jpg#indexGrid-04.jpg#indexGrid-05.jpg#indexGrid-06.jpg#indexGrid.jpg#index_bg.jpg#index_bg_navi.jpg#index_bg_rotate.jpg#jqnav.js#jqnav_mobile.js#jquery.min.js#logo_bottom.jpg#logo_bottom.png#logopng.png#masonry.pkgd.min.js#mbpic-02.jpg#mbpic-03.jpg#mbpic-04.jpg#mbpic-05.jpg#mbpic-06.jpg#mbpic.jpg#minigrid.js#mobile.css#modernizr.custom.js#news-1.jpg#news-2.jpg#news_banner.jpg#person-02.jpg#person-03.jpg#person-04.jpg#person-05.jpg#person-06.jpg#person-07.jpg#person.jpg#play.png#player.png#preview.mp4#prize.jpg#reddot.jpg#sea.jpg#serve.jpg#song_club_slider.jpg#song_club_slider2.jpg#song_restaurant.jpg#songclub001.jpg#songclub002.jpg#songclub003.jpg#songclub004.jpg#songclub005.jpg#songclub006.jpg#songclub007.jpg#songclub008.jpg#songrestruant001.jpg#songrestruant002.jpg#songrestruant003.jpg#songrestruant004.jpg#songrestruant005.jpg#songsclub.mp4#spic.jpg#spic_01.jpg#spic_02.jpg#swiper.min.css#swiper.min.js#title_black_bg.jpg#video.mp4#video.webm#work-02.jpg#work-03.jpg#work.jpg#worklist-02.jpg#worklist-03.jpg#worklist-04.jpg#worklist-05.jpg#worklist-06.jpg#worklist-07.jpg#worklist-08.jpg#worklist-5.jpg#worklist-c5.jpg#worklist-c6.jpg#worklist-c7.jpg#worklist-c8.jpg#worklist.jpg#worklist0.jpg#x_club.jpg#xclub2-slider.jpg#zxx.lib-min.css";
	    $arrs = explode("#",$string);
	    $geshi = array('jpg','mp4','png');
	    $result = [];
	    foreach ($arrs as $value){
	        if(in_array(substr($value,strpos($value,'.')+1),$geshi)){
                $result[]=$value;
            }
        }
        return $result;
    }

	public function returnContent($content,$state){
		echo json_encode(array('msg'=>$content,'state'=>$state));exit;
	}
}
