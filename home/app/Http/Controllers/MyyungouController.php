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

class MyyungouController extends Controller
{
    public function __construct()
    {
        if (!session_id()) session_start();
    }

    //我的一元云购首页
    public function myIndex()
    {
        //查询 头像昵称
        $data = DB::table('user_information')->select('picture','nickname')->where('u_id',$_SESSION['u_id'])->first();

        //查询邮箱、手机
        $data1 = DB::table('user')->select('tel','email')->where('u_id',$_SESSION['u_id'])->first();

        return view('myyungou/myIndex',['data'=>$data,'data1'=>$data1]);
    }

    //获得的商品
    public function myGoods()
    {
        return view('myyungou/myGoods');
    }

    //我的钱包
    public function myWallet()
    {
        return view('myyungou/myWallet');
    }

    //网银充值
    public function userRechange()
    {
        return view('myyungou/UserRechange');
    }

    //充值卡充值
    public function cardRechange()
    {
        return view('myyungou/CardRechange');
    }
}