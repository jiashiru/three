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

class RegisterController extends Controller
{
    public function __construct()
    {
        session_start();
    }

   //验证用户名  手机或邮箱唯一
    public function checkName()
    {
        //接值
        $name = Input::get('name');

        //判断是手机号还是邮箱
        if(strpos($name,"@")){
            //@符号存在，为邮箱 查询邮箱
            $email = DB::table('user')->select('email')->where('email',$name)->first();

            return $email ? 0 : 1;
        }else{
            //不存在，为手机号  查询手机号
            $tel = DB::table('user')->select('tel')->where('tel',$name)->first();

            return $tel ? 0 : 1;
        }
    }

    //注册
    public function registerDo()
    {

        //接值
        $name = Input::get('name');
        $pwd = Input::get('pwd');

        //密码加密，先md5，后加three，再md5
        $new_pwd = md5(md5($pwd).'three');
        //生成一个随机且唯一的字符串，作为昵称
        $uname = 'USER.'.uniqid();
        $_SESSION['nickname'] = $uname;
        $_SESSION['picture'] = '';


        //判断是手机还是邮箱
        if(strpos($name,"@")){
            //找到为邮箱
           $result = DB::table('user')->insertGetId([
               'email' => $name,
               'password' => $new_pwd,
               'create_time'=>time()
            ]);
            if($result){
                //添加昵称到用户信息表
                $result_info = DB::table('user_information')->insertGetId([
                    'nickname' => $uname,
                    'u_id'=>$result
                ]);
                if($result_info){
                    //添加成功，存session
                    $_SESSION['u_id'] = $result;
                    $_SESSION['email'] = $name;

                    return 1;
                }else{
                    return 0;
                }

            }else{

                return 0;
            }
        }else{
            //没找到，为手机号

            $result = DB::table('user')->insertGetId([
                'tel' => $name,
                'password' => $new_pwd,
                'create_time'=>time()
            ]);
            if($result){
                //添加昵称到用户信息表
                $result_info = DB::table('user_information')->insertGetId([
                    'nickname' => $uname,
                    'u_id'=>$result
                ]);
                if($result_info){
                    //添加成功，存session
                    $_SESSION['u_id'] = $result;
                    $_SESSION['email'] = $name;

                    return 1;
                }else{

                    return 0;
                }
            }else{

                return 0;
            }
        }


    }
}
