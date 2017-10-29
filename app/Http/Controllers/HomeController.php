<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use BrowserDetect;
use Illuminate\Http\Request;
use Agent;

class HomeController extends Controller
{
    private  $isMobile='';
    public function render($view){

        // Agent::is('Windows');
        // Agent::is('Firefox');
        // Agent::is('iPhone');
        // Agent::is('OS X');
        
        // Agent::isAndroidOS();
        // Agent::isNexus();
        // Agent::isSafari();
        // 设备类型
        $this->isMobile = Agent::isMobile();
        // $isTablet = Agent::isTablet();
        // $isDesktop = Agent::isDesktop();
        if( $this->isMobile ){
            return view("mobile/".$view,$this->storeViewData());
            // echo "手机端";
            // return view($view);
        }else{

            return view($view,$this->storeViewData());
        }
    }

    public function storeViewData(){
        $in = 1;//file_get_contents("http://127.0.0.1/ip_php/index.php");
        $address_url = $in == "0" ? env("address_google") : env("address_baidu");
        if( $this->isMobile ){
            $lang = $this->getLangMobile();
        }else {
            $lang = $this->getLangEn();
        }
        $url = $this->getAllUrl();
        $Data='';
        foreach($url as $value){
            if(in_array(substr($_SERVER['REQUEST_URI'],1),$value)){
                $Data = include($lang.$value['lang_file']);
                break;
            }
        }

        $Data = substr($_SERVER['REQUEST_URI'],1)===''?include($lang.'index.php'):$Data;
        return [
            'address_url'=>$address_url,
            'address'=> env('address'),
            'email_general'=> env('email_general'),
            'email_biz'=> env('email_biz'),
            'email_hr'=> env('email_hr'),
            'email_ms'=> env('email_ms'),
            'phone'=> env('phone'),
            'fax'=> env('fax'),
            'lang'=>$lang,
            'Data'=>$Data,
            'url'=>$url ,
        ];
    }


    public function home(){
        return $this->render(__FUNCTION__);
    }

    public function award(){
        return $this->render(__FUNCTION__);
    }
    public function index(){
        return $this->render(__FUNCTION__);
    }
    public function about(){
        return $this->render(__FUNCTION__);
    }
    public function news(){
        return $this->render(__FUNCTION__);
    }
    public function belief(){
        return $this->render(__FUNCTION__);
    }
    public function careers(){
        return $this->render(__FUNCTION__);
    }
    public function contact(){
        return $this->render(__FUNCTION__);
    }
    public function serve(){
        return $this->render(__FUNCTION__);
    }
    public function work(){
        return $this->render(__FUNCTION__);
    }
    public function workDetail(Request $request){
        if($request->has("project")){
            $project =  $request->has("project") ? $request->input("project") : "xclub";

            return $this->render(__FUNCTION__."_".$project);
        }else{
            header("Location:http://".$_SERVER['SERVER_ADDR']."/workDetail?project=xclub");
//            return $this->render(__FUNCTION__);
        }
    }
    public function workList(){
        return $this->render(__FUNCTION__);
    }
    public function job(){
        return $this->render(__FUNCTION__);
    }
	public function honor(){
		return $this->render(__FUNCTION__);
	}
}
