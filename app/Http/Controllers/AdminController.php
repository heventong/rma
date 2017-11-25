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
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class AdminController extends Controller
{
    private $sorcefile = array('index','about','award','new','careers','contact','home','news','serve','belief','xclub','songrestaurant','songclub','dforce','cave','gangyi','aotubar','dakang','homeindex');
    public function __construct()
    {
        session_start();
        $uname = isset($_SESSION['user']) ? $_SESSION['user'] : '';
        if(empty($uname) && $_SERVER['REQUEST_URI'] != '/login' && $_SERVER['REQUEST_URI'] != '/loginCheck'){
            header("Location:/login");
        }
    }

    public function render($view){
        if(array_key_exists('manage',$_GET) && $_GET['manage']=='mobile') {
            return view("adminmobile/" . $view, $this->storeMobileViewData());
        }
        return view("admin/".$view,$this->storeViewData());

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
            if(!in_array($_GET['edit'],$this->sorcefile)){
                $Data = include($lang.$_GET['edit'].'.php');
            }else{
                foreach($url as $value){
                    if(in_array($_GET['edit'],$value)){
                        $lang_name = $value['lang_file'];
                        $Data = include($lang.$value['lang_file']);
                    }
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

    public function storeMobileViewData(){
        $cdn = $this->getCdnPic();
        $in = 1;//file_get_contents("http://127.0.0.1/ip_php/index.php");
        $address_url = $in == "0" ? env("address_google") : env("address_baidu");
        $lang = $this->getLangMobile();
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
            if(!in_array($_GET['edit'],$this->sorcefile)){
                $Data = include($lang.$_GET['edit'].'.php');
            }else {
                foreach ($url as $value) {
                    if (in_array($_GET['edit'], $value)) {
                        $lang_name = $value['lang_file'];
                        $Data = include($lang . $value['lang_file']);
                    }
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
        return $this->render('frist');
    }
    
    public function manage(Request $request){
        $ouput =  $request->has("edit") ? $request->input("edit") : "";
        return $this->render($ouput);
    }
	
    public function upload(Request $request){
		$aJson = [];
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		//echo $_FILES["file"]["size"];
		$extension = end($temp);     // 获取文件后缀名
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
//		&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
		&& in_array($extension, $allowedExts))
		{
			if ($_FILES["file"]["error"] > 0)
			{
				$aJson['status'] = 0;
				$aJson['msg'] = 'error';
				$aJson['error_num'] = $_FILES["file"]["error"];
				//echo "错误：: " . $_FILES["file"]["error"] . "<br>";
			}
			else
			{
				/*echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
				echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
				echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
				*/
				// 判断当期目录下的 upload 目录是否存在该文件
				// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
				if (file_exists("upload/" . $_FILES["file"]["name"]))
				{
					//echo $_FILES["file"]["name"] . " 文件已经存在。 ";
				}
				else
				{
					// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
					$time = time();
					$upload_dir = $this->getUploadDir();
					if(!file_exists($upload_dir)){
						mkdir($upload_dir);
					}
					move_uploaded_file($_FILES["file"]["tmp_name"], $upload_dir.$time . $_FILES["file"]["name"]);
					/*echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];*/
					$aJson['status'] = 1;
					$aJson['msg'] = 'success';
					$aJson['file_dir'] = 'assets/images/uploads/'.$time . $_FILES["file"]["name"];
				}
			}
		}
		else
		{
			//echo "非法的文件格式";
			$aJson['status'] = 0;
			$aJson['msg'] = 'error';
			$aJson['error_num'] = $_FILES["file"]["error"];
		}
		
		echo json_encode($aJson);
		exit;
		
	}
	
	public function update(Request $request){
        $file = (array_key_exists('page_type',$_POST) && $_POST['page_type'] == 'mobile'?$this->getLangMobile():$this->getLangEn()).$request->input('page_name').'.php';
        $tmp = include($file);

		if(!empty($request)){

            foreach($request->input() as $key=>$value){
                if(is_array($value)){
                    foreach ($value as $k => $v){
                        $tmp[$key][$k]=$v;
                    }
                }
                $tmp[$key]=$value;
            }
            $header = '<?php return ';
            $result = var_export($tmp,true).';';
            file_put_contents($file,$header);
            file_put_contents($file,$result,FILE_APPEND);
		}
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
        $index = '';
        if(is_numeric($request->input('id')) && $request->input('id')>=0){
            $id = $request->input('id');
            $data = include(base_path('routes').'/uedit_web.php');
            foreach ($data as $key => $value){
                if($value['id']==$id){
                    $index = $key;
                    $data = $value;
                }
            }
        }
        return view("admin/".__FUNCTION__,array(
            'index'=>$index,
            'data'=>$data,
        ));
    }
    public function showPage(){
        return $this->render(__FUNCTION__);
    }
    public function addPage(){
        if(!empty($_POST['new_page_name'])){
            if(in_array($_POST['new_page_name'],$this->sorcefile)){$this->returnContent("网址已经存在",0);}
            $tmp_arr = include(base_path("routes")."/uedit_web.php");
            if(array_key_exists('id',$_POST)&&!empty($_POST['id'])){
                $tmp_arr[$_POST['id']] = array("id"=>$_POST['id'],"create_time"=>time(),"new_page_title"=>$_POST['new_page_title'],"url"=>$_POST['new_page_name'],"new_page_name"=>$_POST['new_page_name'],"new_page_type"=>$_POST['new_page_type'],"istate"=>1,"data"=>$_POST['data']);
            }else{
//                $key = empty($tmp_arr)?0:end($tmp_arr)['id']+1;
                $tmp_arr[end($tmp_arr)['id']+1] = array("id"=>end($tmp_arr)['id']+1,"create_time"=>time(),"new_page_title"=>$_POST['new_page_title'],"url"=>$_POST['new_page_name'],"new_page_name"=>$_POST['new_page_name'],"new_page_type"=>$_POST['new_page_type'],"istate"=>1,"data"=>$_POST['data']);
            }
            $view_path = $_POST['new_page_type']=='PC'?"/":'/mobile/';
            file_put_contents(base_path("routes")."/uedit_web.php","<?php return ".var_export($tmp_arr,true)."; ");
            file_put_contents(base_path('resources').'/views'.$view_path.$_POST['new_page_name'].'.blade.php',$_POST['data']);
//            $this->returnContent("操作成功",1);

        }
    }

    public function delPage(){
        if(!empty($_POST['id']) || $_POST['id']==0){
            $tmp_arr = include(base_path("routes")."/uedit_web.php");
            foreach($tmp_arr as $key => &$value){
                if($_POST['id'] == $value['id']){
                    $view_path = $value['new_page_type']=='PC'?"/":'/mobile/';
                    $file = base_path('resources').'/views'.$view_path.$value['new_page_name'].'.blade.php';
                    shell_exec("rm -f ".$file);
                    unset($tmp_arr[$key]);
                    shell_exec("rm -f ".base_path("routes")."/uedit_web.php");
                    file_put_contents(base_path("routes")."/uedit_web.php","<?php return ".var_export($tmp_arr,true)."; ");
                    break;
                }
            }
            $this->returnContent('操作成功',1);
        }
    }
    public function editcareers(){

        return $this->render(__FUNCTION__);
    }
    public function addsavecareers(Request $request){
        if($_POST){
            switch ($_POST['type']){
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
            if(!$_POST['id']){
                $res = DB::connection('sqlite')->insert('insert into '.$table.'(title,content,create_time,page_type)   
            values(?,?,?,?)',[$_POST['title'],$_POST['data'],time(),$_POST['page_type']]);
                if($res){
                    $this->returnContent('操作成功',1);
                }
            }else{
                $res=DB::connection('sqlite')->update('update '.$table.' set title= ? , content =? , page_type = ? where id= ? ',[$_POST['title'],$_POST['data'],$_POST['page_type'],$_POST['id']]);
                if($res){
                    $this->returnContent('操作成功',1);
                }
            }
        }
    }
    public function removecareer(){
        if($_POST['id']){
            switch ($_POST['type']){
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
            $res = DB::connection('sqlite')->delete('delete from '.$table.' where id = ?',[$_POST['id']]);
            if($res){
                $this->returnContent('操作成功',1);
            }
        }
    }
}
