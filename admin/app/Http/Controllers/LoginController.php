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
            $user = Admin::where(['admin_name' => $username, 'admin_password' => $password])->first()->toArray();
            if (!$user) {
                return redirect('loginLogin');
            } else {
                $ip = $request->getClientIp();
                Admin::where('admin_id', '=', $user['admin_id'])->update(['last_time' => time(), 'last_ip' => $ip]);
                session_start();
                $_SESSION['user_info'] = $user;
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


    //退出登录
    public function logout()
    {
        session_start();
        session_destroy('user_info');
        return redirect('loginLogin');
    }
}