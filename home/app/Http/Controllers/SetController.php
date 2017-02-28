<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class SetController extends Controller
{
    //账号设置
    public function index(){

        return view("set/index");
    }

    //个人主页
    public function myself()
    {
        $user = "18840825602";
        $user = DB::table('user')->where(['tel'=>$user])->orwhere(['email'=>$user])->first();
        $id = $user['u_id'];
        //用  用户ID 查询  user_information 表
        $user_info = DB::table("user_information")->where(['u_id'=>$id])->first();

        return view("set/myself",[
            "user_info"=>$user_info,

        ]);

    }
}