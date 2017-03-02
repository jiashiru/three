<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CapathController;
use Illuminate\Support\Facades\Session;
use App\Model\Admin;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'username' => 'required|min:2|max:20',
                'password' => 'required|min:6|max:18',
                'capath' => 'required',
            ],[
                'required' => ':attribute 不能为空！',
                'min' => ':attribute 长度不符合要求！',
                'max' => ':attribute 长度不符合要求！',
            ],[
                'username' => '用户名',
                'password' => '密码'
            ]);
            $username = $request->input('username');
            $password = $request->input('password');
            $capath = $request->input('capath');

            $capathCode = Session::get('capath');
            if ($capathCode != $capath) {
                return redirect('login')->with('error','验证码不正确');
            }

//            $password = crypt($password, '$1$laravel$');
            $password = md5(md5($password, true));
            $admin = Admin::where(['admin_name' => $username, 'admin_password' => $password])->get()->toArray();
            if (!$admin) {
                return redirect('loginLogin')->with('error', '密码或用户名不正确！');
            } else {
                $ip = $request->getClientIp();
                Admin::where('admin_id', '=', $admin[0]['admin_id'])->update(['last_time' => time(), 'last_ip' => $ip]);
                session_start();
                $_SESSION['admin_info'] = $admin[0];
                return redirect('/');
            }
        }
        return view('login.login');
    }

    //生成验证码
    public function getCapath()
    {
        $capath = new CapathController();
        $capath->doimg();
        //存入session
        Session::put('capath', $capath->getCode());
    }

    //找回密码
    public function reset(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
//            dd($data);
            $password = md5(md5($data['password'], true));
            $admin = Admin::where(['admin_email' =>base64_decode($data['email'])])->first();
            $admin->admin_password = $password;
            if ($admin->save()) {
                return redirect('loginLogin');
            } else {
                return redirect('loginReset?state=1&email='.$data['email']);
            }


        }
        if ($request->isMethod('GET')) {
            $state = $request->get('state');
            $email = $request->get('email');
            if ($state == 1) {
                return view('login.reset', ['state' => 1, 'email' => $email]);
            }
        }
        return view('login.reset');
    }

    //发送邮箱
    public function email(Request $request)
    {
        global $email;
        $email = $request->get('email');

        $bool = Admin::where(['admin_email' => $email])->first();
        if ($bool) {
            $emails = base64_encode($email);
            $content = '<a href="http://www.frame.com/yiyuan/three/admin/public/loginReset?state=1&email='.$emails.'">点击重置密码</a>';
            \Mail::raw($content, function($message){
                $message->from('dzj1075951808@163.com');
                $message->subject('重置密码');
                $message->to($GLOBALS['email']);
            });
           $result = [
               'success' => 1,
               'data' => base64_encode($email),
           ];
            echo json_encode($result);exit;
        } else {
            echo 0;exit;
        }
    }



    //退出登录
    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('loginLogin');
    }
}