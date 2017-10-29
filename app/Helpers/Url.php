<?php
    function cdn_url($url = "" , $width = "", $height = "", $thumbnail = "", $gravity = "center" ){
        // echo env("cdn_url");
        if($url){
            $url = str_replace("assets/images/","",$url);
        }
        $arr = array();
        if($thumbnail){
            $str = "imageMogr2/thumbnail/".$thumbnail."/interlace/1";
            array_push($arr,$str);
        }
        if($width && $height){
            $str = "imageMogr2/gravity/".$gravity."/crop/".$width."x".$height."/quality/70";
            array_push($arr,$str);
        }
        $query = implode("|",$arr);
        return env("cdn_url").$url."?".$query;
    }

    function source_url($url = "" ){
        // echo env("cdn_url");
        if($url){
            $url = str_replace("assets/images/","",$url);
            $url = str_replace("assets/js/","",$url);
            $url = str_replace("assets/css/","",$url);
        }
        return env("source_url").$url;
    }
?>