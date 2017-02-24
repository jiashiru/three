<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends Controller
{
    //主页
    public function index()
    {
        //查询商品的分类表
        $goods_type = DB::table("goods_type")->get();
        //查询分类表下面的类型
        $goods_category = DB::table("goods_category")->get();
        foreach($goods_type as $k=>$v){
            foreach($goods_category as $key=>$val){
                if($v['type_id'] == $val['parent_id']){
                    $goods_type[$k]['category'][] = $goods_category[$key];
                }
            }
        }
//        print_r($goods_type);
        return view("index/index",[
            'goods_type'=>$goods_type,

        ]);
    }


    //分类
    public function classify()
    {
        return view("index/classify");
    }

    //商品详情
    public function shop()
    {
        return view("index/shop");
    }
}
