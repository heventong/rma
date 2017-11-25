<?php

/*namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use BrowserDetect;
use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Agent;
use Storage;
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    private $relation = '';
    public function __construct()
    {
        $this->relation = include(base_path('routes')."/relation.php");
        session_start();
        $uname = isset($_SESSION['user']) ? $_SESSION['user'] : '';
        if(empty($uname) && $_SERVER['REQUEST_URI'] != '/login' && $_SERVER['REQUEST_URI'] != '/loginCheck'){
            header("Location:/login");
        }
    }

    public function render($view){
        if(array_key_exists('new_page',$_GET)){
            $new_page_name = $_GET['new_page_name'];
            switch($_GET['new_page']){
            case 'admin':
                return view("admin/".$new_page_name,$this->storeNewData());
                break;
            case 'adminmobile':
                return view("admin/".$new_page_name,$this->storeNewData());
                break;
            case 'pc':
                return view($new_page_name,$this->storeNewData());
                break;
            case 'mobile':
                return view("mobile/".$new_page_name,$this->storeNewData());
                break;
            }
        }

        if(array_key_exists('manage',$_GET) && $_GET['manage']=='mobile') {
            return view("adminmobile/" . $view, $this->storeMobileViewData());
        }
        return view("admin/".$view,$this->storeViewData());

    }

    public function storeNewData(){
        $cdn = $this->getCdnPic();
        $in = 1;//file_get_contents("http://127.0.0.1/ip_php/index.php");
        $address_url = $in == "0" ? env("address_google") : env("address_baidu");
        $Data = '';
        if(array_key_exists('new_page',$_GET)){
            $lang = $this->getLangEn();
            switch($_GET['new_page']){
                case 'pc':
                    $Data = include(base_path('resources')."/lang/en/".$_GET['new_page_name'].".php");
                    break;
                case 'mobile':
                    $Data = include(base_path('resources')."/lang/mobile/".$_GET['new_page_name'].".php");
                    break;

            }
//            $Data = include(base_path('resources')."/lang/en/".$_GET['new_page_name'].".php");
        }else{
            $lang = $this->getLangEn();
        }
        $url = $this->getAllUrl();
        $upload_path = base_path('public').'/assets/images/uploads/';
        $image_path = base_path('public').'/assets/images/';
        $upload_pic = scandir($upload_path);unset($upload_pic[0],$upload_pic[1]);
        $image_pic = scandir($image_path);unset($image_pic[0],$image_pic[1]);
        $upload_pic = array_reverse($upload_pic);
        $image_pic = array_reverse($image_pic);
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
            'url'=>$url,
            'upload_pic'=>$upload_pic,
            'image_pic'=>$image_pic,
            'cdn'=>$cdn,
        ];
    }

    public function storeViewData(){
        $cdn = $this->getCdnPic();
        $in = 1;//file_get_contents("http://127.0.0.1/ip_php/index.php");
        $address_url = $in == "0" ? env("address_google") : env("address_baidu");

        $lang = $this->getLangEn();
        $lang_name='';
        $url = $this->getAllUrl();
        $Data ='';
        $upload_path = base_path('public').'/assets/images/uploads/';
        $image_path = base_path('public').'/assets/images/';
        $upload_pic = scandir($upload_path);unset($upload_pic[0],$upload_pic[1]);
        $image_pic = scandir($image_path);unset($image_pic[0],$image_pic[1]);
        $upload_pic = array_reverse($upload_pic);
        $image_pic = array_reverse($image_pic);
        if(array_key_exists('edit',$_GET)){
            foreach($url as $value){
                if(in_array($_GET['edit'],$value)){
                    $lang_name = $value['lang_file'];
                    $Data = include($lang.$value['lang_file']);
                }
            }
        }
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
            'url'=>$url,
            'lang_name'=>$lang_name,
            'upload_pic'=>$upload_pic,
            'image_pic'=>$image_pic,
            'cdn'=>$cdn,
        ];
    }



    
    public function index(){
        return $this->render(__FUNCTION__);
    }
    
    public function manage(Request $request){
        $ouput =  $request->has("edit") ? $request->input("edit") : "";
        return $this->render($ouput);
    }
	

	
	public function addupdate(Request $request){
        try{

            $new_path =  base_path('resources')."/lang/new.php";
            $new_arr = include($new_path);
            $offer = count($new_arr);
            $model = $request->input('model');
            $new_page_name = $request->input('new_page_name');
            $new_arr[$offer]['new_page_name']=$request->input('new_page_name');
            $new_arr[$offer]['model']=$request->input('model');
            file_put_contents($new_path,'<?php return '.var_export($new_arr,true).';');
            if($new_arr[$offer]['model']=='xclub'){
                shell_exec('cp '.base_path('resources').'/views/mobile/workDetail_'.$model.'.blade.php '.base_path('resources').'/views/mobile/'.$new_page_name.'.blade.php');
                shell_exec('cp '.base_path('resources').'/views/workDetail_'.$model.'.blade.php '.base_path('resources').'/views/'.$new_page_name.'.blade.php');
                shell_exec('cp '.base_path('resources').'/lang/en/workdetail'.$model.'.php '.base_path('resources').'/lang/en/'.$new_page_name.'.php');
                shell_exec('cp '.base_path('resources').'/lang/mobile/workdetail'.$model.'.php '.base_path('resources').'/lang/mobile/'.$new_page_name.'.php');
            }else{
                shell_exec('cp '.base_path('resources').'/views/mobile/'.$model.'.blade.php '.base_path('resources').'/views/mobile/'.$new_page_name.'.blade.php');
                shell_exec('cp '.base_path('resources').'/views/'.$model.'.blade.php '.base_path('resources').'/views/'.$new_page_name.'.blade.php');
                shell_exec('cp '.base_path('resources').'/lang/en/'.$model.'.php '.base_path('resources').'/lang/en/'.$new_page_name.'.php');
                shell_exec('cp '.base_path('resources').'/lang/mobile/'.$model.'.php '.base_path('resources').'/lang/mobile/'.$new_page_name.'.php');
            }

            shell_exec('cp '.base_path('resources').'/views/admin/'.$model.'.blade.php '.base_path('resources').'/views/admin/'.$new_page_name.'.blade.php');
            shell_exec('cp '.base_path('resources').'/views/adminmobile/'.$model.'.blade.php '.base_path('resources').'/views/adminmobile/'.$new_page_name.'.blade.php');


            $route = include(base_path('routes').'/route.php');
            $route[$new_page_name] = $new_page_name;
            file_put_contents(base_path('routes').'/route.php','<?php return '.var_export($route,true).';');


        }catch(Exception $e){
            var_dump($e);exit;
        }
	}
    public function newAdd(){
//        var_dump(__FUNCTION__);exit;
        return $this->render(__FUNCTION__);
    }

    public function test(Request $request){

        return $this->render(__FUNCTION__);
    }


    public function getlang()
    {
        $aJson = [];
        if($_GET['lang_name']){
            if(array_key_exists('type',$_GET) && $_GET['type']=='mobile'){
                $lang = include($this->getLangMobile().$_GET['lang_name']);
            }else{
                $lang = include($this->getLangEn().$_GET['lang_name']);
            }
            $lang['links']=$this->getAllUrl();
            $aJson['data']= $lang;
            $aJson['state']=1;
            echo json_encode($aJson);
        }
    }
    public function uploadview()
    {
        return $this->render(__FUNCTION__);
    }
    public function login()
    {
        return $this->render(__FUNCTION__);
    }

    public function loginCheck()
    {
        $aJson = [];
        $admin =json_decode(env('admin'));
        foreach($admin as $value){
            $value = json_decode( json_encode( $value),true);
            if($value['user'] == $_POST['user'] && $value['password'] == $_POST['password']){
                $aJson['state']=1;
                $_SESSION['user'] = $_POST['user'];
                break;
            }else{
                $aJson['state'] = 0;
            }
        }
        echo json_encode($aJson);
    }

    public function logout(){
        session_destroy();
    }

    public function editPage(Request $request){
        $data = '';
        if($request->input('id')>=0){
            $id = $request->input('id');
            $data = include_once(base_path('routes').'/uedit_web.php');
            var_dump($data);exit;

        }
        return view(__FUNCTION__,array(

        ));
    }

    public function add(){
        return $this->render('addpage');
    }
    public function ueditPage(){
        $route = include(base_path("routes").'/uedit_web.php');
        $view = substr($_SERVER['REQUEST_URI'],1);
        $data = '';
        foreach($route as $key=>$value){
            if(in_array($view,$value)){
                $data = $value;
            }
        }
        switch($data['new_page_type']){
            case 'PC':
                $path = '';break;
            case 'mobile':
                $path = 'mobile/';break;
        }
        return view($path.$view);
    }
}
