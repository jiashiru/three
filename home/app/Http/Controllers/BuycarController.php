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
    //购物车
    public function index()
    {
        $u_id = 10;//模拟登陆的ID
        //查询用户的购物车里面数据
        $cart = DB::table('cart')->where(['u_id'=>$u_id])->get();
        //查询出该用户的 购物车里面商品的信息
        $cart_goods = $this->shop_info($cart);

        foreach($cart_goods as $k=>$v){
            foreach($cart as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $cart_goods[$k]['cart_id'] = $val['cart_id'];
                    $cart_goods[$k]['code_number'] = $val['code_number'];
                }
            }
        }

        return view("buycar/index",[
            'cart_goods'=>$cart_goods,

        ]);
    }
    //查询出该用户的 购物车里面商品的信息
    public function shop_info($cart)
    {
        $goods_id_all = "";
        foreach($cart as $k=>$v){
            $goods_id_all = $goods_id_all.",".$v['goods_id'];
        }
        $goods_id_all = substr($goods_id_all,1);
        //查询商品表
        $sql = "select * from goods WHERE goods_id in($goods_id_all)";
        $cart_goods = DB::select($sql);
        //查询云期表
        $sql = "select * from goods_times WHERE state=2 AND goods_id in($goods_id_all)";
        $goods_times = DB::select($sql);

        foreach($cart_goods as $k=>$v){
            foreach($goods_times as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $cart_goods[$k]['times_id'] = $val['times_id'];
                    $cart_goods[$k]['times'] = $val['times'];
                    $cart_goods[$k]['number'] = $val['number'];
                }
            }
        }
        return $cart_goods;
    }

    //更改购物车的数量
    public function cart_num()
    {
        $where['u_id'] = 10;//模拟登陆ID
        $data['code_number'] = Input::get("new_num");
        $where['cart_id'] = Input::get("cart_id");
        $res = DB::table("cart")->where($where)->update($data);
        return $res ? 1 :0;
    }


    //结算页面
    public function account()
    {
        $u_id = 10;
        $id_all = Input::get("id_all");
        //查询购物车表，取出商品信息
        $sql = "select * from cart WHERE u_id=$u_id AND cart_id in($id_all)";
        $cart = DB::select($sql);
        $goods_cart = $this->shop_info($cart);
        foreach($goods_cart as $k=>$v){
            foreach($cart as $key=>$val){
                if($v['goods_id'] == $val['goods_id']){
                    $goods_cart[$k]['code_number'] = $val['code_number'];
                }
            }
        }




        return view("buycar/account",[
            'goods_cart'=>$goods_cart,

        ]);
    }
}