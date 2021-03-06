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

class LoginController extends Controller
{
    public function __construct()
    {
        session_start();
    }

    //登录
    public function loginDo()
    {
        //接值
        $name = Input::get('name');
        $pwd = Input::get('pwd');
        $ajax = Input::get('ajax');
        //正则验证
        if(empty($name)||empty($pwd)){
            if ($ajax) 
            {
                return json_encode(0);
            }
            else
            {
                return view("login",['msg'=>'用户名或密码不能为空']);
            }
            
        }
        $reg_tel = "/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/";
        $reg_email = "/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/";
        $reg_pwd = "/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/";

        if(strpos($name,"@")){
            if(!preg_match($reg_email,$name)){
                   if ($ajax) 
                    {
                        return json_encode(2);
                    }
                    else
                    {
                        return view("login",['msg'=>'请输入正确的邮箱或手机号']);
                    }
                
            }
        }else{
            if(!preg_match($reg_tel,$name)){
                if ($ajax) 
                    {
                        return json_encode(2);
                    }
                    else
                    {
                        return view("login",['msg'=>'请输入正确的邮箱或手机号']);
                    }
            }
        }
        if(!preg_match($reg_pwd,$pwd)){
                   if ($ajax) 
                    {
                        return json_encode(3);
                    }
                    else
                    {
                        return view("login",['msg'=>'密码格式不正确']);
                    }
            
        }

        $new_pwd = md5(md5($pwd).'three');


        //判断是邮箱登录还是手机登录
        if(strpos($name,"@")){
            //为邮箱
            $data = DB::table('user')->where('email',$name)->where('password',$new_pwd)->first();
            if($data){
                //存在，登录
                $_SESSION['u_id'] = $data['u_id'];
//                $_SESSION['email'] = $data['email'];
                $nickname = $this->nickname($data['u_id']);
                $_SESSION['nickname'] = $nickname['nickname'];
                $_SESSION['picture'] = $nickname['picture'];
                  if ($ajax)
                    {
                        return json_encode(1);
                    }
                    else
                    {
                         return redirect('/');
                    }
               
            }else{
                    if ($ajax) 
                    {
                        return json_encode(2);
                    }
                    else
                    {
                         return view("login",['msg'=>'用户名或密码错误，请重新输入']);
                    }
                
            }
        }else{
            //为手机号，查询
            $data = DB::table('user')->where('tel',$name)->where('password',$new_pwd)->first();
            if($data){
                //存在，登录
                $_SESSION['u_id'] = $data['u_id'];
//                $_SESSION['tel'] = $data['tel'];
                $nickname = $this->nickname($data['u_id']);
                $_SESSION['nickname'] = $nickname['nickname'];
                $_SESSION['picture'] = $nickname['picture'];
                // var_dump($_SESSION['u_id']);die;
                 if ($ajax) 
                    {
                        return json_encode(1);
                    }
                    else
                    {
                         return redirect("/");
                    }
               
            }else{
                 if ($ajax) 
                    {
                        return json_encode(2);
                    }
                    else
                    {
                         return view("login",['msg'=>'用户名或密码错误，请重新输入']);
                    }
                
            }
        }
    }

    //查询用户昵称
    public function nickname($u_id)
    {
        $nickname = DB::table('user_information')->select('nickname','picture')->where('u_id',$u_id)->first();

        return $nickname;
    }

    //退出方法
    public function quit()
    {
        //清除session
        session_destroy();
        return view('login');
    }

}