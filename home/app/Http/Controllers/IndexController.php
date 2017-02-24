<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends Controller
{
    //主页
    public function index()
    {
        //查询商品的 分类表 与 类型表 并且处理数组
        $goods_type = $this->type_and_category();


        return view("index/index",[
            'goods_type'=>$goods_type,//分类表 与 类型表


        ]);
    }

    //查询商品的 分类表 与 类型表 并且处理数组
    public function type_and_category()
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
                if (!array_key_exists("category",$goods_type[$k])){
                    $goods_type[$k]['category'] = array();
                }
            }
        }

        return $goods_type;
    }
    //查询轮播图
    public function carousel()
    {
        //查询轮播图
        $carousel = DB::table("carousel")->get();

        echo json_encode($carousel);
//        print_r($carousel);
    }
    //根据 传的参数 查询出热门推荐、新品上架
    public function hot()
    {
        $field = Input::get('field');
        $data = DB::table('goods')->where([$field=>1])->get();

        print_r($data);
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
