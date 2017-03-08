<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Storage;
use App\Http\Requests;
use App\Http\Models\REST;

class SuccessController extends Controller
{
    public function index()
    {
        $u_id = 6;
        $total_fee = Input::get('total_fee');//支付的价钱
        $out_trade_no = Input::get('out_trade_no');//交易订单号
        $order = DB::table("order")->where(['order_number'=>$out_trade_no])->first();
        if($order){
//            if($order['price'] == $total_fee){
//
//            }

            $res = DB::table('order')->where(['order_number'=>$out_trade_no])->update(['state'=>1]);
            if(1){
                //修改goods_times 表  //修改goods_code表
                $res = $this->up_goods_times($order,$u_id);
            }
        }

    }
//修改goods_times 表
    public function up_goods_times($order,$u_id)
    {
        $times_id = explode(",",$order['times_id']);
        //查询goods_times表中的数据
        $goods_times = DB::table("goods_times")->wherein('times_id',$times_id)->get();

        //获取其中goods_id
        $times_goods_id = array();
        foreach($goods_times as $k=>$v){
            $times_goods_id[] = $v['goods_id'];
        }
        //将用户ID  和 商品ID 作为条件 查询
        $cart = DB::table('cart')->where(['u_id'=>$u_id])->wherein("goods_id",$times_goods_id)->get();
        foreach($goods_times as $k=>$v){
            foreach($cart as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods_times[$k]['code_number'] = $val['code_number'];
                }
            }
        }

        foreach($goods_times as $k=>$v){
            $res = DB::table('goods_times')->where(['goods_id'=>$v['goods_id']])->update(['number'=>$v['number']-$v['code_number']]);
            //修改goods_code表
            $res_id = $this->up_goods_code($v['goods_id'],$u_id,$v['times']);
        }
        if($res && $res_id){
            return 1;
        }

    }

    //修改goods_code表
    public function up_goods_code($goods_id,$u_id,$times_id)
    {
        $data['goods_id'] = $goods_id;
        $data['u_id'] = $u_id;
        $data['times_id'] = $times_id;
        $data['code'] = 10000016;
        $data['buy_time'] = time();
        $id = DB::table('goods_code')->insertGetId($data);
        return $id;
    }

}