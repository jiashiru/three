<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BuycarController extends Controller
{
    public function __construct()
    {
        session_start();
    }
    //购物车
    public function index()
    {
        
        if (!isset($_SESSION['u_id'])) 
        {
           return view("buycar/index",[
                        'end'=>0
                    ]);
        }
        else
        {
            $u_id = $_SESSION['u_id'];
        }

        //查询用户的购物车里面数据
        $cart = DB::table('cart')->where(['u_id'=>$u_id])->get();
        $data = $this->goods_info($cart);


        return view("buycar/index",[
         
            'end'=>$data
        ]);
    }


    //添加购物车
    public function add_buy()
    {
         $arr = Input::get();
         //查看购物车是否存在
         $check_buy = DB::table('cart')->where(['goods_id'=>$arr['goods_id'],'times_id'=>$arr['times_id'],'u_id'=>$arr['u_id']])->first();
         if ($check_buy) 
         {
             $number = $arr['code_number']+$check_buy['code_number'];

             $data = DB::table('cart')->where(['cart_id'=>$check_buy['cart_id']])->update(['code_number'=>$number]);
             if($data){
                 return $check_buy['cart_id'];
             }
         }
         else
         {
            $data = DB::table('cart')->insertGetId($arr);
            return $data;
         }

    }
   
    //更改购物车的数量
    public function cart_num()
    {
        $where['u_id'] = $_SESSION['u_id'];//模拟登陆ID
        $data['code_number'] = Input::get("code_number");
        $where['cart_id'] = Input::get("cart_id");
        $res = DB::table("cart")->where($where)->update($data);
        return $res ? 1 :0;
    }
    //结算页面
    public function account()
    {
         $u_id = $_SESSION['u_id'];
         $id_all = Input::get("id_all");
        //查询购物车表，取出商品信息
        $sql = "select * from cart WHERE u_id=$u_id AND cart_id in($id_all)";
        $cart = DB::select($sql);
        $data = $this->goods_info($cart);
        //提取购物车的ID
        $card_id = "";
        foreach($data as $k=>$v){
            $card_id = $card_id .",". $v['cart_id'];
        }
        $card_id = substr($card_id,1);


        return view("buycar/account",[
            'data'=>$data,
            "card_id"=>$card_id,
        ]);
    }
    //购物车删除
    public function buy_del()
    {
        $cart_id = Input::get("cart_id");
        $cart_id = explode(',', $cart_id);
        $del = DB::table('cart')->whereIn('cart_id',$cart_id)->delete();
        return $del ? json_encode(1):json_encode(0);
    }
  //商品详细信息
    public function goods_info($cart)
    {
         $goods_end_desc = DB::table('goods')->get();
         $times = DB::table('goods_times')->get();
         foreach ($times as $k => $v) 
        {
            foreach ($cart as $ke => $val) 
            {
                if ($v['times_id']==$val['times_id']) 
                {
                    $data[$k] = $val;
                    $data[$k]['times'] = $v['times'];
                    $data[$k]['state'] = $v['state'];
                    $data[$k]['number'] = $v['number'];
                }
            }
        }
        
        foreach ($goods_end_desc as $key => $v) 
        {
            foreach ($data as $k => $val) 
            {
                 if ($v['goods_id']==$val['goods_id']) 
                {
                    $data[$k]['goods_name'] = $v['goods_name'];
                    $data[$k]['goods_desc'] = $v['goods_desc'];
                    $data[$k]['goods_picture'] = $v['goods_picture'];
                    $data[$k]['goods_price'] = $v['goods_price'];
                    $data[$k]['limit_number'] = $v['limit_number'];
                }
            }
        }
        return $data;
    }

}