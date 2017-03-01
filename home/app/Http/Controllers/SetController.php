<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use Storage;
use App\Http\Requests;

class SetController extends Controller
{
    public function __construct()
    {
        if(!session_id())session_start();
    }

    //个人信息页面
    public function setInfo()
    {
        //取出用户id
        $u_id = $_SESSION['u_id'];
        //查询用户信息表
        $data = DB::table("user_information")->where("u_id",$u_id)->first();
        if(!empty($data['location'])){
            $location = explode(" ",$data['location']);
            $data['location_p'] = $location[0];
            $data['location_c'] = $location[1];
            $data['location_a'] = $location[2];
        }
        if(!empty($data['birthday'])){
            $birthday = explode(" ",$data['birthday']);
            $data['year'] = $birthday[0];
            $data['month'] = $birthday[1];
            $data['day'] = $birthday[2];
        }
//        print_r($data);
        return view("set/index",["info"=>$data]);
    }

    //验证昵称唯一
    public function checkNick()
    {
        $nickname = Input::get('nickname');

        //查询
        $data = DB::table('user_information')->where('nickname',$nickname)->first();

        return $data ? 0 : 1;
    }

    //修改个人信息
    public function infoDo()
    {

        $data = Input::get();
        //验证昵称
        $reg_name = "/^.{2,20}$/";
        if(empty($data['nickname'])){
            return view('public/jump',['msg'=>'昵称不能为空','url'=>'setInfo']);
        }else if(!preg_match($reg_name,$data['nickname'])){
            return view('public/jump',['msg'=>'昵称为2-20个字符','url'=>'setInfo']);
        }
        //处理城市
        $location = implode(" ",[$data['location_p'],$data['location_c'],$data['location_a']]);

        //处理生日
        if(!empty($data['day'])){
            $birthday = implode(" ",[$data['year'],$data['month'],$data['day']]);
        }else{
            $birthday = "";
        }

        //执行修改
       $res = DB::table('user_information')
            ->where('u_id', $_SESSION['u_id'])
            ->update([
                'nickname' => $data['nickname'],
                'sex'=>$data['sex'],
                'phone'=>$data['phone'],
                'location'=>$location,
                'birthday'=>$birthday,
                'qq'=>$data['txtQQ'],
                'signature'=>$data['txtSignature']
            ]);
        if($res){

            return view('public/jump',['msg'=>'修改成功','url'=>'setInfo']);
        }else{

            return view('public/jump',['msg'=>'修改失败','url'=>'setInfo']);
        }

    }

    //修改头像页面
    public function header()
    {

        //查询展示头像
        $img = DB::table('user_information')
            ->select('picture')
            ->where('u_id',$_SESSION['u_id'])
            ->first();
//        $path = storage_path('app/');
        return view('set/header',['img'=>$img]);
    }

    //上传头像
    public function uploadHead(Request $request)
    {
        if ($request->isMethod('post')) {

            $file = $request->file('upload');
            if(empty($file)){
                return view('public/jump',['msg'=>'请选择图片','url'=>'header']);
            }

            // 文件是否上传成功
            if ($file->isValid()) {

                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $fileSize = $file->getSize();

                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $fileType = $file->getClientMimeType();     // image/jpeg

                $type = ['png','jpg','jpeg'];
                if(!in_array($ext,$type)){
                    return view('public/jump',['msg'=>'图片格式不正确','url'=>'uploads']);
                }
                if($fileSize>6*1024*1024){
                    return view('public/jump',['msg'=>'图片过大，请重新选择','url'=>'uploads']);
                }

                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;

                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
//                $res = move_uploaded_file();
//                var_dump($bool);
                //调用裁剪图片方法
                $this->thumb(storage_path('app/uploads/').$filename,$filename,'/uploads/uploads_mid',80,80);
                $this->thumb(storage_path('app/uploads/').$filename,$filename,'/uploads/uploads_small',30,30);
                $this->thumb(storage_path('app/uploads/').$filename,$filename,'/uploads/uploads_big',160,160);
                //添加入库
                $res = DB::table('user_information')
                    ->where('u_id',$_SESSION['u_id'])
                    ->update(['picture'=>$filename]);
                if($res){
                    //裁剪完删除图片
                    unlink(storage_path('app/uploads/'.$filename));
                    return view('public/jump',['msg'=>'上传成功','url'=>'header']);
                }else{
                    return view('public/jump',['msg'=>'上传失败','url'=>'header']);
                }


            }
        }
    }


    //用于对图片进行缩放
    function thumb($filename,$name,$savePath,$width=200,$height=200){
        //获取原图像$filename的宽度$width_orig和高度$height_orig
        list($width_orig,$height_orig) = getimagesize($filename);

        //根据参数$width和$height值，换算出等比例缩放的高度和宽度
        if ($width && ($width_orig<$height_orig)){
            $width = ($height/$height_orig)*$width_orig;
        }else{
            $height = ($width / $width_orig)*$height_orig;
        }

        //将原图缩放到这个新创建的图片资源中
        $image_p = imagecreatetruecolor($width, $height);
        //获取原图的图像资源
        $image = imagecreatefromjpeg($filename);

        //使用imagecopyresampled()函数进行缩放设置
        imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);

        //将缩放后的图片$image_p保存，100(质量最佳，文件最大)
        imagejpeg($image_p,$_SERVER['DOCUMENT_ROOT'].$savePath.'/'.$name);
//echo $_SERVER['DOCUMENT_ROOT'].$savePath.'/'.$name;die;
        imagedestroy($image_p);
        imagedestroy($image);
    }
}