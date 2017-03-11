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
use App\Http\Controllers\SetController;


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
    public function getGoods()
    {
//        $goods_code = DB::table("goods_code")->where(['u_id'=>$_SESSION['u_id'],'state'=>1])->get();
        $goods_code = DB::table('goods_code')->select('*',DB::raw('COUNT(goods_id) as num'))->where(['u_id'=>$_SESSION['u_id'],'state'=>1])->groupBy('goods_id')->get();

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

        return view('myyungou/getGoods',['goods'=>$goods_code]);

//print_r($goods_code);die;
//        return $goods_code;
//        print_r($goods_code);
    }

    //云购记录
    public function myGoods()
    {
        $goods = new SetController();
        $goods_code = $goods->time_record($_SESSION['u_id']);

        return view('myyungou/myGoods',['goods'=>$goods_code]);
    }

    //云购详情
    public function detail()
    {
        $goods_id = Input::get('goods_id');
        $u_id = $_SESSION['u_id'];
        $u_id = 6;
        //查询该用户的记录
        $goods_code = DB::table("goods_code")->select('code')->where(['u_id'=>$u_id,'goods_id'=>$goods_id])->get();
        //定义一个空的数组
        $code = [];
        foreach ($goods_code as $k=>$v) {
            $code[] = $v['code'];
        }

//        print_r($code);
        return json_encode($goods_code);
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