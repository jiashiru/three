<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Storage;
use App\Http\Requests;
use App\Http\Models\RESTModel;

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
    public function thumb($filename,$name,$savePath,$width=200,$height=200)
    {
        //获取原图像$filename的宽度$width_orig和高度$height_orig
        list($width_orig, $height_orig) = getimagesize($filename);

        //根据参数$width和$height值，换算出等比例缩放的高度和宽度
        if ($width && ($width_orig < $height_orig)) {
            $width = ($height / $height_orig) * $width_orig;
        } else {
            $height = ($width / $width_orig) * $height_orig;
        }

        //将原图缩放到这个新创建的图片资源中
        $image_p = imagecreatetruecolor($width, $height);
        //获取原图的图像资源
        $image = imagecreatefromjpeg($filename);

        //使用imagecopyresampled()函数进行缩放设置
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

        //将缩放后的图片$image_p保存，100(质量最佳，文件最大)
        imagejpeg($image_p, $_SERVER['DOCUMENT_ROOT'] . $savePath . '/' . $name);
//echo $_SERVER['DOCUMENT_ROOT'].$savePath.'/'.$name;die;
        imagedestroy($image_p);
        imagedestroy($image);
    }

    //收货地址页面
    public function address()
    {
        //查询收货地址
        $address = DB::table('address')
            ->where('u_id',$_SESSION['u_id'])
            ->orderBy('status','desc')
            ->get();


        return view('set/address',['address'=>$address]);
    }

    //添加收货地址
    public function addressAdd()
    {
        //接值
        $data = Input::get();
        //验证
        if(empty($data['consignee'])){
            return view('public/jump',['msg'=>'用户名不能为空','url'=>'address']);
        }
        if(empty($data['tel'])){
            return view('public/jump',['msg'=>'手机号不能为空','url'=>'address']);
        }

       //处理城市
        $location = implode(" ",[$data['location_p'],$data['location_c'],$data['location_a']]);

        //先查询数据库中该用户的收货地址是否大于等于4条，如果是，不能添加
        $count = DB::table('address')->where('u_id',$_SESSION['u_id'])->count();
        if($count>=4){
            return view('public/jump',['msg'=>'您已经添加了4个收货地址，不能再添加','url'=>'address']);
        }else{
            if($count==0){
                //默认地址
                $status = 1;
            }else{
                $status = 0;
            }
            //执行添加
            $res = DB::table('address')
                ->insert([
                    'consignee'=>$data['consignee'],
                    'tel'=>$data['tel'],
                    'u_id'=>$_SESSION['u_id'],
                    'address'=>$location,
                    'postcode'=>$data['postcode'],
                    'detail_address'=>$data['detail_address'],
                    'phone'=>$data['phone'],
                    'status'=>$status
                ]);
            if($res){
                return view('public/jump',['msg'=>'收货地址添加成功','url'=>'address']);
            }else{
                return view('public/jump',['msg'=>'收货地址添加失败','url'=>'address']);
            }
        }

    }

    //账户安全页面
    public function security()
    {
        //查询绑定信息
        $data = DB::table('user')->select('tel','email')->where('u_id',$_SESSION['u_id'])->first();
        if($data['tel']){
            //为手机绑定
            $tel = substr($data['tel'],0,4)."****".substr($data['tel'],9,2);

            return view('set/security',['tel'=>$tel]);
        }else{
            //为邮箱绑定
            $length = strlen($data['email']);
            $count = strpos($data['email'],'@');

            $email = substr($data['email'],1)."*".substr($data['email'],$count,$length);

            return view('set/security',['email'=>$email]);
        }

    }

    //修改密码页面
    public function updatePwd()
    {
        return view('set/updatePwd');
    }

    //验证原始密码
    public function checkPwd()
    {
        $oldpwd = Input::get('oldpwd');
        $pwd =  md5(md5($oldpwd).'three');

        $data = DB::table('user')
            ->select('password')
            ->where(['u_id'=>$_SESSION['u_id'],'password'=>$pwd])
            ->first();
//print_r($data);
        return $data ? 1 : 0;
    }

    //修改密码
    public function pwdDo()
    {
        $oldpwd = Input::get('oldPass');
        $newpwd = Input::get('newPass');
        $newPassAgain = Input::get('newPassAgain');
        if($newpwd!=$newPassAgain){

            return view('public/jump',['msg'=>'密码和确认密码不一致','url'=>'updatePwd']);
        }
        $pwd =  md5(md5($oldpwd).'three');
        //验证旧密码是否正确
        $data = DB::table('user')
            ->select('password')
            ->where(['u_id'=>$_SESSION['u_id'],'password'=>$pwd])
            ->first();
        if($data){
            $newPwd =  md5(md5($newpwd).'three');
            //执行修改
            $res = DB::table('user')
                ->where(['u_id'=>$_SESSION['u_id'],'password'=>$pwd])
                ->update(['password'=>$newPwd]);
            if($res){
                return view('public/jump',['msg'=>'修改成功','url'=>'security']);
            }else{
                return view('public/jump',['msg'=>'修改失败','url'=>'updatePwd']);
            }
        }
    }

    //验证码页面
    public function telCode()
    {

        //查询为手机绑定还是邮箱绑定
        $data = DB::table('user')->select('tel','email')->where('u_id',$_SESSION['u_id'])->first();

        if($data['tel']){
            //为手机绑定
            $tel = substr($data['tel'],0,4)."****".substr($data['tel'],9,2);

            return view('set/telCode',['tel'=>$tel,'tel_hide'=>$data['tel']]);
        }else{
            //为邮箱绑定
            $length = strlen($data['email']);
            $count = strpos($data['email'],'@');

            $email = substr($data['email'],1)."*".substr($data['email'],$count,$length);


            return view('set/telCode',['email'=>$email,'email_hide'=>$data['email']]);
        }

    }

    //手机验证码
    public function telephone(Request $request)
    {

        //生成验证码
        $code=rand(1000,9999);
        //把验证码存入cookie
        $_SESSION['code']=$code;
        //接值
        $to=Input::get("tel");
//        $to = 18840825602;
        $datas=[$code,'1'];
        $tempId='1';


        //Demo调用
        //**************************************举例说明***********************************************************************
        //*假设您用测试Demo的APP ID，则需使用默认模板ID 1，发送手机号是13800000000，传入参数为6532和5，则调用方式为           *
//        $result = $this->sendTemplateSMS("13800000000" ,array('6532','5'),"1");
        //*则13800000000手机号收到的短信内容是：【云通讯】您使用的是云通讯短信模板，您的验证码是6532，请于5分钟内正确输入     *
        //*********************************************************************************************************************

        $this->sendTemplateSMS($to,$datas,$tempId);//手机号码，替换内容数组，模板ID
//echo $code;

    }

    //手机验证码
    public function sendTemplateSMS($to="",$datas="",$tempId="")
    {
//        include ('./CCPRestSmsSDK.php');
        global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
        //主帐号,对应开官网发者主账号下的 ACCOUNT SID
        $accountSid= '8aaf07085992544f0159958d3bb200e2';

        //主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
        $accountToken= '0781a20a8a1b4fd0a4054f8e4fafb040';

        //应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
        //在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
        $appId='8aaf07085992544f0159958d3c1200e6';

        //请求地址
        //沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
        //生产环境（用户应用上线使用）：app.cloopen.com
        $serverIP='app.cloopen.com';


        //请求端口，生产环境和沙盒环境一致
        $serverPort='8883';

        //REST版本号，在官网文档REST介绍中获得。
        $softVersion='2013-12-26';
        // 初始化REST SDK
        // var_dump($serverIp);die;
        $rest = new RESTModel($serverIP,$serverPort,$softVersion);
        $rest->setAccount($accountSid,$accountToken);
        $rest->setAppId($appId);

        // 发送模板短信
        echo "Sending TemplateSMS to $to <br/>";
        $result = $rest->sendTemplateSMS($to,$datas,$tempId);
        if($result == NULL ) {
            echo "result error!";
//            break;
        }
        if($result->statusCode!=0) {
            echo "error code :" . $result->statusCode . "<br>";
            echo "error msg :" . $result->statusMsg . "<br>";
            //TODO 添加错误处理逻辑
        }else{
            echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
            echo "dateCreated:".$smsmessage->dateCreated."<br/>";
            echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
            //TODO 添加成功处理逻辑
        }
    }

    //验证手机验证码是否正确
    public function checkCode()
    {
        if(!isset($_SESSION['code'])){

            return json_encode(['status'=>0,'msg'=>'验证码不能为空']);
        }else{
            $code = Input::get('code');
            if($_SESSION['code']!=$code){

                return json_encode(['status'=>1,'msg'=>'验证码不正确']);
            }else{

                return json_encode(['status'=>2,'msg'=>'验证成功']);
            }
        }
    }

    //设置支付密码页面
    public function payPwd()
    {
        return view('set/payPwd');
    }

    //添加支付密码
    public function codeAdd()
    {
        //接值
        $txtPwd1 = Input::get('txtPwd1');
        $txtPwd2 = Input::get('txtPwd2');
        if($txtPwd1!=$txtPwd2){
            return json_encode(['msg'=>'密码和确认密码不一致','status'=>4]);
        }
        $code = md5($txtPwd1);
        $pwd = DB::table('pay_code')->where('u_id',$_SESSION['u_id'])->first();
        if($pwd){
            return json_encode(['msg'=>'已经设置支付密码','status'=>1]);
        }
        $res = DB::table('pay_code')->insert(['u_id'=>$_SESSION['u_id'],'pay_code'=>$code]);
        if($res){
            return json_encode(['msg'=>'设置成功','status'=>3]);
        }else{
            return json_encode(['msg'=>'设置失败','status'=>2]);
        }
    }

    //发送邮箱页面
    public function sendEmail()
    {
        return view('set/sendEmail');
    }

    //发送邮箱
    public function sendEmailDo()
    {

        $code=rand(1000,9999);
        $_SESSION['email_code'] = $code;
        $flag = Mail::send('email',['code'=>$code],function($message)
        {
            //接值
            $email = Input::get('email');
            //验证空，验证正则
            $to = $email;
            $message ->to($to)->subject('邮箱绑定');
        });

        return $flag ? 1 : 0;
    }

    //验证邮箱验证码
    public function CheckEmailCode()
    {
        //接值
        $email = Input::get('email');
        $email_code = Input::get('email_code');
        if($email_code!=$_SESSION['email_code']){
            return 0;
        }else{
            //添加到数据库user
            $res = DB::table('user')->where('u_id',$_SESSION['u_id'])->update(['email'=>$email]);

            return $res ? 1 :0;

        }
    }







    //个人主页
    public function myself()
    {

//        $user = "18840825602";
//        $user = DB::table('user')->where(['tel'=>$user])->orwhere(['email'=>$user])->first();
//        $id = $user['u_id'];
//        $id = $_SESSION['u_id'];
        if(isset($_GET['u_id'])){
            $u_id = Input::get('u_id');
        }else{
            $u_id = $_SESSION['u_id'];
        }

        //用  用户ID 查询  user_information 表
        $user_info = DB::table("user_information")->where(['u_id'=>$u_id])->first();

        $goods = $this->time_record();
//print_r($goods);die;
        return view("set/myself",[
            "user_info"=>$user_info,
            "goods"=>$goods,

        ]);

    }

    /**
     * 传入用户ID
     * @return array() //云购记录
     */
    public function time_record()
    {
        $u_id = $_SESSION['u_id'];
        $u_id = 6;
        //查询该用户的记录
//        $goods_code = DB::table("goods_code")->where(['u_id'=>$u_id])->get();
        $goods_code = DB::table('goods_code')->select('*',DB::raw('COUNT(goods_id) as num'))->where(['u_id'=>$u_id])->groupBy('goods_id')->get();
//print_r($goods_code);die;
        //通过记录查询商品表  查询云期表
        $goods_id_all = array();
        $goods_times_all = array();
        foreach($goods_code as $k=>$v){
            $goods_id_all[] = $v['goods_id'];
            $goods_times_all[] = $v['times_id'];
        }
        //根据条件查询 商品
        $goods = DB::table("goods")->wherein('goods_id',$goods_id_all)->get();
        //根据条件查询 云期
        $goods_times = DB::table("goods_times")->wherein("times_id",$goods_times_all)->get();
        //根据商品ID 查询商品品牌
        $goods_brand_id = array();
        foreach($goods as $k=>$v){
            $goods_brand_id[] = $v['brand_id'];
        }
        $goods_brand = DB::table("goods_brand")->wherein("brand_id",$goods_brand_id)->get();
        foreach($goods as $k=>$v){
            foreach($goods_times as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods[$k]['times'] = $val['times'];
//                    $goods[$k]['buy_time'] = date("Y-m-d H:i:s",$val['buy_time']);
                    $goods[$k]['number'] = $val['number'];
                    $goods[$k]['start_time'] = date("Y-m-d H:i:s",$val['start_time']);
                    $goods[$k]['end_time'] = date("Y-m-d H:i:s",$val['end_time']);
                }
            }
            foreach($goods_brand as $key=>$val){
                if($v['brand_id'] == $val['brand_id']){
                    $goods[$k]['brand_name'] = $val['brand_name'];
                }
            }

        }

        foreach($goods_code as $k=>$v){
            foreach($goods as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods_code[$k]['goods'] = $val;
                    $goods_code[$k]['buy_time'] = date("m月d日 H:i",$v['buy_time']);
                }
            }
        }

        //查询获奖者
        foreach ($goods_code as $k=>$v) {
            $get = DB::table('goods_code')->where(['goods_id'=>$v['goods_id'],'state'=>1])->first();
            $get_user = DB::table('user_information')->where('u_id',$get['u_id'])->first();
            $goods_code[$k]['get_user'] = $get_user['nickname'];
        }


//print_r($goods_code);die;
        return $goods_code;




    }


}